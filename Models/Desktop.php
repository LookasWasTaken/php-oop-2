<?php
class Desktop extends Computer {
    protected $case;
    
    public function __construct(string $brand, string $model, string $mobo, string $os, string $ram, string $cpu, string $gpu, string $storage, string $case) {
        parent::__construct($brand, $model,$mobo,$os,$ram,$cpu,$gpu,$storage);
        $this->case = $case;
    }
}