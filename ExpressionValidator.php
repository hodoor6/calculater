<?php
include 'iExpressionValidator.php';
class ExpressionValidator implements iExpressionValidator

{
    // возращает true в случае успеха и false в случае неудачи
    public function is_valid($data)
    {
        if (trim($data) or !empty($data)) {
            if (preg_match('#^[\d\s*/+.()_-]+$#si', $data)) {
                return true;
            } else {
                echo 'Ведите числовые данные буквы некорректны для калькулятора';
            }
        } else {
            echo 'Введите данные для подсчета на калькуляторе пример 1+1';
        }

    }
}
