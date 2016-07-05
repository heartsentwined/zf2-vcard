<?php

namespace Yalesov\Vcard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Yalesov\Vcard\Entity\Phone
 */
class Phone
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $value
     */
    private $value;

    /**
     * @var Yalesov\Vcard\Entity\Param
     */
    private $param;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $phoneTypes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->phoneTypes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Phone
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set param
     *
     * @param Yalesov\Vcard\Entity\Param $param
     * @return Phone
     */
    public function setParam(\Yalesov\Vcard\Entity\Param $param = null)
    {
        $this->param = $param;
    
        return $this;
    }

    /**
     * Get param
     *
     * @return Yalesov\Vcard\Entity\Param 
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Add phoneTypes
     *
     * @param Yalesov\Vcard\Entity\PhoneType $phoneTypes
     * @return Phone
     */
    public function addPhoneType(\Yalesov\Vcard\Entity\PhoneType $phoneTypes)
    {
        $this->phoneTypes[] = $phoneTypes;
    
        return $this;
    }

    /**
     * Remove phoneTypes
     *
     * @param Yalesov\Vcard\Entity\PhoneType $phoneTypes
     */
    public function removePhoneType(\Yalesov\Vcard\Entity\PhoneType $phoneTypes)
    {
        $this->phoneTypes->removeElement($phoneTypes);
    }

    /**
     * Get phoneTypes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPhoneTypes()
    {
        return $this->phoneTypes;
    }
}
