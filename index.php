<?php 
	require_once("classes/Crud.php");
	require_once("admin/classes/Crud.php");

	use Admin\Classes\Crud as AdminCrud;
	use Classes\Crud;

	$crud = new Crud;
	echo $crud->imprimir();

	echo "<br>----<br>";


	$crud = new AdminCrud;
	echo $crud->imprimir();

	echo "<br>----<br>";


	/*$crud = new Classes\Crud;
	echo $crud->imprimir();


	$crud = new Admin\Classes\Crud;
	echo $crud->imprimir();	
	*/
?>