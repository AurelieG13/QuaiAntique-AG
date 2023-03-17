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

#[Route('/admin/booking', name: 'admin_booking_')]
class AdminBookingController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(BookingRepository $bookingRepository): Response
    {
        return $this->render('admin/admin_booking/index.html.twig', [
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

            return $this->redirectToRoute('admin_booking_list');
        }


        return $this->render('admin/admin_booking/addBooking.html.twig', [
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

            return $this->redirectToRoute('admin_booking_list');
        }

        return $this->render('admin/admin_booking/editBooking.html.twig', [
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
        return $this->redirectToRoute('admin_booking_list');
    }
}
