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
while ($row = mysqli_fetch_assoc($resultQuery)) {
	$goods[] = $row;
};





