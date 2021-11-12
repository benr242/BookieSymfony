<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GameRepository::class)
 */
class Game
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Team::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $favorite;

    /**
     * @ORM\OneToOne(targetEntity=Team::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $underdog;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $favLine;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dogLine;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $spread;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFavorite(): ?Team
    {
        return $this->favorite;
    }

    public function setFavorite(Team $favorite): self
    {
        $this->favorite = $favorite;

        return $this;
    }

    public function getUnderdog(): ?Team
    {
        return $this->underdog;
    }

    public function setUnderdog(Team $underdog): self
    {
        $this->underdog = $underdog;

        return $this;
    }

    public function getFavLine(): ?int
    {
        return $this->favLine;
    }

    public function setFavLine(?int $favLine): self
    {
        $this->favLine = $favLine;

        return $this;
    }

    public function getDogLine(): ?int
    {
        return $this->dogLine;
    }

    public function setDogLine(?int $dogLine): self
    {
        $this->dogLine = $dogLine;

        return $this;
    }

    public function getSpread(): ?int
    {
        return $this->spread;
    }

    public function setSpread(?int $spread): self
    {
        $this->spread = $spread;

        return $this;
    }
}
