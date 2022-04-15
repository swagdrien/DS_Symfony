<?php

namespace App\Entity;

use App\Repository\PrioriteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrioriteRepository::class)
 */
class Priorite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
  
    private $Id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    public function setId(string $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

   
}
