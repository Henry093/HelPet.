<?php

Class Contact extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Contactos";
		$this->view("minima/contact",$data);
	}

}