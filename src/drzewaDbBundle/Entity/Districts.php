<?php

namespace drzewaDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Districts
 *
 * @ORM\Table(name="districts")
 * @ORM\Entity
 */
class Districts
{
    /**
     * @var string
     *
     * @ORM\Column(name="district_name", type="string", length=255, nullable=true)
     */
    private $districtName;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddistricts", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddistricts;



    /**
     * Set districtName
     *
     * @param string $districtName
     *
     * @return Districts
     */
    public function setDistrictName($districtName)
    {
        $this->districtName = $districtName;

        return $this;
    }

    /**
     * Get districtName
     *
     * @return string
     */
    public function getDistrictName()
    {
        return $this->districtName;
    }

    /**
     * Get iddistricts
     *
     * @return integer
     */
    public function getIddistricts()
    {
        return $this->iddistricts;
    }
}
