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
        if (!($pc instanceof Desktop) && !($pc instanceof Laptop)) {
            throw new Exception("### - Admit only new Desktop or new Laptop - ###");
        } else {
            if ($pc instanceof Desktop) {
                return $this->portable = "NOT Portable";
            } else {
                return $this->portable = "Portable";
            }
        }
    }
}
