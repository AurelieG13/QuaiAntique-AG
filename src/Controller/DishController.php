<?php

namespace App\Controller;

use App\Form\SearchDishType;
use App\Repository\CategoryRepository;
use App\Repository\DishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dish', name: 'dish_')]
class DishController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(DishRepository $dishRepository, CategoryRepository $catRepository, Request $request): Response
    {
        $dishes = $dishRepository->findBy([], ['name' => 'desc']);
        $categoryEntree = $dishRepository->findBy(['categorie'=> '1'], ['name' => 'desc']);
        $categoryPlat = $dishRepository->findBy(['categorie'=> '2'], ['name' => 'desc']);
        $categoryDessert = $dishRepository->findBy(['categorie'=> '3'], ['name' => 'desc']);
        $categoryBoisson = $dishRepository->findBy(['categorie'=> '4'], ['name' => 'desc']);
        $form = $this->createForm(SearchDishType::class);
        $chercher = $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $dishes = $dishRepository->search(
                $chercher->get('words')->getData(),
                $chercher->get('categorie')->getData()
            );
        }
        

        return $this->render('dish/index.html.twig', [
            'dishes' => $dishes,
            'categoryEntree' => $categoryEntree,
            'categoryPlat' => $categoryPlat,
            'categoryDessert' => $categoryDessert,
            'categoryBoisson' => $categoryBoisson,
            'form' => $form->createView()
        ]);
    }
}
