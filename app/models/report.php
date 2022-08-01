<?php

Class report
{

	function upload($POST)
	{
		$DB = new Database();
		

				//save to db
				$arr['name'] = $POST['name'];
				$arr['email'] = $POST['email'];
				$arr['message'] = $POST['message']; 
				$arr['date'] = date("Y-m-d H:i:s");

				$query = "INSERT INTO contact (name,email,message,date) VALUES (:name,:email,:message,:date)";
				$data = $DB->write($query,$arr);
				if($data)
				{
					
					header("Location:". ROOT . "home");
					die;
				}
	}
}
