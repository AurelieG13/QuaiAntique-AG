<?php

namespace App\Controller\Admin;

use App\Entity\OpeningHours;
use App\Form\HoursType;
use App\Repository\OpeningHoursRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/hours', name: 'admin_hours_')]
class AdminHoursController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(OpeningHoursRepository $openingHoursRepository): Response
    {
        $hours = $openingHoursRepository->findAll();
        return $this->render('admin/admin_hours/index.html.twig', [
            'hours' => $hours,
        ]);
    }

    #[Route('/add', name: 'add')]
    public function addHours(Request $request, ManagerRegistry $doctrine): Response
    {
        $hour = new OpeningHours();

        $form = $this->createForm(HoursType::class, $hour);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($hour);
            $em->flush();

            return $this->redirectToRoute('admin_hours_list');
        }

        return $this->render('admin/admin_hours/addHours.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/edit/{id}', name: 'edit')]
    public function editHours(OpeningHours $hour, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(HoursType::class, $hour);

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($hour);
            $em->flush();

            return $this->redirectToRoute('admin_hours_list');
        }

        return $this->render('admin/admin_hours/editHours.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function deleteHours(OpeningHours $hour, ManagerRegistry $doctrine)
    {
        
        $em = $doctrine->getManager();
        $em->remove($hour);
        $em->flush(); 

        $this->addFlash('success', 'horaire supprimé avec succes');
        return $this->redirectToRoute('admin_hours_list');
    }
}
