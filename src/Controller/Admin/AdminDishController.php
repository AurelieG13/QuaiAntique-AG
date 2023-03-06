<?php

namespace App\Controller\Admin;

use App\Entity\Dish;
use App\Form\DishType;
use App\Form\SearchDishType;
use App\Repository\DishRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/dish', name: 'admin_dish_')]
class AdminDishController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(DishRepository $dishRepository, Request $request): Response
    {
        $dishes = $dishRepository->findBy([], ['name' => 'desc']);

        $form = $this->createForm(SearchDishType::class);
        $chercher = $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $dishes = $dishRepository->search(
                $chercher->get('words')->getData(),
                $chercher->get('categorie')->getData()
            );
        }

        return $this->render('admin/admin_dish/index.html.twig', [
            'dishes' => $dishes,
            'form' => $form->createView()
        ]);
    }

    #[Route('/add', name: 'add')]
    public function addDish(Request $request, ManagerRegistry $doctrine): Response
    {
        $dish = new Dish();

        $form = $this->createForm(DishType::class, $dish);

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($dish);
            $em->flush();

            return $this->redirectToRoute('admin_dish_list');
        }

        return $this->render('admin/admin_dish/addDish.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/edit/{id}', name: 'edit')]
    public function editDish(Dish $dish, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(DishType::class, $dish);

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($dish);
            $em->flush();

            return $this->redirectToRoute('admin_dish_list');
        }

        return $this->render('admin/admin_dish/editDish.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function deleteDish(Dish $dish, ManagerRegistry $doctrine)
    {
        
        $em = $doctrine->getManager();
        $em->remove($dish);
        $em->flush(); 

        $this->addFlash('success', 'plat supprimé avec succes');
        return $this->redirectToRoute('admin_dish_list');
    }
}
