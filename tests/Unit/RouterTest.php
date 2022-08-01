<?php

namespace Tests\Unit;

use Chungu\Controllers\Controller;
use Chungu\Core\Mantle\Router;
use Exception;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase {

    protected function setUp(): void {

        parent::setUp();

        $this->router = new Router();
        $this->routes_file = __DIR__ . "/../../routes.php";
    }

    public function test_if_routes_file_exists() {

        $this->assertFileExists($this->routes_file);
    }

    public function test_it_creates_a_router_instance() {

        $class = $this->router->load($this->routes_file);

        $this->assertInstanceOf(Router::class, $class);
    }

    public function test_it_registers_a_get_route() {

        $this->router->load($this->routes_file);

        $this->router->get('test', 'TestController@test');

        $expected = [
            'test' => 'TestController@test'
        ];

        $this->assertEquals($expected, $this->router->routes['GET']);
    }

    public function test_it_registers_a_post_route() {

        $this->router->load($this->routes_file);

        $this->router->post('testpost', 'TestController@post');

        $expected = [
            'testpost' => 'TestController@post'
        ];

        $this->assertEquals($expected, $this->router->routes['POST']);
    }
    /**
     * @dataProvider route_missing_Provider
     */
    public function test_an_exception_is_thrown_if_route_is_missing(String $uri, String $type) {

        $this->router->get('/get', 'GetController@get');
        $this->router->post('/post', 'PostController@post');

        $this->expectException(Exception::class);
        $this->expectExceptionCode(404);

        $this->router->direct($uri, $type);
    }

    public function route_missing_Provider() {
        return [
            ['', 'GET'],
            ['/post1', 'POST']
        ];
    }
    public function test_if_route_is_executed_correctly_when_callable() {

        $this->router->get('get', function () {
            return 1;
        });

        $this->assertIsCallable($this->router->routes['GET']['get']);
    }
/*
    public function test_if_an_exception_is_thrown_when_a_class_is_missing() {

        $this->router->get('get', 'TestController@test');
        
        $this->expectException(Exception::class);
        $this->expectExceptionCode(500);

        $this->router->direct('get', 'GET');

    }
    */
}
