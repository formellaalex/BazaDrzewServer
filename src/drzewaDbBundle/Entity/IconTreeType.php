<?php

namespace drzewaDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IconTreeType
 *
 * @ORM\Table(name="icon_tree_type")
 * @ORM\Entity
 */
class IconTreeType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="icon", type="integer", nullable=false)
     */
    private $icon = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;



    /**
     * Set icon
     *
     * @param integer $icon
     *
     * @return IconTreeType
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
