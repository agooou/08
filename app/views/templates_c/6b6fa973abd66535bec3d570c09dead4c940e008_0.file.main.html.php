<?php
/* Smarty version 3.1.39, created on 2021-04-27 04:26:59
  from 'D:\xampp\htdocs\05_obiektowe\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60877673044b18_03435040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b6fa973abd66535bec3d570c09dead4c940e008' => 
    array (
      0 => 'D:\\xampp\\htdocs\\05_obiektowe\\templates\\main.html',
      1 => 1619489558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60877673044b18_03435040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
      <!--  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main-grid.css">
   
        <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/layouts/marketing.css">
    <!--<![endif]-->

    <!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">

	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"><?php echo '</script'; ?>
>
        <style>
            body{
                      background-image: url("<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/male_kotki1.jpg");// repeating-linear-gradient(red, yellow 10%, green 20%);//url("../../images/male_kotki.jpg");
                      background-size: cover;
                      background-position: center;
                     //background-color: red;
                     
            }
        </style>

</head>
<body>

<!--<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>
            <li><a href="#app_content">Idź do formularza</a></li>
        </ul>
    </div>
</div>
-->
<section class=" style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
                        <div style="padding: 0px">                                
    <div style="font-weight: 900; width:48%; padding: 5em 1em 8em 10em; float: left; display: inline-block;">
<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
        
        <p class="splash-subhead">
             <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

        </p>
        <p>
            <!--
            <a href="#app_content" class="pure-button pure-button-primary">Idź do formularza</a>
            -->
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178972242960877673042867_11727091', 'content');
?>


    </div>

</div>
    </div>
                        </div>
</section>
                            
    <div class="footer l-box is-center">
		<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1230200660877673043ae4_79534071', 'footer');
?>

		</p>
                <p>Kalkulator rat oparty na obiektowości.
                </p>
    </div>




</body>
</html><?php }
/* {block 'content'} */
class Block_178972242960877673042867_11727091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_178972242960877673042867_11727091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1230200660877673043ae4_79534071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1230200660877673043ae4_79534071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
