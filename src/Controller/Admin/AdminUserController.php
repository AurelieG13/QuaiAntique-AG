<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\EditProfileFormType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\UserAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

#[Route('/admin/user', name: 'admin_user_')]
class AdminUserController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(UserRepository $userRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $users = $paginator->paginate(
            $userRepository->findAll(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('admin/admin_user/index.html.twig', [
            'users' => $users,

        ]);
    }


    #[Route('/edit/{id<\d+>}', name: 'edit')]
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
            return $this->redirectToRoute('admin_user_list');
        }

        return $this->render('admin/admin_user/edit.html.twig', [
            'form_edit' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function delete(User $user, ManagerRegistry $doctrine): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $em = $doctrine->getManager();
        $em->remove($user);
        $em->flush();
        
        $this->addFlash('success', 'utilisateur supprimé avec succes');
        return $this->redirectToRoute('admin_user_list');
    }

    #[Route('/addAdmin', name: 'addAdmin')]
    public function addAdmin(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager
    ): Response
    {

        $user = new User($userPasswordHasher);
        $user->setRoles(['ROLE_USER','ROLE_MANAGER', 'ROLE_ADMIN']);
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('admin_user_list');
            $this->addFlash('success', 'Profil Admin ajouté avec succès');
        }

        return $this->render('admin/admin_user/register.html.twig', [
            'admin_register_form' => $form->createView(),
        ]);
    }

    #[Route('/addManager', name: 'addManager')]
    public function addManager(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager
    ): Response
    {

        $user = new User($userPasswordHasher);
        $user->setRoles(['ROLE_USER','ROLE_MANAGER']);
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('admin_user_list');
            $this->addFlash('success', 'Profil Manager ajouté avec succès');
        }

        return $this->render('admin/admin_user/register.html.twig', [
            'admin_register_form' => $form->createView(),
        ]);
    }
}
