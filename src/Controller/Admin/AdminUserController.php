<?php

namespace App\Controller\Admin;

use App\Entity\PropertySearch;
use App\Entity\User;
use App\Form\EditProfileFormType;
use App\Form\PropertySearchType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/admin/user', name: 'admin_user_')]
class AdminUserController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(UserRepository $userRepository, PaginatorInterface $paginator, Request $request): Response
    {
        // $users = $userRepository->findBy([], ['name' => 'asc']);

        $users = $paginator->paginate(
            
            // $userRepository->findBy(['roles' => 'ROLE_ADMIN']),
            // $userRepository->findBy(['roles' => ['ROLE_USER']]),
            $userRepository->findAll(),
            $request->query->getInt('page', 1),
            10
        );
// dd($users);
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

    #[Route('/addAdmin', name: 'addAdmin')]
    public function addAdmin(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        ManagerRegistry $doctrine,
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

            return $this->redirectToRoute('admin_user_home');
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
        ManagerRegistry $doctrine,
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

            return $this->redirectToRoute('admin_user_home');
            $this->addFlash('success', 'Profil Manager ajouté avec succès');
        }

        return $this->render('admin/admin_user/register.html.twig', [
            'admin_register_form' => $form->createView(),
        ]);
    }
}
