<?php
define('ROOT_DIR', __DIR__.'/../');
define('PUBLIC_DIR', __DIR__.'/../public/');
define('ENGINE_DIR', __DIR__.'/../engine/');

function myDB_connect () {
    $defaultConfig = require ROOT_DIR . 'config/db_configs/config.default.php';

    if (!file_exists(ROOT_DIR . 'config/db_configs/config.php')) {
        echo 'Создайте файл конфигурации';
        $localConfig = [];
    } else {
        $localConfig = require ROOT_DIR . 'config/db_configs/config.php';
    }

    $config = array_merge($defaultConfig, $localConfig);

    $mysqli = mysqli_connect(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']

    );
    return $mysqli;
}

$query = "SELECT * FROM shop . goods";
$resultQuery = mysqli_query(myDB_connect(), $query);
$goods = [];
$count = $_GET['count'] ?? NULL;

while ($row = mysqli_fetch_assoc($resultQuery)) {
	$goods[] = $row;
};
$filteredGoods = [];
function goodsList($count, $page = 1) {
    global $filteredGoods, $goods;
    $result = [];
//    var_dump($goods);
    foreach ($goods as $good) {
        $i = 1;
        if ($good['idgoods'] > ($count * ($page-1)) && $good['idgoods'] <= $count * $page) $result[] = $good;
    };
    $filteredGoods = $result;
    return $result;
};

goodsList($count);
//$filteredGoods = [0=>1, 1=>2, 2=> array('three', 'four', 'five')];
//print_r($count);
var_dump($count);
//echo '<br/> $filteredGoods';
//var_dump($filteredGoods);






