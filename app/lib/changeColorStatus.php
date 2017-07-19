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
				case 'New':
					$string = "label label-important";
					break;
				case '1':
				case 'Assigned':
					$string = "label label-info";
					break;
				case '2':
					$string = "label";
					break;
				case '3':
				case 'In progress':
					$string = "label label-warning";
					break;
				case '4':
				case 'Resolved':
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