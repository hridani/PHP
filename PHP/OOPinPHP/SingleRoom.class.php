<?php

class SingleRoom extends Room{
    const BED_COUNT = 1;
    function __construct($roomNumber, $price)
    {
        parent::__construct($roomNumber,RoomType::Standard, SingleRoom::BED_COUNT, $price, true, false);
        $this->addExtras(Extra::Tv);
        $this->addExtras(Extra::Air_conditioner);
    }
} 