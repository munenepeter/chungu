<?php

namespace Tests\Unit;

use Chungu\Core\Mantle\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase {

    public function test_if_config_file_exists(){

        $config_file = __DIR__."/../../config.php";

        $this->assertFileExists($config_file);
    }
    
    public function test_it_creates_a_router_instance(){
        $router = new Router();

        $class = $router->load(__DIR__."/../../config.php");

        $this->assertInstanceOf(Router::class, new Router);
    }
}