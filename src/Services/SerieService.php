<?php

namespace App\Services;

use App\Dao\SerieDao;
use App\Entity\Serie;

use PDO;
use DateTime;

class SerieService
{
    public function getSeries()
    {
        $lesSeriesDao = SerieDao::getSeriesDao();
        $lesSeries = array();
        foreach ($lesSeriesDao as $uneSerie) {
            $uneSerie = new Serie(
                $uneSerie->id,
                $uneSerie->titre,
                new DateTime($uneSerie->premiereDiffusion),
                $uneSerie->nbEpisodes,
                $uneSerie->resume,
                $uneSerie->image
            );
            $lesSeries[] = $uneSerie;
        }
        return $lesSeries;
    }
}
