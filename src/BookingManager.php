<?php

namespace Booking;

use Exception\ReservationException;
use Reservation\Reservation;
use Room\Room;

/**
 * Class BookingManager
 *
 * @package Booking
 */
class BookingManager
{
    /**
     * @var Room
     */
    private static $room;

    /**
     * @var Reservation
     */
    private static $reservation;

    /**
     * @param Room        $room
     * @param Reservation $reservation
     */
    static public function bookRoom(Room $room, Reservation $reservation): void
    {
        self::$room = $room;
        self::$reservation = $reservation;

        try {
            $room->addReservation($reservation);
            echo("Room <strong>" . $room->getRoomNumber() . "</strong> successfully booked for " . $reservation . "!\n");
        }
        catch (ReservationException $e){
            echo $e->getMessage();
        }
        catch (\Exception $e){
            echo $e->getMessage();
        }

    }
}
