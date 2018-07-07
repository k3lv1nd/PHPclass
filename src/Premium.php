<?php

namespace kelvin;

class Premium implements customer
{
    private $name;
    private $id;
    private $type;
    private $location;
    private $personal_assistant;

    public function __construct($name, $id, $type, $location)
    {
        $this->name = $name;
        $this->id = $id;
        $this->type = $type;

    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
    public function getName(){
        return $this->name;
    }
    public function getId(){
        return $this->id;

    }
    public function getLocation()
    {
        return $this->type;
    }
}

?>