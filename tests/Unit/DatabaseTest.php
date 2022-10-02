<?php

namespace Tests\Unit;


use PHPUnit\Framework\TestCase;
use Chungu\Core\Database\Connection;

require __DIR__ . '/../../Core/helpers.php';

class DatabaseTest extends TestCase {

    protected function setUp(): void {

        parent::setUp();
        $this->config_file  =  __DIR__ . "/../../config.php";
        $this->config_details =  require_once($this->config_file);
    }

    public function test_if_there_is_a_config_for_database() {
        $this->assertFileExists($this->config_file);
        $this->assertArrayHasKey("mysql", $this->config_details, "Config does not contain 'mysql' details");
        $this->assertArrayHasKey("sqlite", $this->config_details, "Config does not contain 'sqlite' details");
    }
    public function test_if_we_can_connect_to_a_db() {
        $database = (is_dev()) ? $this->config_details['sqlite'] : $this->config_details['mysql'];
        $db_instance =   Connection::make($database);
        $this->assertInstanceOf(\PDO::class, $db_instance);
    }
}
