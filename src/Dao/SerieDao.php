<?php

namespace App\Dao;

use App\Services\Dbconnection;
use PDO;

class SerieDao
{
    public static function getSeriesDao(): array
    {
        $req = "select * from serie";
        $res = Dbconnection::getPdo()->query($req);
        $lesLignes = $res->fetchAll(PDO::FETCH_OBJ);
        return $lesLignes;
    }
}
