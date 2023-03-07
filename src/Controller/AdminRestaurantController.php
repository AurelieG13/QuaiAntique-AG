<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminRestaurantController extends AbstractController
{
    #[Route('/admin/restaurant', name: 'app_admin_restaurant')]
    public function index(): Response
    {
        return $this->render('admin_restaurant/index.html.twig', [
            'controller_name' => 'AdminRestaurantController',
        ]);
    }
}
