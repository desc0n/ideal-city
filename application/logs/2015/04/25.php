<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-25 08:22:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: admin_menu ~ APPPATH\views\admin_template.php [ 203 ] in Z:\home\master-rus.lan\www\application\views\admin_template.php:203
2015-04-25 08:22:05 --- DEBUG: #0 Z:\home\master-rus.lan\www\application\views\admin_template.php(203): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\master-...', 203, Array)
#1 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\master-rus.lan\www\application\classes\Controller\Admin.php(28): Kohana_Response->body(Object(View))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\master-rus.lan\www\application\views\admin_template.php:203
2015-04-25 08:25:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Product' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-04-25 08:25:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-25 08:49:01 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-25 08:49:01 --- DEBUG: #0 Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\master-rus.lan\www\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\master-rus.lan\www\application\classes\Controller\Admin.php(71): Kohana_ORM->add('roles', Object(Model_Role))
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-25 13:42:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Word::addWord() ~ APPPATH\classes\Controller\Admin.php [ 105 ] in file:line
2015-04-25 13:42:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-25 14:26:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Word::getWord() ~ APPPATH\classes\Controller\Word.php [ 11 ] in file:line
2015-04-25 14:26:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-25 15:12:31 --- CRITICAL: Database_Exception [ 1146 ]: Table 'xnsbpawb_main.description' doesn't exist [ select `w`.*,
 			(select `d`.`value` from `description` `d` where `d`.`word_id` = `w`.`id` limit 0,1) as `description`,
 			(select `v`.`value` from `video` `v` where `v`.`word_id` = `w`.`id` limit 0,1) as `video`
 			from `words` `w`
 			where `w`.`id` = '1'
 			LIMIT 0,1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-25 15:12:31 --- DEBUG: #0 Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `w`.*,??...', false, Array)
#1 Z:\home\master-rus.lan\www\application\classes\Model\Word.php(32): Kohana_Database_Query->execute()
#2 Z:\home\master-rus.lan\www\application\classes\Controller\Word.php(11): Model_Word->getWords(Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Word->action_description()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Word))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php:251