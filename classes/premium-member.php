<?php

class PremiumMember extends Member
{
    private $_inDoorInterests = array();
    private $_outDoorInterests = array();

    public function __construct($f_name, $l_name, $age, $gender, $phone)
    {
        parent::__construct($f_name, $l_name, $age, $gender, $phone);
    }

    /**
     * @return mixed
     */
    public function getOutDoorInterests()
    {
        return $this->_outDoorInterests;
    }

    /**
     * @param mixed $outDoorInterests
     */
    public function setOutDoorInterests($_outDoorInterests)
    {
        $this->_outDoorInterests = $_outDoorInterests;
    }

    /**
     * @return mixed
     */
    public function getInDoorInterests()
    {
        return $this->_inDoorInterests;
    }

    /**
     * @param mixed $inDoorInterests
     */
    public function setInDoorInterests($_inDoorInterests)
    {
        $this->_inDoorInterests = $_inDoorInterests;
    }

}