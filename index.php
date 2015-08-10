<?php 
	session_start();
	define('SITE_NAME', 'Emilio Cobos-CMC');
	define('DEVELOPEMENT_MODE', true);
	
	// Definir los directorios
	define('BASE_PATH', dirname(__FILE__) . '/');



	// Definir la ip del visitante
	define('CURRENT_USER_IP',  ! empty($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] :
			( ! empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'] ));

	// Saber si es un administrador:
	define( 'IS_ADMIN', isset( $_SESSION['admin_permissions'] ) && $_SESSION['admin_permissions'] );

	// Incluir el archivo que procesará la aplicación
	require BASE_PATH . 'app/config.php';
	require BASE_PATH . 'app/main.php';