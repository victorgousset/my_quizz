<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropertyRepository")
 */
class Property
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $question;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCategorie(): ?string
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(string $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }
}
