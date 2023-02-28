<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $primaryTech = null;

    #[ORM\Column(length: 255)]
    private ?string $optionalTech = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrimaryTech(): ?string
    {
        return $this->primaryTech;
    }

    public function setPrimaryTech(string $primaryTech): self
    {
        $this->primaryTech = $primaryTech;

        return $this;
    }

    public function getOptionalTech(): ?string
    {
        return $this->optionalTech;
    }

    public function setOptionalTech(string $optionalTech): self
    {
        $this->optionalTech = $optionalTech;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
