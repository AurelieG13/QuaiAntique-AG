<?php

namespace App\Controller\Admin;

use App\Entity\Menu;
use App\Form\MenuType;
use App\Form\SearchMenuType;
use App\Repository\MenuRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function addMenu(Request $request, ManagerRegistry $doctrine): Response
    {
        $menu = new Menu();

        $form = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $menu = $form->getData();
            $em = $doctrine->getManager();
            $em->persist($menu);
            $em->flush();

            return $this->redirectToRoute('admin_menu_list');
        }


        return $this->render('admin/admin_menu/addMenu.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/edit/{id}', name: 'edit')]
    public function editMenu(Menu $menu, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(MenuType::class, $menu);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($menu);
            $em->flush();

            return $this->redirectToRoute('admin_menu_list');
        }

        return $this->render('admin/admin_menu/editMenu.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function deleteMenu(Menu $menu, ManagerRegistry $doctrine)
    {
        
        $em = $doctrine->getManager();
        $em->remove($menu);
        $em->flush(); 

        $this->addFlash('success', 'menu supprimé avec succes');
        return $this->redirectToRoute('admin_menu_list');
    }
}
