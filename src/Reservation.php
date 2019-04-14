<?php
namespace Reservation;

use Guest\Guest;

/**
 * Class Reservation
 *
 * @package Reservation
 */
class Reservation
{
    /**
     * @var \DateTime
     */
    private $startDate;
    /**
     * @var \DateTime
     */
    private $endDate;
    /**
     * @var Guest
     */
    private $guest;

    /**
     * Reservation constructor.
     *
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param Guest     $guest
     */
    public function __construct(\DateTime $startDate, \DateTime $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getGuest()->getFirstName() . " " .
            $this->getGuest()->getLastName() .
            " from <time>" . $this->getStartDate()->format('Y-m-d') .
            "</time> to <time>" . $this->getEndDate()->format('Y-m-d') . "</time>";
    }
}
