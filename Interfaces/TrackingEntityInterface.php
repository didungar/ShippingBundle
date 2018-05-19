<?php
/**
 * Created by PhpStorm.
 * User: didungar
 * Date: 19/05/18
 * Time: 22:49
 */

namespace DidUngar\ShippingBundle\Interfaces;


Interface TrackingEntityInterface
{
	public function getId();
	public function getTrackingRef();
	public function setTrackingRef($trackingRef);
}