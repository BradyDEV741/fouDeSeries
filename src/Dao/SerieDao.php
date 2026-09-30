<?php

namespace App\Dao;

use App\Services\Dbconnection;
use PDO;
use stdClass;

class SerieDao
{
    public static function getSeriesDao(): array
    {
        $req = "select * from serie";
        $res = Dbconnection::getPdo()->query($req);
        $lesLignes = $res->fetchAll(PDO::FETCH_OBJ);
        return $lesLignes;
    }
    public static function getInfosSerie($id): stdClass
    {
        $stmt = Dbconnection::getPdo()->prepare("SELECT * FROM serie WHERE id = ?");
        $stmt->execute([$id]);
        $uneLigne = $stmt->fetch(PDO::FETCH_OBJ);
        return $uneLigne;
    }
}
