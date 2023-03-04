<?php

namespace App\Controller;

use App\Entity\User;
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

    // #[Route('/editpassword/{id}', name: 'editpassword_user', methods:['GET', 'POST'])]
    // public function editPasswordUser(
    //     Request $request,
    //     ManagerRegistry $doctrine,
    //     User $user,
    //     UserPasswordHasherInterface $hasher
    //     ): Response
    // {
    //     $form = $this->createForm(UserPasswordType::class, $user);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         if($hasher->isPasswordValid($user, $form->getData()['plainPassword'])){
    //             $user->setPassword(
    //                 $hasher->hashPassword(
    //                     $user,
    //                     $form->getData()['newPassword']
    //                 )
    //             );
    //         $em = $doctrine->getManager();
    //         $em->persist($user);
    //         $em->flush();

    //         $this->addFlash('success','votre mot de passe a été modifié avec succès');
    //         return $this->redirectToRoute('profile_home');
    //     } else {
    //         $this->addFlash('warning','Mot de passe incorrect');
    //     }
    // }

    //     return $this->render('profile/edit.html.twig', [
    //         'form' => $form->createView(),
    //     ]);
    // }
}
