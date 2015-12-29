<?php

namespace drzewaDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TreeObjects
 *
 * @ORM\Table(name="tree_objects", indexes={@ORM\Index(name="tree_objects_FKIndex1", columns={"idusers"}), @ORM\Index(name="tree_objects_FKIndex2", columns={"iddistricts"}), @ORM\Index(name="idspecial_place", columns={"idspecial_place"})})
 * @ORM\Entity
 */
class TreeObjects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idspecial_place", type="integer", nullable=false)
     */
    private $idspecialPlace = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="name_polish", type="string", length=255, nullable=true)
     */
    private $namePolish;

    /**
     * @var string
     *
     * @ORM\Column(name="name_latin", type="string", length=255, nullable=true)
     */
    private $nameLatin;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text", length=65535, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

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
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="blocked", type="integer", nullable=false)
     */
    private $blocked = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adddate", type="datetime", nullable=false)
     */
    private $adddate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_pomnik", type="integer", nullable=false)
     */
    private $isPomnik = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aktualizacja", type="date", nullable=true)
     */
    private $aktualizacja;

    /**
     * @var integer
     *
     * @ORM\Column(name="in_greenhouse", type="integer", nullable=false)
     */
    private $inGreenhouse = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="icon", type="integer", nullable=false)
     */
    private $icon = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="unknown_tree", type="integer", nullable=false)
     */
    private $unknownTree = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nonexistent", type="integer", nullable=false)
     */
    private $nonexistent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="view_count", type="integer", nullable=false)
     */
    private $viewCount = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="post_on_fb", type="boolean", nullable=false)
     */
    private $postOnFb = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idtree_objects", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtreeObjects;

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
     * @ORM\ManyToOne(targetEntity="drzewaDbBundle\Entity\Users", mappedBy="groups", fetch="EXTRA_LAZY")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusers", referencedColumnName="idusers")
     * })
     */
    private $idusers;



    /**
     * Set idspecialPlace
     *
     * @param integer $idspecialPlace
     *
     * @return TreeObjects
     */
    public function setIdspecialPlace($idspecialPlace)
    {
        $this->idspecialPlace = $idspecialPlace;

        return $this;
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
     * Set namePolish
     *
     * @param string $namePolish
     *
     * @return TreeObjects
     */
    public function setNamePolish($namePolish)
    {
        $this->namePolish = $namePolish;

        return $this;
    }

    /**
     * Get namePolish
     *
     * @return string
     */
    public function getNamePolish()
    {
        return $this->namePolish;
    }

    /**
     * Set nameLatin
     *
     * @param string $nameLatin
     *
     * @return TreeObjects
     */
    public function setNameLatin($nameLatin)
    {
        $this->nameLatin = $nameLatin;

        return $this;
    }

    /**
     * Get nameLatin
     *
     * @return string
     */
    public function getNameLatin()
    {
        return $this->nameLatin;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return TreeObjects
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return TreeObjects
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
     * Set city
     *
     * @param string $city
     *
     * @return TreeObjects
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
     * Set locationLongitude
     *
     * @param float $locationLongitude
     *
     * @return TreeObjects
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
     * @return TreeObjects
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
     * Set description
     *
     * @param string $description
     *
     * @return TreeObjects
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
     * Set blocked
     *
     * @param integer $blocked
     *
     * @return TreeObjects
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * Get blocked
     *
     * @return integer
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * Set adddate
     *
     * @param \DateTime $adddate
     *
     * @return TreeObjects
     */
    public function setAdddate($adddate)
    {
        $this->adddate = $adddate;

        return $this;
    }

    /**
     * Get adddate
     *
     * @return \DateTime
     */
    public function getAdddate()
    {
        return $this->adddate;
    }

    /**
     * Set isPomnik
     *
     * @param integer $isPomnik
     *
     * @return TreeObjects
     */
    public function setIsPomnik($isPomnik)
    {
        $this->isPomnik = $isPomnik;

        return $this;
    }

    /**
     * Get isPomnik
     *
     * @return integer
     */
    public function getIsPomnik()
    {
        return $this->isPomnik;
    }

    /**
     * Set aktualizacja
     *
     * @param \DateTime $aktualizacja
     *
     * @return TreeObjects
     */
    public function setAktualizacja($aktualizacja)
    {
        $this->aktualizacja = $aktualizacja;

        return $this;
    }

    /**
     * Get aktualizacja
     *
     * @return \DateTime
     */
    public function getAktualizacja()
    {
        return $this->aktualizacja;
    }

    /**
     * Set inGreenhouse
     *
     * @param integer $inGreenhouse
     *
     * @return TreeObjects
     */
    public function setInGreenhouse($inGreenhouse)
    {
        $this->inGreenhouse = $inGreenhouse;

        return $this;
    }

    /**
     * Get inGreenhouse
     *
     * @return integer
     */
    public function getInGreenhouse()
    {
        return $this->inGreenhouse;
    }

    /**
     * Set icon
     *
     * @param integer $icon
     *
     * @return TreeObjects
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return integer
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set unknownTree
     *
     * @param integer $unknownTree
     *
     * @return TreeObjects
     */
    public function setUnknownTree($unknownTree)
    {
        $this->unknownTree = $unknownTree;

        return $this;
    }

    /**
     * Get unknownTree
     *
     * @return integer
     */
    public function getUnknownTree()
    {
        return $this->unknownTree;
    }

    /**
     * Set nonexistent
     *
     * @param integer $nonexistent
     *
     * @return TreeObjects
     */
    public function setNonexistent($nonexistent)
    {
        $this->nonexistent = $nonexistent;

        return $this;
    }

    /**
     * Get nonexistent
     *
     * @return integer
     */
    public function getNonexistent()
    {
        return $this->nonexistent;
    }

    /**
     * Set viewCount
     *
     * @param integer $viewCount
     *
     * @return TreeObjects
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    /**
     * Get viewCount
     *
     * @return integer
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }

    /**
     * Set postOnFb
     *
     * @param boolean $postOnFb
     *
     * @return TreeObjects
     */
    public function setPostOnFb($postOnFb)
    {
        $this->postOnFb = $postOnFb;

        return $this;
    }

    /**
     * Get postOnFb
     *
     * @return boolean
     */
    public function getPostOnFb()
    {
        return $this->postOnFb;
    }

    /**
     * Get idtreeObjects
     *
     * @return integer
     */
    public function getIdtreeObjects()
    {
        return $this->idtreeObjects;
    }

    /**
     * Set iddistricts
     *
     * @param \drzewaDbBundle\Entity\Districts $iddistricts
     *
     * @return TreeObjects
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
     * @return TreeObjects
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
