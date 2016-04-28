<?php

require_once __DIR__ . '/../Stack.php';

class StackTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Stack
     */
    protected $stack;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->stack = new Stack();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        $this->stack = null;
    }

    /**
     * @covers Stack::isEmpty
     * @todo   Implement testIsEmpty().
     */
    public function testIsEmpty() {
        $this->assertTrue($this->stack->isEmpty());
    }

    public function testPush() {
        $this->stack->push('foo');
        $this->assertEquals('foo', $this->stack->getList()[count($this->stack->getList()) - 1]);
        $this->assertFalse($this->stack->isEmpty());
    }

    public function testPop() {
        $this->stack->push('foo');
        $this->assertEquals('foo', $this->stack->pop());
        $this->assertTrue($this->stack->isEmpty());
    }

}
