<?php


interface iExpressionParser

{
//iExpressionParser ( метод pars(argument строка)) на виходе будет выдавать набор (операций)
    public function pars( $stringArg);
}