<?php

class Room implements iReservable {

    private $reservations = [];
    private $hasRestroom;
    private $hasBalcony;
    private $bedCount;
    private $roomNumber;
    private $price;
    private $roomType;
    private $extras = [];

    function __construct($roomNumber,$roomType, $bedCount, $price, $hasRestroom, $hasBalcony)
    {
        $this->roomNumber = $roomNumber;
        $this->roomType = $roomType;
        $this->bedCount = $bedCount;
        $this->hasBalcony = $hasBalcony;
        $this->hasRestroom = $hasRestroom;
        $this->price = $price;
     }

     /**
     * @return integer
     */
    public function getBedCount()
    {
        return $this->bedCount;
    }

     /**
     * @return boolean
     */
    public function getHasBalcony()
    {
        return $this->hasBalcony;
    }

    /**
     * @return boolean
     */
    public function getHasRestroom()
    {
        return $this->hasRestroom;
    }

    /**
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }

     /**
     * @return integer
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * @return roomType
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    public function hasExtra($extra)
    {
        return in_array($extra, $this->extras);
    }

    protected function addExtras($extras)
    {
        $this->extras[] = $extras;
    }

    function __toString()
    {
        $output= PHP_EOL. "Room number: $this->roomNumber - type: $this->roomType\r\n";
        foreach ($this->reservations as $reservation) {
          //  $output .= $reservation->__toString() . PHP_EOL;
        }
        return $output;
    }
    /***
     * @param $reservation
     */
    public function addReservation($reservation)
    {
        $this->checkForValidReservation($reservation);
        $this->reservations[] = $reservation;
    }

    public function checkForValidReservation(Reservation $reservation)
    {
        foreach ($this->reservations as $existingReservation) {
            if (($reservation->getStartDate() >= $existingReservation->getStartDate() &&
                $reservation->getStartDate() <= $existingReservation->getEndDate())
            ) {
                throw new EReservationException($this->roomNumber, $reservation);
            } elseif (($reservation->getEndDate() >= $existingReservation->getStartDate() &&
                $reservation->getEndDate() <= $existingReservation->getEndDate())
            ) {
                throw new EReservationException($this->roomNumber, $reservation);
            }
        }
    }

    function removeReservation($reservation)
    {
        $index=array_search($reservation,$this->reservations);
        $this->$reservations.Remove($index);
    }
}

