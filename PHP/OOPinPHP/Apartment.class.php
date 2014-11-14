<?php

class Apartment extends Room {
    const BED_COUNT = 4;
    function __construct($roomNumber, $price)
    {
        parent::__construct($roomNumber, RoomType::Diamond, Apartment::BED_COUNT, $price, true, true);
        $this->addExtras(Extra::Tv);
        $this->addExtras(Extra::Air_conditioner);
        $this->addExtras(Extra::Refrigerator);
        $this->addExtras(Extra::Mini_bar);
        $this->addExtras(Extra::Bathtub);
        $this->addExtras(Extra::Refrigerator);
        $this->addExtras(Extra::Kitchen_box);
    }
} 