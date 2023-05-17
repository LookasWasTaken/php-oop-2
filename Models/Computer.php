<?php
class Computer {
    protected $brand;
    protected $model;
    protected $mobo;
    protected $os;
    protected $ram;
    protected $cpu;
    protected $gpu;
    protected $storage;
    
    public function __construct(string $brand, string $model, string $mobo, string $os, string $ram, string $cpu, string $gpu, string $storage) {
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
}