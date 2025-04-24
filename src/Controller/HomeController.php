<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/client', name: 'app_client')]
    public function client(): Response
    {
        return $this->render('home/client.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/sponsor', name: 'app_sponsor')]
    public function sponsor(): Response
    {
        return $this->render('home/Sponsor.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/admin', name: 'app_admin')]
    public function admin(): Response
    {
        return $this->render('home/admin.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/employ', name: 'app_employe')]
    public function employe(): Response
    {
        return $this->render('home/Employe.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
} 