<?php

require ('../private/smarty/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');


// TERNARY OPERATOR
$page = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($page) {
    case 'home' : homepage_action($smarty); break;
//    case 'contact' : contact_action(); break;
    default : page_not_found_action($smarty); break;
}


