<?php

/**
 * @covers \Alterway\Bundle\RestProblemBundle\Problem\Exception
 */
class ExceptionTest extends PHPUnit_Framework_TestCase
{

    public function testTitleIsExceptionClass()
    {

        $exception = new \LogicException();
        $object = new \Alterway\Bundle\RestProblemBundle\Problem\Exception($exception);

        $expected = 'LogicException';
        $this->assertEquals($expected, $object->getTitle());
    }
}
