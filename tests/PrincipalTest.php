<?php
 
use Yantb\PackageTest\Principal;
use PHPUnit\Framework\TestCase;
 
class PrincipalTest extends TestCase {
 
    public function testSaludo()
    {
        $this->assertTrue(Principal::saludo());
    }
 
}