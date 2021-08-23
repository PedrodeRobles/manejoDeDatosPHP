<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('optimusoft@outlook.com');
        $this->assertTrue($email);

        $email = Validate::email('optimusoft@@outlook.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);

        $url = Validate::url('platzi.com');
        $this->assertFalse($url);
    }

    public function test_password()
    {
        $password = Validate::password('012ABfd');
        $this->assertTrue($password);

        $password = Validate::password('A5gcJ');
        $this->assertFalse($password);
    }

}