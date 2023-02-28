<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorOfBookController extends AbstractController
{
    /**
     * @Route("/aob", name="authorofbook")
     */
    public function listAction()
    {
        $aob = $this->getDoctrine()
            ->getRepository('App\Entity\AuthorOfBook')
            ->findAll();
        return $this->render('authorofbook/index.html.twig', [
            'aob' => $aob
        ]);
    }
}
