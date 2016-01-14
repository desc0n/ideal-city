<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-18 16:39:08 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and `n`.`status_id` = 1 limit 0, 25' at line 1 [ select `n`.* from `notice` `n` and `n`.`status_id` = 1 limit 0, 25 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-18 16:39:08 --- DEBUG: #0 Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `n`.* fr...', false, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Notice.php(23): Kohana_Database_Query->execute()
#2 Z:\home\morya.lan\www\application\classes\Controller\Category.php(12): Model_Notice->getNotice(Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Category->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-18 16:40:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\category.php [ 5 ] in file:line
2015-05-18 16:40:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 16:50:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\index.php [ 4 ] in Z:\home\morya.lan\www\application\views\index.php:4
2015-05-18 16:50:48 --- DEBUG: #0 Z:\home\morya.lan\www\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\morya.l...', 4, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#2 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\morya.lan\www\application\views\template.php(49): Kohana_View->__toString()
#5 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#6 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#7 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\morya.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\morya.lan\www\application\classes\Controller\Index.php(11): Kohana_Response->body(Object(View))
#10 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#13 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\morya.lan\www\application\views\index.php:4