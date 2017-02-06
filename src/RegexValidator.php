<?php


namespace SamIT\Yii2\Validators;


use \yii\validators\Validator;

class RegexValidator extends Validator
{
    public $wrap = false;

    protected function validateValue($value)
    {
        try {
            preg_match($this->wrap ? "/$value/" : $value, '');
        } catch (\Exception $e) {
            return \Yii::t('app', 'Invalid regex for {attribute}');
        }
    }


}