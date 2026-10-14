<?php

namespace App\Controller;

use App\Entity\Pays;
use App\Repository\SerieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PaysController extends AbstractController
{
    #[Route('/pays', name: 'app_pays')]
    public function index(): Response
    {
        return $this->render('pays/index.html.twig', [
            'controller_name' => 'PaysController',
        ]);
    }


    #[Route('/testPays', name: 'app_pays')]
    public function testPays(SerieRepository $repoSerie, EntityManagerInterface $em): Response
    {
        $unPays = new Pays();
        $unPays->setPays("Pakistan");
        $serie = $repoSerie->find(1);
        $serie -> setLePays($unPays);
        $em->persist($unPays);
        $em-> flush();

        $pays2 = new Pays();
        $pays2->setPays("Pologne");
        $serie2 = $repoSerie->find(2);
        $serie3 = $repoSerie->find(3);
        $pays2 -> addLesSeries($serie2);
        $pays2 -> addLesSeries($serie3);
        $em->persist($pays2);
        $em-> flush();
        return new Response("test");
    }
}
