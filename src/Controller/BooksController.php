<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BooksController extends AbstractController
{
    /**
     * @Route("/books", name="books")
     */
    public function listAction()
    {
        $books = $this->getDoctrine()
            ->getRepository('App\Entity\Books')
            ->findAll();
        return $this->render('books/index.html.twig', [
            'books' => $books
        ]);
    }
}
