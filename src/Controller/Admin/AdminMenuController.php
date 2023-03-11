<?php

namespace App\Controller\Admin;

use App\Entity\Images;
use App\Entity\Menu;
use App\Form\MenuType;
use App\Form\SearchMenuType;
use App\Repository\MenuRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/menu', name: 'admin_menu_')]
class AdminMenuController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function listMenu(MenuRepository $menuRepository): Response
    {
        return $this->render('admin/admin_menu/index.html.twig', [
            'menus' => $menuRepository->findAll(),
        ]);
    }

    #[Route('/add', name: 'add')]
    public function addMenu(Request $request, ManagerRegistry $doctrine, PictureService $pictureService): Response
    {
        $menu = new Menu();

        $form = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            //on récupère les images
            $images = $form->get('images')->getData();
            //on boucle sur les img et on appelle le service d'ajout
            foreach($images as $image){
                //on défini le dossier de destination
                $folder = 'menu';
                //on appelle le service d'ajout
                $fichier = $pictureService->add($image, $folder, 30, 30);

                $img = new Images();
                $img->setName($fichier);
                $menu->addImage($img);

                $em = $doctrine->getManager();
                $em->persist($menu);
                $em->flush();
            }
            return $this->redirectToRoute('admin_menu_list');
        }

        return $this->render('admin/admin_menu/addMenu.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/edit/{id<\d+>}', name: 'edit')]
    public function editMenu(Menu $menu, Request $request, ManagerRegistry $doctrine, PictureService $pictureService): Response
    {
        $form = $this->createForm(MenuType::class, $menu);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            //on récupère les images
            $images = $form->get('images')->getData();
            //on boucle sur les img et on appelle le service d'ajout
            foreach($images as $image){
                //on défini le dossier de destination
                $folder = 'menu';
                //on appelle le service d'ajout
                $fichier = $pictureService->add($image, $folder, 30, 30);

                $img = new Images();
                $img->setName($fichier);
                $menu->addImage($img);
            }
            $em = $doctrine->getManager();
            $em->persist($menu);
            $em->flush();

            return $this->redirectToRoute('admin_menu_list');
        }

        return $this->render('admin/admin_menu/editMenu.html.twig', [
            'form' => $form->createView(),
            'menu' => $menu,
        ]);
    }

    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function deleteMenu(Menu $menu, ManagerRegistry $doctrine)
    {
        
        $em = $doctrine->getManager();
        $em->remove($menu);
        $em->flush(); 

        $this->addFlash('success', 'menu supprimé avec succes');
        return $this->redirectToRoute('admin_menu_list');
    }

    #[Route('/delete/image/{id<\d+>}', name: 'delete_image', methods: ['DELETE'])]
    public function deleteImage(Images $image, Request $request, PictureService $pictureService, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if($this->isCsrfTokenValid('delete'. $image->getId(), $data['_token'])){
            $name = $image->getName();

            if($pictureService->delete($name, 'menu', 30, 30)) {
                $em->remove($image);
                $em->flush();

                return new JsonResponse(['success' => 'ok'], 200) ;
            }
        }
        return new JsonResponse(['error' => 'token invalide'], 400) ;
    }
}
