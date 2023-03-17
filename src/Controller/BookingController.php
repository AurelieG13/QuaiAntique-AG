<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Form\BookingFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/booking', name: 'booking_')]
class BookingController extends AbstractController
{
    #[Route('/', name: 'form')]
    public function form(Request $request, EntityManagerInterface $manager): Response
    {
        $booking = new Booking();
        
        if($this->getUser()) {
            $user = $this->getUser();
            $booking->setUser($user);
            // $booking->setName($this->getUser()->getName())
            //     ->setFirstname($this->getUser()->getFirstname())
            //     ->setPhoneNumber($this->getUser()->getPhoneNumber())
            //     ->setEmail($this->getUser()->getEmail())
            //     ->setSeats($this->getUser()->getGuestBooking())
            //     // ->addAllergy($this->getUser()->getAllergies())
            //     ;
        }

        $form = $this->createForm(BookingFormType::class, $booking);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $booking = $form->getData();
            $manager->persist($booking);
            $manager->flush();

            return $this->redirectToRoute('home');
            $this->addFlash('success', 'réservation effectuée avec succès');
    }
    
        return $this->render('booking/index.html.twig', [
                'form' => $form->createView(),
            ]);
    }
}
