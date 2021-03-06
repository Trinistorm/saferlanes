<?php

namespace proof\webapp;


require_once dirname(__FILE__) . '/../../../../proof/webapp/LocationChangedEvent.php';

/**
 * Test class for LocationChangeEvent.
 * Generated by PHPUnit on 2012-07-30 at 04:58:35.
 */
class LocationChangedEventTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var LocationChangeEvent
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new LocationChangedEvent ($this->getMock("proof\webapp\Browser"),
                                                                              $this->getMock('proof\util\ArrayList'));

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers proof\webapp\LocationChangeEvent::getPath
     * @todo Implement testGetPath().
     */
    public function testGetPath()
    {

        $this->assertInstanceOf("proof\util\ArrayList", $this->object->getPath());

    }

}

?>
