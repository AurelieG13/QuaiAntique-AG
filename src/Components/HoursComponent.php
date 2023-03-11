<?php

namespace App\Components;

use App\Repository\OpeningHoursRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('_hoursComponent')]
class HoursComponent
{
    private OpeningHoursRepository $hoursRepo;

    public function __construct(OpeningHoursRepository $hoursRepo)
    {
        $this->hoursRepo = $hoursRepo;
    }

    public function getHours(): array
    {
        // an example method that returns an array of Products
        return $this->hoursRepo->findBy([], ['sortWeek' => 'asc']);
    }

}