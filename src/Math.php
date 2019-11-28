<?php
namespace MyLibrary;

class Math
{
    public function ariaPatrat(int $a)
    {

        $bn = new \Moontoast\Math\BigNumber('9,223,372,036,854,775,808');
        $bn->multiply(35);

        var_dump($bn->getValue());
        var_dump($bn->convertToBase(16));
        return $a*$a;
    }

}