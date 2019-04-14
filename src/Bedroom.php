<?php
namespace Room;

/**
 * Class Bedroom
 *
 * @package Room
 */
class Bedroom extends Room
{
    /**
     * Bedroom constructor.
     *
     * @param int $roomNumber
     * @param int $price
     */
    public function __construct(int $roomNumber, int $price)
    {
        parent::__construct( $roomNumber,  $price);
        $this->setBedCount(2);
        $this->setBalcony(true);
        $this->setRestroom(true);
        $this->setRoomType('Gold');
        $this->setExtras('TV', 'Air-conditioner', 'Refrigerator', 'Minibar', 'Bathtub');
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return
            "\n Room type: " . $this->getRoomType() .
            "\n Bed count: " . $this->getBedCount() .
            "\n Balcony: " . $this->hasBalcony() .
            "\n Restroom: " . $this->hasRestroom() .
            "\n Reservations: " .  implode(", ", $this->getReservations()) .
            "\n Extras: " . implode(", ", $this->getExtras() ) .
            "\n Price: " . $this->getPrice() .
            "\n";
    }
}
