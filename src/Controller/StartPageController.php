<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StartPageController extends AbstractController
{
    /**
     * @Route("/", name="start_page")
     */
    public function index()
    {
        return $this->render('start_page/index.html.twig', [
            'controller_name' => 'StartPageController',
            'title' => 'Главная',
        ]);
        
    }
}
