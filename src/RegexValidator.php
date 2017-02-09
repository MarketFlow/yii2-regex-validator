<?php

namespace MarketFlow\Yii2\Validators;

use \yii\validators\Validator;

class RegexValidator extends Validator
{
    public $wrap = '';

    protected function validateValue($value)
    {
        try {
            preg_match($this->wrap  . $value . $this->wrap, '');
        } catch (\Exception $e) {
            return [\Yii::t('app', 'Invalid regex for {attribute}'),  []];
        }

        return null;
    }
}
