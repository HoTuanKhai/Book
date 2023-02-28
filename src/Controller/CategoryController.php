<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function listAction()
    {
        $category = $this->getDoctrine()
            ->getRepository('App\Entity\Category')
            ->findAll();
        return $this->render('category/index.html.twig', [
            'cate' => $category
        ]);
    }
}
