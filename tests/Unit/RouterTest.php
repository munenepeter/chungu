<?php

namespace Tests\Unit;

use Chungu\Core\Mantle\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase {

    public function test_if_routes_file_exists(){

        $routes_file = __DIR__."/../../routes.php";

        $this->assertFileExists($routes_file);
    }
    
    public function test_it_creates_a_router_instance(){
        $router = new Router();

        $class = $router->load(__DIR__."/../../routes.php");

        $this->assertInstanceOf(Router::class, new Router);
    }
}