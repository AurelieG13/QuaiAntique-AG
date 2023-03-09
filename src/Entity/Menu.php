<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenuRepository::class)]
class Menu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Formule::class, inversedBy:'menus')]
    #[ORM\JoinTable(name: 'formules_menus')]
    private Collection $formules;

    #[ORM\OneToMany(mappedBy: 'menus', targetEntity: Images::class, orphanRemoval: true, cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: true)]
    private Collection $images;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    public function __toString()
    {
        return $this->name;
    }

    public function __construct()
    {
        $this->formules = new ArrayCollection();
        $this->images = new ArrayCollection();
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

    /**
     * @return Collection<int, Formule>
     */
    public function getFormules(): Collection
    {
        return $this->formules;
    }

    public function addFormule(Formule $formule): self
    {
        if (!$this->formules->contains($formule)) {
            // $this->formules->add($formule);
            $this->formules[] = $formule;
        }

        return $this;
    }

    public function removeFormule(Formule $formule): self
    {
        $this->formules->removeElement($formule);

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

    /**
     * @return Collection|Images[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setMenus($this);
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getMenus() === $this) {
                $image->setMenus(null);
            }
        }

        return $this;
    }

}
