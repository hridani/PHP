<?php

function __autoload($classname) {
    require_once("./" . $classname . ".class.php");
}
// Test1
$room = new SingleRoom(1408, 99);
$guest = new Guest("Svetlin", "Nakov", 8003224277);
$startDate = "24.10.2014";
$endDate = "26.10.2014";
$reservation = new Reservation($startDate, $endDate, $guest);
BookingManager::bookRoom($room, $reservation);
//Test 2
$daniGuest = new Guest("Dani", "Dimitrova", 23456789);
$veliGuest = new Guest("Veli", "Ivanova", 2165418);
$asenGuest = new Guest("Asen", "Parvanov", 89466466);
$firstReservation = new Reservation("9-10-2014", "21-10-2014", $daniGuest);
$secondReservation = new Reservation("20-11-2014", "25-11-2014", $veliGuest);
$thirdReservation = new Reservation("18-11-2014", "26-11-2014", $asenGuest);
$fourReservation = new Reservation("01-11-2014", "17-11-2014", $daniGuest);
$rooms[101] = new SingleRoom(101, 40);
BookingManager::bookRoom($rooms[101],$firstReservation);
BookingManager::bookRoom($rooms[101], $fourReservation);
$rooms[105] = new SingleRoom(105, 60);
BookingManager::bookRoom($rooms[105],$firstReservation);
BookingManager::bookRoom($rooms[105], $secondReservation);
$rooms[101] = new SingleRoom(101, 40);
$rooms[112] = new Bedroom(112, 70);
$rooms[232] = new Bedroom(232, 80);
$rooms[202] = new Bedroom(202, 70);
$rooms[110] = new Bedroom(110, 80);
$rooms[301] = new Apartment(301, 200);
BookingManager::bookRoom($rooms[301], $secondReservation);
$rooms[302] = new Apartment(302, 300);
$rooms[303] = new Apartment(303, 350);
echo PHP_EOL;
echo "Bedrooms and apartments with a price less or equal to 250.00";
echo PHP_EOL;
$bathroomsAndApartmentByPrise=array_map(function($r){return $r->getRoomNumber();},
    array_filter($rooms,
        function($r){ if(($r instanceof Bedroom) || ($r instanceof Apartment )){
                         return $r-> getPrice()<=250; }}
    )
);
foreach ($bathroomsAndApartmentByPrise as $room) {
      echo "{$rooms[$room]->getRoomNumber()} - {$rooms[$room]->getRoomType()} - {$rooms[$room]->getPrice()}" . PHP_EOL;
}
echo PHP_EOL . "All rooms with a balcony";
echo PHP_EOL;
$filteredRoomsWithBalcony =array_map(function($r){return $r->getRoomNumber();},
    array_filter($rooms,
        function($r){ return $r->getHasBalcony() == true; })
   );

foreach ($filteredRoomsWithBalcony as $room) {
    echo "{$rooms[$room]->getRoomNumber()} - {$rooms[$room]->getRoomType()} - {$rooms[$room]->getPrice()}" . PHP_EOL;
}

echo PHP_EOL . "All room numbers of rooms which have a bathtub";
echo PHP_EOL;
$filteredRoomsWithBathtub = array_map(function($r){return $r->getRoomNumber();},
    array_filter($rooms,
        function($r){ return $r->hasExtra(Extra::Bathtub);})
);
foreach ($filteredRoomsWithBathtub as $room) {
    echo "{$rooms[$room]->getRoomNumber()} - {$rooms[$room]->getRoomType()} - {$rooms[$room]->getPrice()}" . PHP_EOL;
}

echo PHP_EOL . "All apartments which are not booked in a given time period";
echo PHP_EOL;
$allApartments = array_filter($rooms,function($r){ return $r instanceof Apartment ;});
$allEmptyApartmentsForPeriod = array_map(function($r){return $r->getRoomNumber();},
        array_filter($allApartments,
    function($r){ $quest = new Guest("G", "G", 000000);
                  $reservation = new Reservation("19-11-2014", "21-11-2014", $quest);
                    try{
                        $r->checkForValidReservation($reservation);
                            return true;
                       } catch (EReservationException $ex ){
                    return false;
                    }
                }
    ));




foreach ($allEmptyApartmentsForPeriod as $room) {
    echo "{$rooms[$room]->getRoomNumber()} - {$rooms[$room]->getRoomType()} - {$rooms[$room]->getPrice()}" . PHP_EOL;
}
?>