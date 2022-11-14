<?php

class Deaths
{
    private string $id;
    private string $date;
    private string $reason;

    public function __construct(string $id, string $date, string $reason)
    {
        $this->date = $date;
        $this->reason = $reason;
        $this->id = $id;
    }

    public function getID(): string
    {
        return $this->id;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function __toString(): string
    {
        return "$this->id | $this->date | $this->reason";
    }
}