<?php

class Calculator
{
    public $hours;
    public $wage;

    function __construct($hours, $wage)
    {
        $this->hours = $hours;
        $this->wage = $wage;
        $this->totalCheck();
    }

    public function totalCheck()
    {
        return $this->hours * $this->wage;
    }


    public function federalTax()
    {
        return $this->totalCheck() * .12;
    }

    public function illinoisTax()
    {
        return $this->totalCheck() * .03;
    }

    public function socialSecurity()
    {
        return $this->totalCheck() * .06;
    }

    public function medicare()
    {
        return $this->totalCheck() * .013;
    }

    public function totalTaxes()
    {
        return $this->totalCheck() - $this->federalTax() - $this->illinoisTax() - $this->socialSecurity() - $this->medicare();
    }
}

if ($_POST) {
    $Check = new Calculator((float)$_POST["Hours"], (float)$_POST["Wage"]);
}



//Print out total check
$Total = $Check->totalCheck();

$Federal = $Check->federalTax();

$Illinois = $Check->illinoisTax();

$Social = $Check->socialSecurity();

$Medicare = $Check->medicare();

$TotalTaxes = $Check->totalTaxes();
