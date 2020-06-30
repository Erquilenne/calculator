<?php


namespace App;


class Calculate
{
    /**
     * @var int
     */
    private $first_number;
    /**
     * @var int
     */
    private $second_number;
    /**
     * @var string
     */
    private $symbol;

    private $calculate;

    public function calc()
    {
        $methodCalculate = 'method'.ucfirst(strtolower($this->symbol));
        if (method_exists($this, $methodCalculate)) {
            return $this->{$methodCalculate}();
        }
        throw new \LogicException('Not found operation');
    }

    private function methodFold(): int
    {
        return (int)$this->first_number + $this->second_number;
    }

    private function methodSubtract(): int
    {
        return (int)$this->first_number - $this->second_number;
    }

    private function methodDivided(): float
    {

        if ($this->second_number === 0) {
            throw new \LogicException('Not div on zero');
        }

        return $this->first_number / $this->second_number;
    }

    private function methodMultiply(): int
    {
        return (int)$this->first_number * $this->second_number;
    }
}