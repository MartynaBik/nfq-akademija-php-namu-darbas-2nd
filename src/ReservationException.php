<?php
namespace Exception;

/**
 * Class ReservationException
 *
 * @package Exception
 */
class ReservationException extends \Exception
{
    /**
     * ReservationException constructor.
     *
     * @param     $message
     * @param int $code
     */
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        parent::__toString();
    }
}
