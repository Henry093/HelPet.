<?php

Class report extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Reportes";
		$this->view("minima/report",$data);
	}

}