<?php

class DeathCharacterization
{
    private const MURDERED = "Vardarbīga nāve";
    private const ACCIDENT = "Nevardarbīga nāve";
    private const UNDENTIFIED = "Nāves cēlonis nav noteikts";
    private array $deaths;

    public function __construct()
    {
        $this->deaths = [];
    }

    public function getDeaths (Deaths $deaths): array
    {
        return $this->deaths;
    }

    public function getDeathsIDs (string $ids): ?Deaths
    {
        foreach ($this->deaths as $id) {
            if ($id->getID() === $ids) {
                return null;
            }
        }
        return null;
    }

    public function getDeathsDates (string $dates): array
    {
        $allDates = [];

        foreach ($this->deaths as $date) {
            if (strpos($date->getDate(), $date) !== false) {
                $allDates []= $date;
            }
        }
        return $allDates;
    }

    public function getDeathsReasons (string $reasons): array
    {
        $allReasons = [];

        foreach ($this->deaths as $reason) {
            if (strpos($reason->getDates(), $reason) !== false) {
                $allReasons []= $reason;
            }
        }
        return $allReasons;
    }

    public function increment (Deaths $deaths): void
    {
        $this->deaths []= $deaths;
    }
}
