<?php

class Bedroom extends Room {
    const BED_COUNT = 2;
    function __construct($roomNumber, $price)
    {
        parent::__construct($roomNumber,  RoomType::Gold, Bedroom::BED_COUNT, $price, true, true);
        $this->addExtras(Extra::Tv);
        $this->addExtras(Extra::Air_conditioner);
        $this->addExtras(Extra::Refrigerator);
        $this->addExtras(Extra::Mini_bar);
        $this->addExtras(Extra::Bathtub);
    }
} 