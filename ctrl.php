<?php
require_once dirname (__FILE__).'/config.php';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include_once $conf->root_path.'/app/krat_Ctrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new krat_Ctrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
		include_once $conf->root_path.'/app/krat_Ctrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new krat_Ctrl ();
		$ctrl->process ();
	break;
}