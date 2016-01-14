<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-07 10:32:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Users::getAssort() ~ APPPATH\classes\Controller\Ajax.php [ 69 ] in file:line
2015-02-07 10:32:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-07 10:32:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Users::getAssort() ~ APPPATH\classes\Controller\Ajax.php [ 69 ] in file:line
2015-02-07 10:32:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-07 10:36:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Users::getAssort() ~ APPPATH\classes\Controller\Ajax.php [ 69 ] in file:line
2015-02-07 10:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-07 10:36:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Users::getAssort() ~ APPPATH\classes\Controller\Ajax.php [ 69 ] in file:line
2015-02-07 10:36:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-07 10:37:06 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\ajax.php [ 1 ] in Z:\home\teleantenna.lan\www\application\views\ajax.php:1
2015-02-07 10:37:06 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\ajax.php(1): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\teleant...', 1, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\application\views\ajax.php:1
2015-02-07 10:57:03 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`role_id`' at line 1 [ select `u`.`id`,`u`.`usename`,`r`.`description` from `users` `u` inner join `roles_user` `ru` on `u`.`id` = `ru`.`user_id` INNER JOIN `roles` `r` INNER JOIN `r`.`id` = `ru`.`role_id` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 10:57:03 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `u`.`id`...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Users.php(16): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(74): Model_Users->getUserRoles(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_user_roles()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 10:57:03 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`role_id`' at line 1 [ select `u`.`id`,`u`.`usename`,`r`.`description` from `users` `u` inner join `roles_user` `ru` on `u`.`id` = `ru`.`user_id` INNER JOIN `roles` `r` INNER JOIN `r`.`id` = `ru`.`role_id` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 10:57:03 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `u`.`id`...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Users.php(16): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(74): Model_Users->getUserRoles(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_user_roles()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 10:57:05 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`role_id`' at line 1 [ select `u`.`id`,`u`.`usename`,`r`.`description` from `users` `u` inner join `roles_user` `ru` on `u`.`id` = `ru`.`user_id` INNER JOIN `roles` `r` INNER JOIN `r`.`id` = `ru`.`role_id` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 10:57:05 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `u`.`id`...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Users.php(16): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(74): Model_Users->getUserRoles(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_user_roles()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:04:51 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.roles_user' doesn't exist [ select `u`.`id`,
		`u`.`usename`,
		`r`.`description`
		from `users` `u`
		inner join `roles_user` `ru`
			on `u`.`id` = `ru`.`user_id`
		INNER JOIN `roles` `r`
			ON `r`.`id` = `ru`.`role_id`
		WHERE `u`.`username` = 'a' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:04:51 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `u`.`id`...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Users.php(27): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(74): Model_Users->getUserRoles(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_user_roles()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:04:51 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.roles_user' doesn't exist [ select `u`.`id`,
		`u`.`usename`,
		`r`.`description`
		from `users` `u`
		inner join `roles_user` `ru`
			on `u`.`id` = `ru`.`user_id`
		INNER JOIN `roles` `r`
			ON `r`.`id` = `ru`.`role_id`
		WHERE `u`.`username` = 'a' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:04:51 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `u`.`id`...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Users.php(27): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(74): Model_Users->getUserRoles(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_user_roles()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:04:52 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.roles_user' doesn't exist [ select `u`.`id`,
		`u`.`usename`,
		`r`.`description`
		from `users` `u`
		inner join `roles_user` `ru`
			on `u`.`id` = `ru`.`user_id`
		INNER JOIN `roles` `r`
			ON `r`.`id` = `ru`.`role_id`
		WHERE `u`.`username` = 'admin' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:04:52 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `u`.`id`...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Users.php(27): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(74): Model_Users->getUserRoles(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_user_roles()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:05:22 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'u.usename' in 'field list' [ select `u`.`id`,
		`u`.`usename`,
		`r`.`description`
		from `users` `u`
		inner join `roles_users` `ru`
			on `u`.`id` = `ru`.`user_id`
		INNER JOIN `roles` `r`
			ON `r`.`id` = `ru`.`role_id`
		WHERE `u`.`username` = 'a' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:05:22 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `u`.`id`...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Users.php(27): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(74): Model_Users->getUserRoles(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_user_roles()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:05:22 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'u.usename' in 'field list' [ select `u`.`id`,
		`u`.`usename`,
		`r`.`description`
		from `users` `u`
		inner join `roles_users` `ru`
			on `u`.`id` = `ru`.`user_id`
		INNER JOIN `roles` `r`
			ON `r`.`id` = `ru`.`role_id`
		WHERE `u`.`username` = 'a' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:05:22 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `u`.`id`...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Users.php(27): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(74): Model_Users->getUserRoles(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_user_roles()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:05:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'u.usename' in 'field list' [ select `u`.`id`,
		`u`.`usename`,
		`r`.`description`
		from `users` `u`
		inner join `roles_users` `ru`
			on `u`.`id` = `ru`.`user_id`
		INNER JOIN `roles` `r`
			ON `r`.`id` = `ru`.`role_id`
		WHERE `u`.`username` = 'admin' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-07 11:05:25 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `u`.`id`...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Users.php(27): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(74): Model_Users->getUserRoles(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_user_roles()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251