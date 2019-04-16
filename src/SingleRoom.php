<?php
namespace Room;

/**
 * Class SingleRoom
 *
 * @package Room
 */
class SingleRoom extends Room
{
    /**
     * SingleRoom constructor.
     *
     * @param int $roomNumber
     * @param int $price
     */
    public function __construct(int $roomNumber, int $price)
    {
        parent::__construct( $roomNumber,  $price);
        $this->setBedCount(1);
        $this->setBalcony(false);
        $this->setRestroom(true);
        $this->setRoomType('Standard');
        $this->setExtras('TV', 'Air-conditioner');
    }
}
