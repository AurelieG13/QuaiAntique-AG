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

#[Route('/manager/hours', name: 'manager_hours_')]
class AdminHoursController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(OpeningHoursRepository $openingHoursRepository): Response
    {
        $hours = $openingHoursRepository->findBy([], ['sortWeek' => 'asc']);
        return $this->render('manager/manager_hours/index.html.twig', [
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

            return $this->redirectToRoute('manager_hours_list');
        }

        return $this->render('manager/manager_hours/addHours.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/edit/{id<\d+>}', name: 'edit')]
    public function editHours(OpeningHours $hour, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(HoursType::class, $hour);

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($hour);
            $em->flush();

            return $this->redirectToRoute('manager_hours_list');
        }

        return $this->render('manager/manager_hours/editHours.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/duplicate/{id<\d+>}', name: 'duplicate')]
    public function duplicateHours(OpeningHours $hour, ManagerRegistry $doctrine)
    {
        $copyHours = clone $hour;

        $em = $doctrine->getManager();
        $em->persist($copyHours);
        $em->flush();

        return $this->redirectToRoute('manager_hours_list');
    }

    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function deleteHours(OpeningHours $hour, ManagerRegistry $doctrine)
    {
        
        $em = $doctrine->getManager();
        $em->remove($hour);
        $em->flush(); 

        $this->addFlash('success', 'horaire supprimé avec succes');
        return $this->redirectToRoute('manager_hours_list');
    }
}
