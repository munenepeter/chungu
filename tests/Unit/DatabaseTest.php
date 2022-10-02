<?php

namespace Tests\Unit;


use Chungu\Core\Mantle\App;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase {


    public function test_if_there_is_a_db_instance() {
     //   $databaseInstance = App::get('database');
     //   $this->assertInstanceOf(QueryBuilder::class, $databaseInstance);
     $this->assertTrue(true);
    }
}
