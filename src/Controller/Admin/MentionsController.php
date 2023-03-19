<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('admin/mentions', name: 'admin_mentions_')]
class MentionsController extends AbstractController
{
    #[Route('/mentions', name: 'mentionsLegales')]
    public function mentions(): Response
    {
        return $this->render('mentions/mentions.html.twig');
    }

    #[Route('/confidentialite', name: 'confidentialite')]
    public function confidentialite(): Response
    {
        return $this->render('mentions/confidentialite.html.twig');
    }

    #[Route('/cookie', name: 'cookie')]
    public function cookie(): Response
    {
        return $this->render('mentions/cookie.html.twig');
    }
}
