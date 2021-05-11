<?php
require_once dirname(__FILE__).'/../config.php';

//załaduj kontroler
require_once $conf->root_path.'/app/krat_Ctrl.class.php';

//utwórz obiekt i użyj
$ctrl = new CalcCtrl();
$ctrl->process();
//require_once dirname(__FILE__).'/../config.php';
//
//require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
//
//function getParams(&$form){
//$form['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
//$form['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
//$form['z'] = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
//}
//
//function validate(&$form,&$infos,&$hide_intro,&$msgs){
//	// sprawdzenie, czy parametry zostały przekazane
//	if ( ! (isset($form['x']) && isset($form['y']) && isset($form['z']))) {
//		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
//		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
//		return false;
//	}
//        
//        
//        
//$hide_intro = true;
//
//	$infos [] = 'Przekazano parametry.';
//
//	// sprawdzenie, czy potrzebne wartości zostały przekazane
//	if ( $form['x'] == "") $msgs [] = 'Nie podano kwoty';
//	if ( $form['y'] == "") $msgs [] = 'Nie podano liczby lat';
//        if ( $form['z'] == "") $msgs [] = 'Nie podano oprocentowania';
//	
//	//nie ma sensu walidować dalej gdy brak parametrów
//	if ( count($msgs)==0 ) {
//		// sprawdzenie, czy $x i $y są liczbami całkowitymi
//		if (! is_numeric( $form['x'] )) $msgs [] = 'Pierwsza wartość nie jest liczbą całkowitą';
//		if (! is_numeric( $form['y'] )) $msgs [] = 'Druga wartość nie jest liczbą całkowitą';
//                if (! is_numeric( $form['z'] )) $msgs [] = 'Trzecia wartość nie jest liczbą całkowitą';
//	}
//	
//	if (count($msgs)>0) return false;
//	else return true;
//}
//
///*
//if ( $x == "") {
//	$messages [] = 'Nie podano kwoty';
//}
//if ( $y == "") {
//	$messages [] = 'Nie podano liczby lat';
//}
//if ($z == "") {
//	$messages [] = 'Nie podano oprocentowania';
//}
//if (empty( $messages )) {
//	
//	if (! is_numeric( $x )) {
//		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
//	}
//	if (! is_numeric( $y )) {
//		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
//	}
//	if (! is_numeric( $z )) {
//		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
//	}
//        if (count ( $messages ) != 0) return false;
//	else return true;
//}
//}
// */
/////////////////////////////////////////////
///*
//function process(&$x,&$y,&$z,&$messages,&$result){
//	//global $role;
//	
//	//wykonanie operacji
//	if (empty ( $messages )) { // gdy brak błędów
//
//	$x = floatval($x);
//	$y = floatval($y);
//	$z = floatval($z);
//	
//	$result = ($x / ($y*12)) + (($x / ($y*12))*($z*0.01));
//            }
//}
//
//
////definicja zmiennych kontrolera
//$x = null;
//$y = null;
//$z = null;
//$result = null;
//$messages = array();
//*/
//
//// wykonaj obliczenia
//function process(&$form,&$infos,&$msgs,&$result){
//	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
//	
//	//konwersja parametrów na int
//	$form['x'] = floatval($form['x']);
//	$form['y'] = floatval($form['y']);
//        $form['z'] = floatval($form['z']);
//	
//	//wykonanie operacji
//        
//        $result = ($form['x'] / (($form['y'])*12)) + (($form['x'] / (($form['y'])*12))*(($form['z'])*0.01));
//
//}
//
////inicjacja zmiennych
//$form = null;
//$infos = array();
//$msgs = array();
//$messages = array();
//$result = null;
//$hide_intro = false;
//
////pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
//getParams($form);
//if ( validate($form,$infos,$hide_intro,$msgs) ) { // gdy brak błędów
//	process($form,$infos,$result,$msgs);
//}
//
//
//// 
//$smarty = new Smarty();
//
//$smarty->assign('app_url',_APP_URL);
//$smarty->assign('root_path',_ROOT_PATH);
//$smarty->assign('page_title',' Kalkulator rat ');
//$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
//$smarty->assign('page_header','Szablony Smarty');
//
//$smarty->assign('hide_intro',$hide_intro);
//
////pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
//$smarty->assign('form',$form);
//$smarty->assign('result',$result);
//$smarty->assign('messages',$msgs);
//$smarty->assign('infos',$infos);
//
////
//$smarty->display(_ROOT_PATH.'/app/krat.tpl');