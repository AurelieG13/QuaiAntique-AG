<?php

namespace App\Entity;

use App\Repository\OpeningHoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpeningHoursRepository::class)]
class OpeningHours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $dayOfWeek = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openedLunchHour = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $openedDinnerHour = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closedLunchHour = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $closedDinnerHour = null;

    #[ORM\Column]
    private ?int $sortWeek = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayOfWeek(): ?string
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    public function getOpenedLunchHour(): ?\DateTimeInterface
    {
        return $this->openedLunchHour;
    }

    public function setOpenedLunchHour(\DateTimeInterface $openedLunchHour): self
    {
        $this->openedLunchHour = $openedLunchHour;

        return $this;
    }

    public function getClosedLunchHour(): ?\DateTimeInterface
    {
        return $this->closedLunchHour;
    }

    public function setClosedLunchHour(\DateTimeInterface $closedLunchHour): self
    {
        $this->closedLunchHour = $closedLunchHour;

        return $this;
    }

    public function getOpenedDinnerHour(): ?\DateTimeInterface
    {
        return $this->openedDinnerHour;
    }

    public function setOpenedDinnerHour(\DateTimeInterface $openedDinnerHour): self
    {
        $this->openedDinnerHour = $openedDinnerHour;

        return $this;
    }

    public function getClosedDinnerHour(): ?\DateTimeInterface
    {
        return $this->closedDinnerHour;
    }

    public function setClosedDinnerHour(\DateTimeInterface $closedDinnerHour): self
    {
        $this->closedDinnerHour = $closedDinnerHour;

        return $this;
    }

    public function getSortWeek(): ?int
    {
        return $this->sortWeek;
    }

    public function setSortWeek(int $sortWeek): self
    {
        $this->sortWeek = $sortWeek;

        return $this;
    }
}
