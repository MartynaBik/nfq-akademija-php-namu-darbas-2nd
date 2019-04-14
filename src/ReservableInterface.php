<?php
namespace Reservation;

/**
 * Interface ReservableInterface
 *
 * @package Reservation
 */
interface ReservableInterface
{
    /**
     * @param $reservation
     */
    public function addReservation($reservation): void;

    /**
     * @param $reservation
     */
    public function removeReservation($reservation): void;
}
