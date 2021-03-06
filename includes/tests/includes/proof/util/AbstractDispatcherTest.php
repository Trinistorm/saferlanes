<?php

namespace proof\util;


require_once dirname(__FILE__) . '/../../../../proof/util/AbstractDispatcher.php';

/**
 * Test class for AbstractDispatcher.
 * Generated by PHPUnit on 2012-07-30 at 04:22:53.
 */
class AbstractDispatcherTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var AbstractDispatcher
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = $this->getMockForAbstractClass(__NAMESPACE__ . "\\AbstractDispatcher");
        $this->bindable = $this->getMock("proof\util\EventListener");

        $this->object->bind($this->bindable);

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers proof\util\AbstractDispatcher::flush
     * @todo Implement testFlush().
     */
    public function testFlush()
    {

        $this->assertContains($this->bindable, $this->object->flush()->toArray());

    }

    /***
     * @covers proof\util\AbstractDispatcher::getListeners
     * @todo Implement testGetListeners().
     */
    public function testGetListeners()
    {

        $this->assertContains($this->bindable, $this->object->getListeners()->toArray());

    }

}

?>
