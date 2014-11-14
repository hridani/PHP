<?php

class BookingManager {
public static function bookRoom($room, $reservation){
    try{
        $room->addReservation($reservation);
        echo "Room  <strong>".$room->getRoomNumber()."</strong> successfully booked for <strong>"
            .$reservation->getGuest()->getFirstName()." ". $reservation->getGuest()->getLastName()."</strong> from <time>"
              .date('d.m.Y',$reservation->getStartDate()). "</time> to <time>". date('d.m.Y',$reservation->getEndDate())
        ."</time>!";
    } catch (Exception $ere){
        /** @var $ere EReservationException */
        echo  PHP_EOL . $ere->getMessage();
    }
    }
}