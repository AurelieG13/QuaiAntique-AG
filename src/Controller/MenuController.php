<?php

namespace App\Controller;

use App\Form\SearchMenuType;
use App\Repository\MenuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/menu', name: 'menu_')]
class MenuController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(MenuRepository $menuRepository, Request $request): Response
    {
        $menus = $menuRepository->findBy([], ['name' => 'desc']);

        $form = $this->createForm(SearchMenuType::class);
        $chercher = $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $menus = $menuRepository->search(
                $chercher->get('words')->getData(),
                $chercher->get('formule')->getData()
            );
        }

        return $this->render('menu/index.html.twig', [
            'menus' => $menus,
            'form' => $form->createView()
        ]);
    }
}
