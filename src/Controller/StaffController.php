<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaffController extends AbstractController
{
    /**
     * @Route("/staff", name="staff")
     */
    public function listAction()
    {
        $staff = $this->getDoctrine()
            ->getRepository('App\Entity\Staff')
            ->findAll();
        return $this->render('staff/index.html.twig', [
            'staff' => $staff
        ]);
    }
}
