<?php

namespace kelvin;
class Normal implements Customer
{
    use Member;
    private $name;
    private $id;
    private $type;
    private $location;

    public function __construct($name, $id, $type, $location)
    {
        $this->name = $name;
        $this->id = $id;
        $this->type = $type;
        $this->location = $location;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    public function getName(){
        return $this->name;
    }
    public function getId(){
        return $this->id;

    }
    public function getType()
    {
        return $this->type;
    }

    public function getLocation()
    {
        return $this->location;
    }

}
