<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditAllergyFormType;
use App\Form\EditProfileFormType;
use App\Form\UserPasswordType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/profile', name: 'profile_')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }

    #[Route('/infos', name: 'infos')]
    public function infos(): Response
    {
        $user = $this->getUser();
        // $form = $this->createForm(EditProfileFormType::class, $user);

        return $this->render('profile/infos.html.twig', [
            // 'form' => $form->createView(),
            'user' => $user
        ]);
    }

    #[Route('/edit/{id}', name: 'edit_user')]
    public function editUser(
        Request $request,
        ManagerRegistry $doctrine
        ): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditProfileFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success','votre profil a été modifié avec succès');
            return $this->redirectToRoute('profile_home');
        }

        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/editallergy/{id}', name: 'edit_user_allergy')]
    public function editUserAllergy(
        Request $request,
        ManagerRegistry $doctrine
        ): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditAllergyFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success','votre profil a été modifié avec succès');
            return $this->redirectToRoute('profile_home');
        }

        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
