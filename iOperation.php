
<?php


interface iOperation
{


//interfaceOperation ( будет два
// метода is_applicable булевое значение приним ли какой знак или нет) и второй (метод сalcylate) операция сложения вичитания деления отнимания)
    public function is_applicable($whatSing);
//
//метод сalcylate (принимать параметрами масив знаков операций и строку)
public function calculate($arrayString, $string);

}