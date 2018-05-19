<?php
/**
 * Created by PhpStorm.
 * User: didungar
 * Date: 19/05/18
 * Time: 22:40
 */

namespace DidUngar\ShippingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DidUngar\ShippingBundle\Interfaces\TrackingEntityInterface;

/**
 * Shipping Tracking Linking
 *
 * @ORM\Table(name="shipping_tracking")
 * @ORM\Entity(repositoryClass="DidUngar\ShippingBundle\Repository\TrackingRepository")
 */
class Tracking
{
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}


	/**
	 * @var string
	 *
	 * @ORM\Column(name="carrier", type="string", length=50, nullable=false)
	 */
	private $carrier;
	const CARRIER_DHL = 'DHL';

	public function getCarrier() : string {
		return $this->carrier;
	}
	public function setCarrier(string $carrier) {
		return $this->carrier = $carrier;
	}

	/**
	 * @var int
	 *
	 * @ORM\Column(name="tracking_id", type="int", nullable=false)
	 */
	private $tracking_id;

	public function getTrackingId() : int {
		return $this->tracking_id;
	}
	public function setTrackingId( int $tracking_id) {
		return $this->tracking_id = $tracking_id;
	}
}