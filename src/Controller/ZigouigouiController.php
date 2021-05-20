<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZigouigouiController extends AbstractController
{
    /**
     * @Route("/zigouigoui", name="zigouigoui")
     */
    public function index(): Response
    {
        return $this->render('zigouigoui/index.html.twig', [
            'controller_name' => 'ZigouigouiController',
        ]);
    }
}
