<?php
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator rat 📱</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/noscript.css" /></noscript>
                <style>
                  body{
                      //background-color: #000;
                      background-image: url("<?php print(_APP_ROOT); ?>/images/male_kotki1.jpg");// repeating-linear-gradient(red, yellow 10%, green 20%);//url("../../images/male_kotki.jpg");
                      background-size: cover;
                      background-position: center;
                     //background-color: red;
                  }
                      input[type=text]{margin-top: -10px;
                    width: 15em}
                </style>
</head>
<body scroll="no" style="overflow: hidden">
    <?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>


             <section class=" style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
                        <div style="padding: 0px">                                
    <div style="font-weight: 900; width:100%; padding: 4em 1em 3em 10em; float: left; display: inline-block;">

<form action="<?php print(_APP_ROOT); ?>/app/krat_Ctrl.php" method="post" class="pure-form pure-form-stacked">
	<!--<legend>Kalkulator rat</legend>-->
        <fieldset> 
	<label for="id_x">Kwota zaciągniętego kredytu: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset ($x)) print($x); ?>" /><br />
	<label for="id_y">Liczba lat: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset ($x)) print($y); ?>" /><br />
	<label for="id_z">Oprocentowanie: </label>
	<input id="id_z" type="text" name="z" value="<?php if (isset ($x)) print($z); ?>" /><br />
        <input type="submit" style="background-color: #008080; color: #ffffff!important" value="Oblicz ratę" class="pure-button pure-button-primary" /></fieldset>

        <?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 3em; border-radius: 2em; background-color: #f88; color: #000000; letter-spacing: 0.075em;  line-height: 1.4em; line; float: left; clear: left;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="font-weight: 900; margin-top: 1em; padding: 1em; border-radius: 2em; background-color: #2e8b57; color: #ffffff; float: left; clear: left;">
    <?php echo 'Wynik: '.$result; ?>
</div>
        </div>
<?php } ?>
</form>	
        </div>
                      
                        <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
                        <script src="assets/js/main.js"></script>
    </section>
    
    <?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
    
</body>
    
    
</html>