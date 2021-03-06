<?php namespace Cribbb\Tests\Application\Identity;

use Cribbb\Application\Identity\PasswordResetRequestCommand;

class PasswordResetRequestCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @var PasswordResetCommand */
    private $command;

    public function setUp()
    {
        $this->command = new PasswordResetRequestCommand('name@domain.com');
    }

    /** @test */
    public function should_have_gettable_properties()
    {
        $this->assertEquals('name@domain.com', $this->command->email);
    }
}
