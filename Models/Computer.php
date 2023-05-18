<?php
class Computer {
    
    public function __construct(protected string $brand, protected string $model, protected string $mobo, protected string $os, protected string $ram, protected string $cpu, protected string $gpu, protected string $storage) {
        $this->brand = $brand;
        $this->model = $model;
        $this->mobo = $mobo;
        $this->os = $os;
        $this->ram = $ram;
        $this->cpu = $cpu;
        $this->gpu = $gpu;
        $this->storage = $storage;
    }

    public function getParam($param){
        return $this->$param;
    }

    public function getType() {
        return "Computer";
    }
}