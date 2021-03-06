<?php
namespace Post2GoClient\Response;

use Post2GoClient\Response\ValueObject\Track;

class TrackingSimple
{

    /**
     * @var Track
     */
    private $tracking;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $track = $data['tracking'];
        $this->tracking = new Track($track['courier_slug'], $track['tracking_number']);
    }

    /**
     * @return ValueObject\Track
     */
    public function getTracking()
    {
        return $this->tracking;
    }

}