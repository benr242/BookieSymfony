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
}
