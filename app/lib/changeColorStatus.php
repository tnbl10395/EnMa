<?php 
	namespace App\lib;

	/**
	* 
	*/
	class changeColorStatus
	{
		function changeColor($status){
			$string = NULL;
			switch ($status) {
				case '0':
					$string = "label label-important";
					break;
				case '1':
					$string = "label label-info";
					break;
				case '2':
					$string = "label";
					break;
				case '3':
					$string = "label label-warning";
					break;
				case '4':
					$string = "label label-success";
					break;																			
				default:
					# code...
					break;
			}
			return $string;
		}		
	}
 ?>