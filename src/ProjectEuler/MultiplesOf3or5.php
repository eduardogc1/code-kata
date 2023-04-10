<?php

namespace CodeKata\ProjectEuler;

class MultiplesOf3or5
{
    private $finalValue;
    
    function __construct(int $finalValue)
    {
        $this->finalValue = $finalValue;
    }

    public function getFinalValue(): int
    {
        return $this->finalValue;
    }

    public function getAllMultiples(): array
    {
        $arr = array();
        for ($i=1; $i < $this->finalValue; $i++) {
            if($i % 3 == 0 || $i % 5 == 0){
                $arr[] = $i;
            }
        }
        return $arr;
    }

    public function getSumOfMultiples(): int
    {
        $arr = $this->getAllMultiples();
        $sum = 0;
        foreach ($arr as $value) {
            $sum += $value;
        }
        return $sum;
    }
}