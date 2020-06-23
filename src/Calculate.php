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

    public function __construct(int $first_number, int $second_number, string $symbol)
    {
        $this->first_number = $first_number;
        $this->second_number = $second_number;
        $this->symbol = $symbol;
    }

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