<?php

namespace App\Controller;

use App\Repository\OpeningHoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FooterController extends AbstractController
{

    #[Route('/footer', name: 'footer')]
    public function opening(OpeningHoursRepository $hoursRepository): Response
    {
        $hours = $hoursRepository->findAll();
        return $this->render('components/_footer.html.twig', [
            'hours' => $hours,
        ]);

    }
}
