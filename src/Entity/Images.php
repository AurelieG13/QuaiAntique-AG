<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagesRepository::class)]
class Images
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(targetEntity: Dish::class, inversedBy: 'images')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Dish $dishes = null;

    #[ORM\ManyToOne(targetEntity: Menu::class, inversedBy: 'images')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Menu $menus = null;

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

    /**
     * Get the value of dishes
     */ 
    public function getDishes()
    {
        return $this->dishes;
    }

    /**
     * Set the value of dishes
     *
     * @return  self
     */ 
    public function setDishes($dishes)
    {
        $this->dishes = $dishes;

        return $this;
    }

    /**
     * Get the value of menus
     */ 
    public function getMenus()
    {
        return $this->menus;
    }

    /**
     * Set the value of menus
     *
     * @return  self
     */ 
    public function setMenus($menus)
    {
        $this->menus = $menus;

        return $this;
    }
}
