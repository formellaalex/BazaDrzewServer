<?php

namespace drzewaDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclUsers
 *
 * @ORM\Table(name="acl_users")
 * @ORM\Entity
 */
class AclUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="idacl_users", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaclUsers;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return AclUsers
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
     * Get idaclUsers
     *
     * @return integer
     */
    public function getIdaclUsers()
    {
        return $this->idaclUsers;
    }
}
