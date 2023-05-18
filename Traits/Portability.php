<?php

trait Portability
{
    private $portable;

    public function getPortable()
    {
        return $this->portable;
    }

    public function setPortable($pc)
    {
        if($pc instanceof Desktop){
            return $this->portable = "NOT Portable";
        } else {
            return $this->portable = "Portable";
        }
    }
}