<?php
include 'iExpressionParser.php';
include 'iOperation.php';


class ExpressionParser implements iExpressionParser,iOperation
{
//iExpressionParser ( метод pars(argument строка)) на виходе будет выдавать набор (операций)
    public function pars($stringArg)
    {

    }
// метода is_applicable булевое значение приним ли какой знак или нет) и второй (метод сalcylate) операция сложения вичитания деления отнимания)
    public function is_applicable($whatSing)
    {

    }

    //метод сalcylate (принимать параметрами масив знаков операций и строку)
    public function calculate($stringArg,$string)
    {

    }

///(даю строку создает обект будет два метода getoperandsun (выдавать обект симпл оперйшон) )
public function getoperandsun()
{


}
///getoperand (выдаст 2/3

    public function getoperand ()
    {

    }

}