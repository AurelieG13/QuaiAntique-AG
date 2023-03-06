<?php

namespace App\Controller;

use App\Entity\Formule;
use App\Repository\FormuleRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/formule', name: 'formule_')]
class FormuleController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(FormuleRepository $formuleRepository): Response
    {
        $formules = $formuleRepository->findAll();
        return $this->render('admin/admin_formule/index.html.twig', [
            'formules' => $formules,
        ]);
    }

}
