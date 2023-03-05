<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\EditProfileFormType;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/user', name: 'admin_user_')]
class AdminUserController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findBy([], ['name' => 'asc']);
        return $this->render('admin/admin_user/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/edit/{id}', name: 'edit')]
    public function editUserAdmin(
        Request $request,
        ManagerRegistry $doctrine,
        User $user
        ): Response
    {
        $form = $this->createForm(EditProfileFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($user);
            $em->flush();

            // $this->addFlash('success','le profil a été modifié avec succès');
            return $this->redirectToRoute('admin_user_home');
        }

        return $this->render('admin/admin_user/edit.html.twig', [
            'form_edit' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function delete(User $user, ManagerRegistry $doctrine): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $em = $doctrine->getManager();
        $em->remove($user);
        $em->flush();
        
        $this->addFlash('success', 'utilisateur supprimé avec succes');
        return $this->redirectToRoute('admin_user_home');
    }
}
