<?php

namespace terabytesoft\helpers\tests;

use terabytesoft\helpers\TimeZone;
use terabytesoft\helpers\tests\UnitTester;

class TimeZoneCest
{
    /**
     * @var Password $password
     */
    private $timezone;

    /**
     * _before
     */
    public function _before(UnitTester $I): void
    {
        $this->timezone = new TimeZone();
    }

    /**
     * _after
     */
    public function _after(UnitTester $I): void
    {
        unset($this->timezone);
    }

    /**
     * testTimeZone
     */
    public function testTimeZone(UnitTester $I): void
    {
        $this->timezone = \yii\helpers\ArrayHelper::map(
            $this->timezone->getAll(),
            'timezone',
            'name'
        );

        $I->assertIsArray($this->timezone);
        $I->assertContains('America/Santiago (UTC -04:00)', $this->timezone);
        $I->assertContains('Europe/Moscow (UTC +03:00)', $this->timezone);
        $I->assertContains('Europe/Paris (UTC +02:00)', $this->timezone);
    }
}
