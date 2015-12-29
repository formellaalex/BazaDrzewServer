<?php

namespace drzewaDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="idacl_users", columns={"idacl_users"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="upassword", type="string", length=100, nullable=true)
     */
    private $upassword;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_info", type="text", length=65535, nullable=true)
     */
    private $additionalInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="picture_signature", type="string", length=100, nullable=true)
     */
    private $pictureSignature;

    /**
     * @var integer
     *
     * @ORM\Column(name="picture_signature_type", type="integer", nullable=false)
     */
    private $pictureSignatureType = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_email", type="boolean", nullable=false)
     */
    private $showEmail = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_confirm", type="boolean", nullable=false)
     */
    private $isConfirm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_number", type="string", length=255, nullable=true)
     */
    private $confirmationNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adddate", type="datetime", nullable=false)
     */
    private $adddate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="wwwpage", type="string", length=255, nullable=true)
     */
    private $wwwpage;

    /**
     * @var integer
     *
     * @ORM\Column(name="sendemail", type="integer", nullable=false)
     */
    private $sendemail = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="idusers", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusers;

    /**
     * @var \drzewaDbBundle\Entity\AclUsers
     *
     * @ORM\ManyToOne(targetEntity="drzewaDbBundle\Entity\AclUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idacl_users", referencedColumnName="idacl_users")
     * })
     */
    private $idaclUsers;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=20, nullable=true)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adddate", type="datetime", nullable=false)
     */

    private $token_expire;



    /**
     * Set login
     *
     * @param string $login
     *
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set upassword
     *
     * @param string $upassword
     *
     * @return Users
     */
    public function setUpassword($upassword)
    {
        $this->upassword = $upassword;

        return $this;
    }

    /**
     * Get upassword
     *
     * @return string
     */
    public function getUpassword()
    {
        return $this->upassword;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set additionalInfo
     *
     * @param string $additionalInfo
     *
     * @return Users
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * Get additionalInfo
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Set pictureSignature
     *
     * @param string $pictureSignature
     *
     * @return Users
     */
    public function setPictureSignature($pictureSignature)
    {
        $this->pictureSignature = $pictureSignature;

        return $this;
    }

    /**
     * Get pictureSignature
     *
     * @return string
     */
    public function getPictureSignature()
    {
        return $this->pictureSignature;
    }

    /**
     * Set pictureSignatureType
     *
     * @param integer $pictureSignatureType
     *
     * @return Users
     */
    public function setPictureSignatureType($pictureSignatureType)
    {
        $this->pictureSignatureType = $pictureSignatureType;

        return $this;
    }

    /**
     * Get pictureSignatureType
     *
     * @return integer
     */
    public function getPictureSignatureType()
    {
        return $this->pictureSignatureType;
    }

    /**
     * Set showEmail
     *
     * @param boolean $showEmail
     *
     * @return Users
     */
    public function setShowEmail($showEmail)
    {
        $this->showEmail = $showEmail;

        return $this;
    }

    /**
     * Get showEmail
     *
     * @return boolean
     */
    public function getShowEmail()
    {
        return $this->showEmail;
    }

    /**
     * Set isConfirm
     *
     * @param boolean $isConfirm
     *
     * @return Users
     */
    public function setIsConfirm($isConfirm)
    {
        $this->isConfirm = $isConfirm;

        return $this;
    }

    /**
     * Get isConfirm
     *
     * @return boolean
     */
    public function getIsConfirm()
    {
        return $this->isConfirm;
    }

    /**
     * Set confirmationNumber
     *
     * @param string $confirmationNumber
     *
     * @return Users
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber = $confirmationNumber;

        return $this;
    }

    /**
     * Get confirmationNumber
     *
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    /**
     * Set adddate
     *
     * @param \DateTime $adddate
     *
     * @return Users
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
     * Set wwwpage
     *
     * @param string $wwwpage
     *
     * @return Users
     */
    public function setWwwpage($wwwpage)
    {
        $this->wwwpage = $wwwpage;

        return $this;
    }

    /**
     * Get wwwpage
     *
     * @return string
     */
    public function getWwwpage()
    {
        return $this->wwwpage;
    }

    /**
     * Set sendemail
     *
     * @param integer $sendemail
     *
     * @return Users
     */
    public function setSendemail($sendemail)
    {
        $this->sendemail = $sendemail;

        return $this;
    }

    /**
     * Get sendemail
     *
     * @return integer
     */
    public function getSendemail()
    {
        return $this->sendemail;
    }

    /**
     * Get idusers
     *
     * @return integer
     */
    public function getIdusers()
    {
        return $this->idusers;
    }

    /**
     * Set idaclUsers
     *
     * @param \drzewaDbBundle\Entity\AclUsers $idaclUsers
     *
     * @return Users
     */
    public function setIdaclUsers(\drzewaDbBundle\Entity\AclUsers $idaclUsers = null)
    {
        $this->idaclUsers = $idaclUsers;

        return $this;
    }

    /**
     * Get idaclUsers
     *
     * @return \drzewaDbBundle\Entity\AclUsers
     */
    public function getIdaclUsers()
    {
        return $this->idaclUsers;
    }

    /**
     * Get token
     *
     * @return string
     */

    public function getToken(){
        return $this->token;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Users
     */
    public function setToken($token){

        $this->token = $token;

        return $this;
    }


    /**
     * Get token_expire
     *
     * @return datetime
     */

    public function getTokenExpire(){

        return $this->token_expire;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Users
     */
    public function setTokenExpire($token_expire){

        $this->token_expire = $token_expire;

        return $this;
    }


}
