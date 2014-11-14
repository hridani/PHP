<?php

class Reservation {
    private $startDate;
    private $endDate;
    private $guest;

    function __construct( $startDate, $endDate, $guest)
    {
        $this->startDate = strtotime($startDate);
        $this->endDate = strtotime($endDate);
        $this->guest = $guest;
    }

    /**
     * @param DataTime
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest($guest)
    {
        $this->guest = $guest;
    }

    /**
     * @return mixed
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    function __toString()
    {
        $output="Start Date:" . date('d.m.Y',$this->startDate)." End date:"
            . date('d-m-Y', $this->startDate).PHP_EOL
            .$this->getGuest().toString();
        return $output;
    }

} 