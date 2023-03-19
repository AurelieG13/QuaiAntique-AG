<?php

namespace App\Controller\Admin;

use App\Entity\Booking;
use App\Form\BookingFormType;
use App\Repository\BookingRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/manager/booking', name: 'manager_booking_')]
class AdminBookingController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(BookingRepository $bookingRepository): Response
    {
        return $this->render('manager/manager_booking/index.html.twig', [
            'bookings' => $bookingRepository->findAll(),
        ]);
    }

    #[Route('/add', name: 'add')]
    public function addBooking(Request $request, ManagerRegistry $doctrine): Response
    {
        $booking = new Booking();

        $form = $this->createForm(BookingFormType::class, $booking);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $booking = $form->getData();
            $em = $doctrine->getManager();
            $em->persist($booking);
            $em->flush();

            return $this->redirectToRoute('manager_booking_list');
        }


        return $this->render('manager/manager_booking/addBooking.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/edit/{id<\d+>}', name: 'edit')]
    public function editBooking(Booking $booking, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(BookingFormType::class, $booking);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($booking);
            $em->flush();

            return $this->redirectToRoute('manager_booking_list');
        }

        return $this->render('manager/manager_booking/editBooking.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function deleteBooking(Booking $booking, ManagerRegistry $doctrine)
    {
        
        $em = $doctrine->getManager();
        $em->remove($booking);
        $em->flush(); 

        $this->addFlash('success', 'réservation supprimée avec succes');
        return $this->redirectToRoute('manager_booking_list');
    }
}
