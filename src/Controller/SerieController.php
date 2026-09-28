<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Services\SerieService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SerieController extends AbstractController
{
    #[Route('/serie', name: 'app_serie')]
    public function index(SerieService $serieService): Response
    {
        $lesSeries = $serieService->getSeries();
        return $this->render('serie/index.html.twig', [
            'lesSeries' => $lesSeries
        ]);
    }
}
