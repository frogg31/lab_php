<?php
class Calculator
{
    public float $calculate;

    public function __construct(float $calculate)
    {
        $this->calculate = $calculate;
    }

    public function sum(float $term): self
    {
        $this->calculate = $this->calculate + $term;
        return $this;
    }

    public function minus(float $subtrahend): self
    {
        $this->calculate = $this->calculate - $subtrahend;
        return $this;
    }

    public function product(float $factor): self
    {
        $this->calculate = $this->calculate * $factor;
        return $this;
    }

    public function division(float $divider): self
    {
        if ($divider !== 0) {
            $this->calculate = $this->calculate / $divider;
        } else {
            $this->calculate = 0;
        }
        return $this;
    }

    public function getResult():float
    {
        return $this->calculate;
    }
}
$calculator = new Calculator(0);
echo $calculator->sum(5)->product(100)->minus(15)->division(50)->getResult();
