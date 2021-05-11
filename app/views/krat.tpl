{extends file=$conf->root_path|cat:"/templates/main.html"}

{block name=footer}<br/><br/><br/>{/block}

{block name=content}

<h2 class="content-head is-center"><br/>Kalkulator rat</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$conf->app_url}/app/krat.php" method="post">
		<fieldset>

			<label for="x">Kwota zaciągniętego kredytu:</label>
			<input id="x" type="text" placeholder="wartość x" name="x" value="{$form->x}">

					
			<label for="y">Liczba lat:</label>
			<input id="y" type="text" placeholder="wartość y" name="y" value="{$form->y}">
                        
                        <label for="z">Oprocentowanie:</label>
			<input id="z" type="text" placeholder="wartość z" name="z" value="{$form->z}">
                        

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<h4>Wynik</h4>
	<p class="res">
	{$result}
	</p>
{/if}

</div>
</div>

{/block}