<?php

// require_once('routes.php');
require_once('./router/login/login.php');
require_once('./router/user/user.php');
require_once('./router/student/student.php');
require_once('./router/teacher/teacher.php');
require_once('./router/group/group.php');
require_once('./router/work/work.php');

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