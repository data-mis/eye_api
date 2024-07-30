<?php 

class router{
    public static $validroutes = array();
    public static function set($route,$function){
        require_once('header_access.php');
        require_once('jwt_utils.php');
        require_once('db.php');
        require_once('./class/misu.php');
        // print_r($_GET['url']);
        $validroutes[] = $route;
        if($_GET['url'] == $route){
            $function->__invoke();
        }
    }
}
?>