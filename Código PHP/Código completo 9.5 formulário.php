<?php

	if($_REQUEST["action"] == "save")
	{
		$formValid = TRUE;
	}
	$tamanho_nome = strlen($_POST["CAMPO_NOME"]);
	if($tamanho_nome < 5 || $tamanho_nome > 64)
	{
		echo("O Campo 'Nome' deve ter entre 5 e 64 caracteres.".$tamanho_nome);
		$formValid = FALSE;
	}
	$idade = (int)$_POST["CAMPO_IDADE"];
	if(is_NaN($idade) || $idade < 4 || $idade > 120)
	{
		echo("O Campo 'Idade' deve ter preenchido corretamente.");
		$formValid = FALSE;
	}
	
	$email = strlen($_POST["CAMPO_EMAIL"]);
	$regex = 
	if($tamanho_nome < 5 || $tamanho_nome > 64)
	{
		echo("O Campo 'Nome' deve ter entre 5 e 64 caracteres.".$tamanho_nome);
		$formValid = FALSE;
	}
?>