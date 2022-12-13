<?php

use PHPUnit\Framework\TestCase;

require_once('autoload.php');

class InsertTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected): void
    {
        $user = new UserTableWrapper();
        $user->insert(['id' => $a, 'name' => $b]);
        $this->assertSame($expected, $user->get());
    }
//vendor\bin\phpunit InsertTest.php --coverage-clover

    public function additionProvider(): array
    {
        return [
            [1, 'Valera', array(0 => array('id' => 1,'name' => 'Valera'))],
            [1, 'Svetlana', array(0 => array('id' => 1,'name' => 'Svetlana'))],
            [2, 'Vladimir', array(0 => array('id' => 2,'name' => 'Vladimir'))],
        ];
    }
}