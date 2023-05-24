<?php 

trait Weight {
    protected $weight;

    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($weight, $unit){
        if(!is_int($weight) AND !is_double($weight)){
            throw new Exception('Inserire un numero per il peso');
        }
        $this->weight = $weight.$unit;
    }
}