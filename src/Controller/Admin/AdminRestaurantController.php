<?php

namespace App\Controller\Admin;

use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\RestaurantRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/restaurant', name: 'admin_restaurant_')]
class AdminRestaurantController extends AbstractController
{
    // #[Route('/', name: 'home')]
    // public function index(): Response
    // {
    //     return $this->render('admin/admin_restaurant/index.html.twig');
    // }

    #[Route('/', name: 'list')]
    public function listRestaurant(RestaurantRepository $restaurantRepository): Response
    {
        return $this->render('admin/admin_restaurant/index.html.twig', [
            'restaurants' => $restaurantRepository->findAll(),
        ]);
    }

    

    #[Route('/add', name: 'add')]
    public function addRestaurant(Request $request, ManagerRegistry $doctrine): Response
    {
        $restaurant = new Restaurant();

        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $restaurant = $form->getData();
            $em = $doctrine->getManager();
            $em->persist($restaurant);
            $em->flush();

            return $this->redirectToRoute('admin_restaurant_list');
        }


        return $this->render('admin/admin_restaurant/addRestaurant.html.twig', [
            'form' => $form->createView()
        ]);
    }


    #[Route('/edit/{id}', name: 'edit')]
    public function editRestaurant(Restaurant $restaurant, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(RestaurantType::class, $restaurant);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($restaurant);
            $em->flush();

            return $this->redirectToRoute('admin_restaurant_list');
        }

        return $this->render('admin/admin_restaurant/editRestaurant.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
