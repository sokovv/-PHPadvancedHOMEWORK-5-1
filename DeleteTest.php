<?php

use PHPUnit\Framework\TestCase;

require_once('autoload.php');

class DeleteTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected): void
    {
        $user = new UserTableWrapper();
        $user->insert(['id' => $a, 'name' => $b]);
        $user->delete(1);
        $this->assertSame($expected, $user->get());
    }
    public function additionProvider(): array
    {
        return [
            [1, 'Valera', []],
            [2, 'Vladimir', array(0 => array('id' => 2,'name' => 'Vladimir'))],
        ];
    }
}

//vendor\bin\phpunit InsertTest.php --coverage-clover