<?php
namespace Tests\Unit;


use Exception;
use Chungu\Core\Mantle\Router;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase {

    protected function setUp(): void {

        parent::setUp();

        $this->router = new Router();
        $this->routes_file = __DIR__ . "/../../routes.php";
    }

    public function test_if_signin_route_file_exists() {

        $this->router->load($this->routes_file);

        $this->router->post('signin', 'AuthController@signin');

        $expected = [
            'signin' => 'AuthController@signin'
        ];

        $this->assertEquals($expected, $this->router->routes['POST']);
    }

}
