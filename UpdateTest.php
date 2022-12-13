<?php

use PHPUnit\Framework\TestCase;

require_once('autoload.php');

class UpdateTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected): void
    {
        $user = new UserTableWrapper();
        $user->insert(['id' => $a, 'name' => $b]);
        $user->update(1, ['id' => 2,'name' => 'Vladimir']);
        $this->assertSame($expected, $user->get());
    }
    public function additionProvider(): array
    {
        return [
            [1, 'Svetlana', array(0 => array('id' => 2,'name' => 'Vladimir'))],
            [1, 'Valera', array(0 => array('id' => 2,'name' => 'Vladimir'))],
        ];
    }
}

//vendor\bin\phpunit InsertTest.php --coverage-clover