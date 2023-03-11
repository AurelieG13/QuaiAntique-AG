<?php

namespace App\Controller\Admin;

use App\Entity\Formule;
use App\Form\FormuleType;
use App\Repository\FormuleRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/formule', name: 'admin_formule_')]
class AdminFormuleController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function listFormule(FormuleRepository $formuleRepository): Response
    {
        return $this->render('admin/admin_formule/index.html.twig', [
            'formules' => $formuleRepository->findAll(),
        ]);
    }

    #[Route('/add', name: 'add')]
    public function addFormule(Request $request, ManagerRegistry $doctrine): Response
    {
        $formule = new Formule();

        $form = $this->createForm(FormuleType::class, $formule);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $formule = $form->getData();
            $em = $doctrine->getManager();
            $em->persist($formule);
            $em->flush();

            return $this->redirectToRoute('admin_formule_list');
        }


        return $this->render('admin/admin_formule/addFormule.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/edit/{id<\d+>}', name: 'edit')]
    public function editFormule(Formule $formule, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(FormuleType::class, $formule);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($formule);
            $em->flush();

            return $this->redirectToRoute('admin_formule_list');
        }

        return $this->render('admin/admin_formule/editFormule.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function deleteFormule(Formule $formule, ManagerRegistry $doctrine)
    {
        
        $em = $doctrine->getManager();
        $em->remove($formule);
        $em->flush(); 

        $this->addFlash('success', 'formule supprimée avec succes');
        return $this->redirectToRoute('admin_formule_list');
    }
}
