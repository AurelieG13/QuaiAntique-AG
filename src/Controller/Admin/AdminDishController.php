<?php

namespace App\Controller\Admin;

use App\Entity\Dish;
use App\Entity\Images;
use App\Form\DishType;
use App\Form\SearchDishType;
use App\Repository\DishRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/manager/dish', name: 'manager_dish_')]
class AdminDishController extends AbstractController
{
    #[Route('/list', name: 'list')]
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

        return $this->render('manager/manager_dish/index.html.twig', [
            'dishes' => $dishes,
            'form' => $form->createView()
        ]);
    }

    #[Route('/add', name: 'add')]
    public function addDish(Request $request, ManagerRegistry $doctrine, PictureService $pictureService): Response
    {
        $dish = new Dish();

        $form = $this->createForm(DishType::class, $dish);

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()) {
            //on récupère les images
            $images = $form->get('images')->getData();
            //on boucle sur les img et on appelle le service d'ajout
            foreach($images as $image){
                //on défini le dossier de destination
                $folder = 'dish';
                //on appelle le service d'ajout
                $fichier = $pictureService->add($image, $folder, 30, 30);

                $img = new Images();
                $img->setName($fichier);
                $dish->addImage($img);

                $em = $doctrine->getManager();
                $em->persist($dish);
                $em->flush();
            }
            return $this->redirectToRoute('manager_dish_list');
        }

        return $this->render('manager/manager_dish/addDish.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/edit/{id<\d+>}', name: 'edit')]
    public function editDish(Dish $dish, Request $request, ManagerRegistry $doctrine, PictureService $pictureService): Response
    {
        $form = $this->createForm(DishType::class, $dish);

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()) {
            //on récupère les images
            $images = $form->get('images')->getData();
            //on boucle sur les img et on appelle le service d'ajout
            foreach($images as $image){
                //on défini le dossier de destination
                $folder = 'dish';
                //on appelle le service d'ajout
                $fichier = $pictureService->add($image, $folder, 30, 30);

                $img = new Images();
                $img->setName($fichier);
                $dish->addImage($img);
                }

            $em = $doctrine->getManager();
            $em->persist($dish);
            $em->flush();

            return $this->redirectToRoute('manager_dish_list');
        }

        return $this->render('manager/manager_dish/editDish.html.twig', [
            'form' => $form->createView(),
            'dish' => $dish
        ]);
    }

    #[Route('/activeHome/{id<\d+>}', name: 'activeHome')]
    public function activeHome(Dish $dish, ManagerRegistry $doctrine): Response
    {
        $dish->setActiveHome(($dish->isActiveHome())?false:true);

        $em = $doctrine->getManager();
        $em->persist($dish);
        $em->flush();

        return new Response("true");
    }

    #[Route('/delete/{{id<\d+>}}', name: 'delete')]
    public function deleteDish(Dish $dish, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $em->remove($dish);
        $em->flush(); 

        $this->addFlash('success', 'plat supprimé avec succes');
        return $this->redirectToRoute('manager_dish_list');
    }

    #[Route('/delete/image/{id<\d+>}', name: 'delete_image', methods: ['DELETE'])]
    public function deleteImage(Images $image, Request $request, PictureService $pictureService, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if($this->isCsrfTokenValid('delete'. $image->getId(), $data['_token'])){
            $name = $image->getName();

            if($pictureService->delete($name, 'dish', 30, 30)) {
                $em->remove($image);
                $em->flush();

                return new JsonResponse(['success' => 'ok'], 200) ;
            }
        }
        return new JsonResponse(['error' => 'token invalide'], 400) ;
    }

}
