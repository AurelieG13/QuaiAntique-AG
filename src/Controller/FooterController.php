<?php

namespace App\Controller;

use App\Repository\OpeningHoursRepository;
use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/footer', name: 'footer')]
class FooterController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function opening(OpeningHoursRepository $hoursRepository, RestaurantRepository $restoRepository): Response
    {
        $restos = $restoRepository->findAll();
        return $this->render('components/_footer.html.twig', [
            'restos' => $restos
        ]);

    }

}
