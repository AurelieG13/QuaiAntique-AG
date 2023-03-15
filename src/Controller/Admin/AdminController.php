<?php

namespace App\Controller\Admin;

use App\Entity\Dish;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin', name: 'admin_')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }

    #[Route('/tototest', name: 'tototest')]
    public function tototest(Dish $dish, ObjectManager $manager): Response
    {
        
        // return $this->render('admin/index2.html.twig');
        // return new Response("true");
        return $this->json(['code' => 200, 'message' => 'ok ça marche bien'], 200);
    }
}
