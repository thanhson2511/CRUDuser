<?php 
	$mod = $_GET['mod'];
	$act = $_GET['act'];

	switch($mod){
		
		case 'user':
			require 'Controller/UserController.php';
			$user_controller = new UserController();
			switch($act){
				case 'list':
					$user_controller->index();
					break;
				case 'add':
					$user_controller->create();
					break;
				case 'add-process':
					$user_controller->store();
					break;
				case 'detail':
					$id = $_GET['id'];
					$user_controller->detail($id);
				case 'edit':
					$id = $_GET['id'];
					$user_controller->edit($id);
					break;
				case 'edit-process':
					$user_controller->update();
				case 'delete':
					$id = $_GET['id'];
					$user_controller->destroy($id);

				default;
					die('Action post not found');		
			}

			break;
		default:
			die("Mod not found");
	
	}
 ?>