<?php

namespace App\Entity;

use App\Repository\FormuleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: FormuleRepository::class)]
#[UniqueEntity('name')]
class Formule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;


    #[ORM\ManyToMany(targetEntity: Menu::class, mappedBy:'formules')]
    private Collection $menus;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $price = null;


    public function __construct()
    {
        $this->menus = new ArrayCollection();
    }


    public function __toString()
    {
        return $this->name;
    }

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

    public function getMenus(): Collection
    {
        return $this->menus;
    }

    public function addMenus(Menu $menu): self
    {
        if(!$this->menus->contains($menu)) {
            $this->menus[] = $menu;
            $menu->addFormule($this);
        }

        return $this;
    }

    public function removeMenus(Menu $menu): self
    {
        if(!$this->menus->contains($menu)) {
            $menu->removeFormule($this);
        }

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

}
