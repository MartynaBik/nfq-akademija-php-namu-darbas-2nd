<?php
namespace Room;

/**
 * Class Apartment
 *
 * @package Room
 */
class Apartment extends Room
{
    /**
     * Apartment constructor.
     *
     * @param int $roomNumber
     * @param int $price
     */
    public function __construct(int $roomNumber, int $price)
    {
        parent::__construct( $roomNumber,  $price);
        $this->setBedCount(4);
        $this->setBalcony(true);
        $this->setRestroom(true);
        $this->setRoomType('Diamond');
        $this->setExtras('TV', 'Air-conditioner', 'Refrigerator', 'Minibar', 'Bathtub','Kitchen box','free Wi-fi');
    }
}
