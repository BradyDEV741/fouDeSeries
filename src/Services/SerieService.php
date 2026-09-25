<?php

namespace App\Services;

use App\Dao\SerieDao;
use App\Entity\Serie;

use PDO;
use DateTime;

class SerieService
{
    public static function getSerieDao()
    {
        $lesSeriesDao = SerieDao::getSeriesDao();
        $lesSeries = array();
        foreach ($lesSeries as $uneSerie) {
            $uneSerie = new Serie(
                $uneSerie->Id,
                $uneSerie->Titre,
                new DateTime($uneSerie->RremiereDiffusion),
                $uneSerie->NbEpisodes,
                $uneSerie->Resume,
                $uneSerie->Image,
            );
            $lesSeries[] = $uneSerie;
            return $lesSeriesDao;
        }
    }
}
