<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PoutController extends AbstractController
{
    /**
     * @Route("/pout", name="pout")
     */
    public function index(): Response
    {
        return $this->render('pout/index.html.twig', [
            'controller_name' => 'PoutController',
        ]);
    }
}
