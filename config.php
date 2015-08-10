<?php
	return array(
		/*
		 * Configuración requerida
		 */
		'database' => array(
			'driver' => 'mysql',
			'host' => 'localhost',
			'user' => 'root',
			'password' => 'root',
			'dbname' => 'polls'
		),

		/*
		 * Usar la urls bonitas viene activado por defecto
		 * Rewrite es para que la aplicación genere las urls sin el index.php/
		 * En caso de que lo uses, deberás usar en el .htacces algo así:
			<IfModule mod_rewrite.c>
				RewriteEngine on

				RewriteCond %{REQUEST_FILENAME} !-f
				RewriteCond %{REQUEST_FILENAME} !-d

				RewriteRule ^(.*)$ index.php/$1 [L]
			</IfModule>*/
		'url' => array(
			'pretty' => true,
			'rewrite' => true
		),

		'path' => array(
			'includes' => 'includes',
			'models' => 'models',
			'cache' => 'cache',
			'controllers' => 'controllers',
			'views' => 'views',
			'assets' => 'assets'
		),

		'cache' => array(
			'expires' => 3, // Expiración en días de los items de la caché
		),
		/*
		 * Configuración extra aquí
		 */
		'admin' => array(
			'user' => 'ecoal95',
			'password' => '$2a$08$NVekmN7OH2ZO4HQJHuoY0eJ.SFh6NKhhOcUFd8s.C2StgKqO6KdPa'
		)
	);