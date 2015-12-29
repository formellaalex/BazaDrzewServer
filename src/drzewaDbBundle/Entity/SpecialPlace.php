<?php

namespace drzewaDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialPlace
 *
 * @ORM\Table(name="special_place", indexes={@ORM\Index(name="pictures_FKIndex1", columns={"idusers"}), @ORM\Index(name="iddistricts", columns={"iddistricts"})})
 * @ORM\Entity
 */
class SpecialPlace
{
    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="location_longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $locationLongitude;

    /**
     * @var float
     *
     * @ORM\Column(name="location_latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $locationLatitude;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=100, nullable=false)
     */
    private $street;

    /**
     * @var integer
     *
     * @ORM\Column(name="idspecial_place", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idspecialPlace;

    /**
     * @var \drzewaDbBundle\Entity\Districts
     *
     * @ORM\ManyToOne(targetEntity="drzewaDbBundle\Entity\Districts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddistricts", referencedColumnName="iddistricts")
     * })
     */
    private $iddistricts;

    /**
     * @var \drzewaDbBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="drzewaDbBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusers", referencedColumnName="idusers")
     * })
     */
    private $idusers;



    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return SpecialPlace
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SpecialPlace
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return SpecialPlace
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set locationLongitude
     *
     * @param float $locationLongitude
     *
     * @return SpecialPlace
     */
    public function setLocationLongitude($locationLongitude)
    {
        $this->locationLongitude = $locationLongitude;

        return $this;
    }

    /**
     * Get locationLongitude
     *
     * @return float
     */
    public function getLocationLongitude()
    {
        return $this->locationLongitude;
    }

    /**
     * Set locationLatitude
     *
     * @param float $locationLatitude
     *
     * @return SpecialPlace
     */
    public function setLocationLatitude($locationLatitude)
    {
        $this->locationLatitude = $locationLatitude;

        return $this;
    }

    /**
     * Get locationLatitude
     *
     * @return float
     */
    public function getLocationLatitude()
    {
        return $this->locationLatitude;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return SpecialPlace
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return SpecialPlace
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Get idspecialPlace
     *
     * @return integer
     */
    public function getIdspecialPlace()
    {
        return $this->idspecialPlace;
    }

    /**
     * Set iddistricts
     *
     * @param \drzewaDbBundle\Entity\Districts $iddistricts
     *
     * @return SpecialPlace
     */
    public function setIddistricts(\drzewaDbBundle\Entity\Districts $iddistricts = null)
    {
        $this->iddistricts = $iddistricts;

        return $this;
    }

    /**
     * Get iddistricts
     *
     * @return \drzewaDbBundle\Entity\Districts
     */
    public function getIddistricts()
    {
        return $this->iddistricts;
    }

    /**
     * Set idusers
     *
     * @param \drzewaDbBundle\Entity\Users $idusers
     *
     * @return SpecialPlace
     */
    public function setIdusers(\drzewaDbBundle\Entity\Users $idusers = null)
    {
        $this->idusers = $idusers;

        return $this;
    }

    /**
     * Get idusers
     *
     * @return \drzewaDbBundle\Entity\Users
     */
    public function getIdusers()
    {
        return $this->idusers;
    }
}
