<?php

namespace Heartsentwined\Vcard\Entity;

/**
 * Heartsentwined\Vcard\Entity\Source
 */
class Source
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
     * @var Heartsentwined\Vcard\Entity\Param
     */
    private $param;

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
     * @param  string $value
     * @return Source
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
     * @param  Heartsentwined\Vcard\Entity\Param $param
     * @return Source
     */
    public function setParam(\Heartsentwined\Vcard\Entity\Param $param = null)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return Heartsentwined\Vcard\Entity\Param
     */
    public function getParam()
    {
        return $this->param;
    }
}
