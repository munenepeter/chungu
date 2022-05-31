<?php
namespace Chungu\Core\Mantle;

use Chungu\Core\Mantle\Request;

class Paginator {

    public static $per_page;
    public static $totalCount;
    
    public static $start;
    public static $end;

    public static function getPage() {
        return (!isset($_GET['page'])) ? 1 : (int)$_GET['page'];
    }

    public static function paginate(array $data, int $per_page = 10) {

        self::$per_page = $per_page;

        $paginated_data = array_slice($data, $per_page * intval(self::getPage()) - $per_page, $per_page);
        self::$start = (int)(implode('',array_keys($paginated_data,reset($paginated_data))))+(self::getPage());
        self::$end =  (int)(implode('',array_keys($paginated_data,end($paginated_data))))+1; 
        return $paginated_data;
    }

    public static function showLinks($data) {

        self::$totalCount = count($data);

        $max_pages = ceil(self::$totalCount / self::$per_page);

        if (self::getPage() > 1)
            echo  '<a class="p-2 text-blue-500" href="/' . Request::uri() . '?page=' . (self::getPage() - 1) . '"> Previous </a>';
        if (self::getPage() < $max_pages)
            echo  '<a class="p-2 text-blue-500" href="/' . Request::uri() . '?page=' . (self::getPage() + 1) . '"> Next </a>';
    }
}
// Paginator::paginate($users, 10);
// Paginator::showLinks($users);


/* 
class Paginator{
    private static $per_page;
    public static $pg = 2;
    public static function paginate(array $data, int $per_page = 2){
        self::$per_page = $per_page;
        return array_slice($data, $per_page * intval(self::$pg) - $per_page, $per_page, 1);
       }

    public static function showLinks($data){

        $max_pages = ceil(count($data) / self::$per_page);
        
        if(self::$pg > 1)
        echo  '<a href="/rr?page='.(self::$pg-1).'"> Previous </a>'.PHP_EOL;
        if(self::$pg < $max_pages)
        echo  '<a href="/rr?page='.(self::$pg+1).'"> Next </a>';  
    }

}

$users = array("1", "2", "3", "4", "5", "6", "7", "8");
//var_dump($users);

var_dump(Paginator::paginate($users,2));
Paginator::showLinks($users);

*/     