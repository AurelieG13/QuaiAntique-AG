<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('admin/contact', name: 'admin_contact_')]
class AdminContactController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        $contact = new Contact();
        if($this->getUser()) {
            $contact->setName($this->getUser()->getName())
                ->setFirstname($this->getUser()->getFirstname())
                ->setEmail($this->getUser()->getEmail());
        }

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $manager->persist($contact);
            $manager->flush();

            return $this->redirectToRoute('home');
            $this->addFlash('success', 'message envoyé avec succès');
    }
    
    return $this->render('admin/admin_contact/index.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/list', name: 'list')]
    public function list(ContactRepository $contactRepository): Response
    {
        $contacts = $contactRepository->findAll();
        return $this->render('admin/admin_contact/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }
}
