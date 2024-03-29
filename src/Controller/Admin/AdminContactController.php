<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('manager/contact', name: 'manager_contact_')]
class AdminContactController extends AbstractController
{
    #[Route('/list', name: 'list')]
    public function list(ContactRepository $contactRepository): Response
    {
        $contacts = $contactRepository->findAll();
        return $this->render('manager/manager_contact/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }
}
