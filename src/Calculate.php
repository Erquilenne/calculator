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
        switch ($this->symbol) {
            case '+':
                return $this->first_number + $this->second_number;
                break;
            case '-':
                return $this->first_number - $this->second_number;
                break;
            case '/':
                return $this->first_number / $this->second_number;
                break;
            case '*':
                return $this->first_number * $this->second_number;
                break;
        }

    }
}