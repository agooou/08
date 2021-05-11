<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/krat_Form.class.php';
require_once $conf->root_path.'/app/krat_Result.class.php';


class CalcCtrl {
    private $msgs; 
    private $form; 
    private $result; 
    private $hide_intro; 
    
    public function __construct(){
		$this->msgs = new Messages();
		$this->form = new krat_Form();
		$this->result = new krat_Result();
		$this->hide_intro = false;      
}
 
    public function getParams(){
	$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
	$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
	$this->form->lata = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;            
    }
    
   function validate(){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($this->form->x) && isset($this->form->z) && isset($this->form->y))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $this->form->x == "") {
	$this->msgs->addMsg('Nie podano kwoty kretydu.');
         }
        if ( $this->form->y == "") {
	$this->msgs->addMsg('Nie podano liczby lat.');
        }
        if ( $this->form->z == "") {
	$this->msgs->addMsg('Nie podano oprocentowania.');
        }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (! $this->msgs->isMsgs()){
	
	    if (! is_numeric( $this->form->x )) {
                $this->msgs->addMsg('Wartość nie jest liczbą całkowitą');
            }
	
            if (! is_numeric( $this->form->y )) {
            	$this->msgs->addMsg('Wartość nie jest liczbą całkowitą');
            }	
            if (! is_numeric( $this->form->z )) {
            	$this->msgs->addMsg('Wartość nie jest liczbą całkowitą');
            }
        }
	//if (count ( $messages ) != 0) return false;
	//else return true;
        return ! $this->msgs->isMsgs();
    } 
    
    
    
    
    public function process() {
  
        $this->getParams();
        if($this->validate()){
            
            $this->form->x = floatval($this->form->x);
            $this->form->y = floatval($this->form->y);
            $this->form->z = floatval($this->form->z);

            
            $raty = $this->form->y*12; //ilosc rat
            $this->result = $this->form->x/$raty ;
            $this->result += $this->result*$this->form->z/100;
            
            
           
             
            
        }
 
        $this->generateView();
    }
//    $smarty = new Smarty();

//$smarty->assign('app_url',_APP_URL);
//$smarty->assign('root_path',_ROOT_PATH);
//$smarty->assign('page_title','Szablonowanie Smarty');
//$smarty->assign('page_description','Szablonowanie oparte na bibliotece Smarty');
//$smarty->assign('page_header','Szablony Smarty');
//
//
////pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
//$smarty->assign('x',$x);
//$smarty->assign('y',$y);
//$smarty->assign('lata',$lata);
//$smarty->assign('result',$result);
//$smarty->assign('messages',$messages);
//
//
////
//$smarty->display(_ROOT_PATH.'/app/calc.tpl');
    
 public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Obiektowość');
		$smarty->assign('page_description','Kalkulator rat oparty o obiektowość.');
		$smarty->assign('page_header','Obiekty w PHP');
				
	
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/krat.tpl');
	}
    
    
    
    
    
    
    
}
    
    
//// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
//// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.
//require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
//require_once $conf->root_path.'/lib/Messages.class.php';
//require_once $conf->root_path.'/app/krat_Form.class.php';
//require_once $conf->root_path.'/app/krat_Result.class.php';
//
//class krat_Ctrl {
//
//	private $msgs;   //wiadomości dla widoku
//	private $form;   //dane formularza (do obliczeń i dla widoku)
//	private $result; //inne dane dla widoku
//
//
//	public function __construct(){
//		//stworzenie potrzebnych obiektów
//		$this->msgs = new Messages();
//		$this->form = new krat_Form();
//		$this->result = new krat_Result();
//	}
//	
//
//	public function getParams(){
//		$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
//		$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
//		$this->form->z = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;
//		$this->form->op = isset($_REQUEST ['op']) ? $_REQUEST ['op'] : null;
//	}
//	
//
//	public function validate() {
//		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ($this->form->z) && isset ( $this->form->op ))) {
//			return false; 
//		}
//		
//		if ($this->form->x == "") {
//			$this->msgs->addError('Nie podano kwoty');
//		}
//		if ($this->form->y == "") {
//			$this->msgs->addError('Nie podano liczby lat');
//		}
//		if ($this->form->y == "") {
//			$this->msgs->addError('Nie podano liczby lat');
//		}
//		
//
//		if (! $this->msgs->isError()) {
//			
//			if (! is_numeric ( $this->form->x )) {
//				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
//			}			
//			if (! is_numeric ( $this->form->y )) {
//				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
//			}
//			if (! is_numeric ( $this->form->z )) {
//				$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
//			}
//		}		
//		return ! $this->msgs->isError();
//	}
//	
//
//	public function process(){
//
//		$this->getparams();
//		
//		if ($this->validate()) {
//			$this->form->x = intval($this->form->x);
//			$this->form->y = intval($this->form->y);
//			$this->form->z = intval($this->form->z);
//			$this->msgs->addInfo('Parametry poprawne.');
//				
//			//wykonanie operacji
//			switch ($this->form->op) {
//				case 'Rata' :
//					$this->result->result = ($this->form->x / ($this->form->y * 12)) + ((($this->form->x) / ($this->form->y * 12)) * ($this->form->z * 0.01));
//					$this->result->op_name = 'Rata:';
//					break;
//			}
//			
//			$this->msgs->addInfo('Wykonano obliczenia.');
//		}
//		
//		$this->generateView();
//	}
//
//	public function generateView(){
//		global $conf;
//		
//		$smarty = new Smarty();
//		$smarty->assign('conf',$conf);
//		
//		$smarty->assign('page_title','Przykład 05');
//		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
//		$smarty->assign('page_header','Obiekty w PHP');
//				
//		$smarty->assign('msgs',$this->msgs);
//		$smarty->assign('form',$this->form);
//		$smarty->assign('res',$this->result);
//		
//		$smarty->display($conf->root_path.'/app/kratview.html');
//	}
//
//}
//
