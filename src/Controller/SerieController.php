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

    #[Route('/serie/{id}', name: 'app_infos_serie')]
    public function infos_series(int $id, SerieService $serieService): Response 
    {
        $uneSerie = $serieService->getSerie($id);
        $tabId = [];
        while (count($tabId)>3){
            $tabId[]=rand(1,12);
            $tabId=array_unique($tabId);
        }
        $serieCollection = [];
        foreach($tabId as $unId){
            $serieCollection = $serieService -> getSerie($unId);
        }
        return $this->render('serie/infosSerie.html.twig', [
            'uneSerie' => $uneSerie,
            'serieCollection' => $serieCollection
        ]);
    }
}