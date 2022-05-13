<?php

namespace App\Controller;

use App\Form\NewsletterFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BooksController extends AbstractController
{
    #[Route(['FR' => '/livres', 'NL' => '/boeken', 'EN' => '/books'], name: 'app_books')]
    public function index(): Response
    {
        $form = $this->createForm(NewsletterFormType::class);

        return $this->render('books/index.html.twig', [
            'form' => $form
        ]);
    }
}
