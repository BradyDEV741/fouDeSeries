<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Entity\Serie;
use App\Repository\GenreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GenreController extends AbstractController
{

    #[Route('/testGenre', name: 'app_genre')]
    public function testGenre(EntityManagerInterface $em, GenreRepository $repo ): Response
    {
            $genre = new Genre();
            $genre -> setLibelle("Drame");
            $genre2 = new Genre();
            $genre2 -> setLibelle("Thriller");
            $uneSerie = $repo->find(5);
            $uneSerie -> addLesGenres($genre);
            $uneSerie -> addLesGenres($genre2);
            $em->persist($uneSerie);
            $em->flush();
            return new Response("Genre");
    }
    
}
