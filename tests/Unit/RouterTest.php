<?php

namespace Tests\Unit;

use Chungu\Core\Mantle\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase {

    protected function setUp():void{

        parent::setUp();

        $this->router = new Router();
        $this->routes_file = __DIR__."/../../routes.php";
    }

    public function test_if_routes_file_exists(){

        $this->assertFileExists($this->routes_file);
    }
    
    public function test_it_creates_a_router_instance(){

        $class = $this->router->load($this->routes_file);

        $this->assertInstanceOf(Router::class, $class);
    }

    public function test_it_registers_a_get_route(){

        $this->router->load($this->routes_file);

        $this->router->get('test', 'TestController@test');

        $expected = [
            'test' => 'TestController@test'            
        ];

        $this->assertEquals($expected, $this->router->routes['GET']);
    }

    public function test_it_registers_a_post_route(){

        $this->router->load($this->routes_file);

        $this->router->post('testpost', 'TestController@post');

        $expected = [
            'testpost' => 'TestController@testpost'            
        ];

        $this->assertEquals($expected, $this->router->routes['POST']);
    }
}