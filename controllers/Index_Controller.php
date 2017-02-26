<?php 

/**
* Controladores
*/
class Index_Controller extends Controller
{

	function __construct()
	{
		parent:: __construct();
	}

	public function index($param = null)
	{
		if($param == null)
		{
			$param = "Zeustring Bienvenido a casa";
		}
		echo "hola ".$param;
	}
}
