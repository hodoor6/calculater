<?php
include 'html/header.php';
include 'ExpressionValidator.php';


class Calculator



{

    public $validtor;


    public function __construct()   {
        $this->validtor = new ExpressionValidator;
    }






    public function calc($data)
    {
        //отработка метода из valid из класа validator
        if ($this->validtor->is_valid($data)) {

            //вычетание
            $this->Subtraction($data);

            //сумирование
            $this->Sum(($data));

                //умножение
            $this->Multiplication(($data));

                //деление

            $this->Division(($data));


        }
    }

    public function Subtraction($data)
    {
        //вычетание
        if (strpos($data, '-') === false) {
            echo '- не обнаружен ' . '<br>';
        } else {

            $result = explode("-", $data);
            $resultSubtraction = $result[0] - $result[1];
            echo $resultSubtraction . '<br>';
        }
    }

    public function Sum($data)
    {
       //сумирование
         if (strpos($data, '+') === false) {
                echo '+ не обнаружено ' . '<br>';
            } else {
                $result = explode("+", $data);
                $resultSum = $result[0] + $result[1];
                echo $resultSum . '<br>';
            }
}
    public function Multiplication($data)
    {
        //умножение
        if (strpos($data, '*') === false) {
                echo '* не обнаружено ' . '<br>';
            } else {

                $result = explode("*", $data);
                $resultMultiplication = $result[0] * $result[1];
                echo $resultMultiplication . '<br>';
            }
    }

    public function Division($data)
    {

        //деление
        if (strpos($data, '/') === false) {
            echo '/ не обнаружено ' . '<br>';
        } else {

            $result = explode("/", $data);
            $resultDivision = $result[0] / $result[1];
            echo $resultDivision . '<br>';
        }
    }


    private function correctInput($data)
    {

    }

}




$calculator = new Calculator;

$calculator -> calc($data=$_GET['name']);



include 'html/footer.php';


?>

