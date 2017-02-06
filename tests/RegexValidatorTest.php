<?php

use \MarketFlow\Yii2\Validators\RegexValidator;
use \PHPUnit\Framework\TestCase;

class RegexValidatorTest extends TestCase
{


    public function regexProvider()
    {
        return [
            [null, false],
            ['/abc/', true],
            ['/abc', false]

        ];
    }
    /**
     * @dataProvider regexProvider
     */
    public function testValidate($regex, bool $expected)
    {
        $val = new RegexValidator();

        $this->assertEquals($val->validate($regex), $expected);
    }

}