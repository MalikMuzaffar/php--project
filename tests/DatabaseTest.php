<?php
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testDatabaseConfigConstants()
    {
        $host = getenv('DB_SERVER') ?: 'db';
        $user = getenv('DB_USERNAME') ?: 'root';
        $pass = getenv('DB_PASSWORD') ?: '';
        $name = getenv('DB_DATABASE') ?: 'onlineshop';

        $db = mysqli_connect($host, $user, $pass, $name);
        $this->assertNotFalse($db, "DB connection failed: " . mysqli_connect_error());
        mysqli_close($db);
    }
}
