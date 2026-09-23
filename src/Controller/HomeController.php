<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Bienvenue sur fou de Séries',
        ]);
    }
    #[Route('/news', name: 'app_news')]
    public function new(): Response
    {
        return $this->render('news/news.html.twig', [
        ]);
    }
}

