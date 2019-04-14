<?php
namespace Room;

use Exception\ReservationException;
use Reservation\ReservableInterface;

/**
 * Class Room
 *
 * @package Room
 */
class Room implements ReservableInterface
{
    /**
     * @var array
     */
    private $reservations = [];

    /**
     * @var int
     */
    private $roomNumber;

    /**
     * @var int
     */
    private $price;

    /**
     * @var int
     */
    private $bedCount;

    /**
     * @var string
     */
    private $roomType;

    /**
     * @var bool
     */
    private $balcony;

    /**
     * @var bool
     */
    private $restroom;

    /**
     * @var array
     */
    private $extras;

    /**
     * Room constructor.
     *
     * @param int $roomNumber
     * @param int $price
     */
    public function __construct(int $roomNumber, int $price)
    {
        $this->roomNumber = $roomNumber;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    /**
     * @param int $roomNumber
     */
    public function setRoomNumber(int $roomNumber): void
    {
        $this->roomNumber = $roomNumber;
    }


    /**
     * @return array
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras(...$extras): void
    {
        $this->extras = $extras;
    }


    /**
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param string $roomType
     */
    public function setRoomType($roomType): void
    {
        $this->roomType = $roomType;
    }

    /**
     * @return bool
     */
    public function hasBalcony()
    {
        return $this->balcony;
    }

    /**
     * @param bool $hasBalcony
     */
    public function setBalcony($hasBalcony): void
    {
        $this->balcony = $hasBalcony;
    }

    /**
     * @param int $bedCount
     */
    public function setBedCount($bedCount): void
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return int
     */
    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    /**
     * @param bool $hasRestroom
     */
    public function setRestroom($hasRestroom): void
    {
        $this->restroom = $hasRestroom;
    }


    /**
     * @return bool
     */
    public function hasRestroom(): bool
    {
        return $this->restroom;
    }

    /**
     * @return array
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param $reservation
     *
     * @throws \Exception
     */
    public function addReservation($reservation): void
    {
        foreach ($this->reservations as $existingReservation) {
            $isStartDateNotAvailable = (($reservation->getStartDate() > $existingReservation->getStartDate()) && ($reservation->getStartDate() < $existingReservation->getEndDate()));
            $isEndDateNotAvailable = (($reservation->getEndDate() > $existingReservation->getStartDate()) && ($reservation->getEndDate() < $existingReservation->getEndDate()));

            if (($isStartDateNotAvailable || $isEndDateNotAvailable)) {
                throw new ReservationException("Room " . $this->roomNumber . " reservation for " . $reservation . "is canceled. Room is already reserved. \n");
            }
        }

        $this->reservations[] = $reservation;
    }

    /**
     * @param $reservation
     */
    public function removeReservation($reservation): void
    {
        // TODO: implement logic
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "\n Room type: " . $this->getRoomType() .
            "\n Bed count: " . $this->getBedCount() .
            "\n Balcony: " . $this->hasBalcony() .
            "\n Restroom: " . $this->hasRestroom() .
            "\n Reservations: " .  implode(", ", $this->getReservations()) .
            "\n Extras: " . implode(", ", $this->getExtras() ) .
            "\n Price: " . $this->getPrice() .
            "\n";
    }
}
