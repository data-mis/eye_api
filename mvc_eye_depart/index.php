<?php

require_once('routes.php');

/* function เช็คการเรียกใช้ class */
    function __autoload($class_name) {
        if (file_exists('./controllers/'.$class_name.'.php')) {
			require_once './controllers/'.$class_name.'.php';
		}else if (file_exists('./models/'.$class_name.'.php')) {
			require_once './models/'.$class_name.'.php';
		}else if (file_exists('./router/'.$class_name.'.php')) {
			require_once './router/'.$class_name.'.php';
		}else if (file_exists('./views/'.$class_name.'.php')) {
			require_once './views/'.$class_name.'.php';
		}else if (file_exists('./class/'.$class_name.'.php')) {
			require_once './class/'.$class_name.'.php';
		}
    }

?>