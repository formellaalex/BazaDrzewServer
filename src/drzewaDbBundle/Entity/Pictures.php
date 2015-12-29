<?php

namespace drzewaDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pictures
 *
 * @ORM\Table(name="pictures", indexes={@ORM\Index(name="pictures_FKIndex1", columns={"idusers"}), @ORM\Index(name="pictures_FKIndex2", columns={"idtree_objects"})})
 * @ORM\Entity
 */
class Pictures
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
     * @ORM\Column(name="picture_description", type="text", length=65535, nullable=true)
     */
    private $pictureDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adddate", type="datetime", nullable=false)
     */
    private $adddate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="view_count", type="integer", nullable=false)
     */
    private $viewCount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idpictures", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpictures;

    /**
     * @var \drzewaDbBundle\Entity\TreeObjects
     *
     * @ORM\ManyToOne(targetEntity="drzewaDbBundle\Entity\TreeObjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtree_objects", referencedColumnName="idtree_objects")
     * })
     */
    private $idtreeObjects;

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
     * @return Pictures
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
     * Set pictureDescription
     *
     * @param string $pictureDescription
     *
     * @return Pictures
     */
    public function setPictureDescription($pictureDescription)
    {
        $this->pictureDescription = $pictureDescription;

        return $this;
    }

    /**
     * Get pictureDescription
     *
     * @return string
     */
    public function getPictureDescription()
    {
        return $this->pictureDescription;
    }

    /**
     * Set adddate
     *
     * @param \DateTime $adddate
     *
     * @return Pictures
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
     * Set viewCount
     *
     * @param integer $viewCount
     *
     * @return Pictures
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
     * Get idpictures
     *
     * @return integer
     */
    public function getIdpictures()
    {
        return $this->idpictures;
    }

    /**
     * Set idtreeObjects
     *
     * @param \drzewaDbBundle\Entity\TreeObjects $idtreeObjects
     *
     * @return Pictures
     */
    public function setIdtreeObjects(\drzewaDbBundle\Entity\TreeObjects $idtreeObjects = null)
    {
        $this->idtreeObjects = $idtreeObjects;

        return $this;
    }

    /**
     * Get idtreeObjects
     *
     * @return \drzewaDbBundle\Entity\TreeObjects
     */
    public function getIdtreeObjects()
    {
        return $this->idtreeObjects;
    }

    /**
     * Set idusers
     *
     * @param \drzewaDbBundle\Entity\Users $idusers
     *
     * @return Pictures
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
