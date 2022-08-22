<?php

class Calc {
    public $num1;
    public $num2;
    public $oper;

    public function __construct($num1, $num2, $oper) {
        $this->num1 = (float)$num1;
        $this->num2 = (float)$num2;
        $this->oper = $oper;
    }

    // internal PHP method to handle calculations
    public function caculate() {
        switch ($this->oper) {
            case "add":
                $res = $this->num1 + $this->num2;
                break;
            case "sub":
                $res = $this->num1 - $this->num2;
                break;
            case "mult":
                $res = $this->num1 * $this->num2;
                break;
            case "div":
                if ($this->num2==0) {
                    $res = "Error !0";
                } else {
                    $res = $this->num1 / $this->num2;
                }
                break;
            default:
                $res = "Error";
        }
        return $res;
    }
}