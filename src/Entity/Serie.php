<?php

namespace App\Entity;

use DateTime;

class Serie
{
    private int $id;
    private ?string $titre;
    private ?DateTime $premiereDiffusion;
    private int $nbEpisodes;
    private string $resume;
    private string $image;

    public function __construct(int $id, string $titre, DateTime $premiereDiffusion, int $nbEpisodes, string $resume, string $image)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->premiereDiffusion = $premiereDiffusion;
        $this->nbEpisodes = $nbEpisodes;
        $this->resume = $resume;
        $this->image = $image;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of premiereDiffusion
     */ 
    public function getPremiereDiffusion()
    {
        return $this->premiereDiffusion;
    }

    /**
     * Set the value of premiereDiffusion
     *
     * @return  self
     */ 
    public function setPremiereDiffusion($premiereDiffusion)
    {
        $this->premiereDiffusion = $premiereDiffusion;

        return $this;
    }

    /**
     * Get the value of nbEpisodes
     */ 
    public function getNbEpisodes()
    {
        return $this->nbEpisodes;
    }

    /**
     * Set the value of nbEpisodes
     *
     * @return  self
     */ 
    public function setNbEpisodes($nbEpisodes)
    {
        $this->nbEpisodes = $nbEpisodes;

        return $this;
    }

    /**
     * Get the value of resume
     */ 
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}
