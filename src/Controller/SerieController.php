<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Repository\SerieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SerieController extends AbstractController
{
    #[Route('/serie', name: 'app_serie')]
    public function index(): Response
    {
        return $this->render('serie/index.html.twig', [
            'controller_name' => 'SerieController',
        ]);
    }

    #[Route('/series', name: 'serie_list')]
    public function list(SerieRepository $repo): Response
    {
        $series = $repo->findBy(
            [],
            ['titre' => 'ASC']
        );
        return $this->render('serie/list.html.twig', [
            'series' => $series
        ]);
    }

     #[Route('/news', name: 'serie_tri')]

    public function tri(SerieRepository $repo): Response
    {
        $seriesTri = $repo->findBy(
            [],
            ['premiereDiffusion' => 'ASC'],
            4
        );
        return $this->render('news/news.html.twig', [
            'seriesTri' => $seriesTri
        ]);
    }



     #[Route('/serie/{id}', name: 'app_serie')]
    public function serie(int $id, SerieRepository $repo): Response
    {
        $serie = $repo->find($id);
        return $this->render('serie/serie.html.twig', [
            'serie' => $serie
        ]);
    }
}
