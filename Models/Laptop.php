<?php
class Laptop extends Computer {
    protected $psu;
    
    public function __construct(string $brand, string $model, string $mobo, string $os, string $ram, string $cpu, string $gpu, string $storage, string $psu) {
        parent::__construct($brand, $model,$mobo,$os,$ram,$cpu,$gpu,$storage);
        $this->psu = $psu;
    }

    public function getType() {
        return "Laptop";
    }
}