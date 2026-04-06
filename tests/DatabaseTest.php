<?php
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase {
    public function testDatabaseConfigConstants() {
        // This checks if your config file has the required constants defined
        require_once 'config.php';
        
        $this->assertTrue(defined('DB_SERVER'), "DB_SERVER is not defined");
        $this->assertEquals('db', DB_SERVER);
        $this->assertTrue(defined('DB_DATABASE'), "DB_DATABASE is not defined");
    }
}
