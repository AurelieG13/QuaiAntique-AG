<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AProposController extends AbstractController
{
    #[Route('/APropos', name: 'a_propos')]
    public function index(): Response
    {
        return $this->render('a_propos/index.html.twig');
    }
}