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



    #[Route('/testEntity', name: 'app_entity')]
    public function testEntity(EntityManagerInterface $em): Response
    {
        $uneSerie = new Serie();
        $uneSerie->setTitre("Outer Banks")
            ->setResume("Un groupe d'adolescents trouve une carte au trésor...")
            ->setPremiereDiffusion(new \DateTime('2020-04-15'))
            ->setNbEpisodes(30)
            ->setImage("outer-banks.jpg");
        $em->persist($uneSerie);
        $em->flush();
        return new Response($uneSerie->getTitre());
    }
}
