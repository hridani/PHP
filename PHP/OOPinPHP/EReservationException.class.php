<?php
class EReservationException extends Exception {

    function __construct($roomNumber, Reservation $reservation)
    {
        $this->message = "Room ". $roomNumber ." is already occupied for period from "
        . date('d.m.Y',$reservation->getStartDate()). " to "
        . date('d.m.Y',$reservation->getEndDate()) . PHP_EOL;
    }
 }