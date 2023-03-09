<?php

namespace App\Controller;

use App\Entity\Dish;
use App\Repository\DishRepository;
use App\Repository\OpeningHoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function index(DishRepository $dishRepository): Response
    {
        $dishes = $dishRepository->findAll();
        return $this->render('main/index.html.twig', [
            'dishes' => $dishes,
        ]);
    }

    // public function footerHours(OpeningHoursRepository $openingHoursRepository): Response
    // {
    //     $hours = $openingHoursRepository->findAll();
    //     return $this->render('components/_footer.html.twig', [
    //         'hours' => $hours,
    //     ]);
    // }
}
