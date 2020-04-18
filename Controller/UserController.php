<?php 
	require_once 'Models/Post.php';
	require_once 'Models/Category.php';
	require_once 'Models/User.php';

	class UserController{
		public $user_model;
		public function __construct(){
		 	$this->user_model = new User();
		 }

		 public function index(){
		 	$users = $this->user_model->getAll();
		 	require_once ('Views/user/list.php');
		 }

		 public function detail($id){
			$user = $this->user_model->find($id);
			require_once "Views/user/detail.php";
		}
		 public function create(){
			
			$user_model = new User();
			$users = $user_model->getAll();
			
			require_once "Views/user/add.php";
		}

		public function edit($id){
			
			$user_model = new User();
			$users = $user_model->getAll();
			
			$user = $this->user_model->find($id);
			require_once "Views/user/edit.php";
		}

		public function update(){
			$data = $_POST;
			$user_model = new User();

			$data["content"] = htmlspecialchars($data["content"]);
			$result = $user_model->update($data);
			if($result){
				setcookie("success", "update thanh cong", time()+3);
				header("Location: index.php?mod=user&act=list");
			}else{
				setcookie("fail", "update khong thanh cong", time()+3);
				header("Location: index.php?mod=user&act=edit&id=" .$data["id"]);
			}
		}

		public function destroy($id){
			$result = $this->user_model->delete($id);
			if($result){
				setcookie("success", "Xoa thanh cong", time()+3);
			}else{
				setcookie("fail", "Xoa khong thanh cong", time()+3);
			}
			header("Location: index.php?mod=user&act=list");
		}

		public function store(){
			$data = $_POST;
			$user_model = new User();

			
			$result = $user_model->add($data);
			if($result){
				setcookie("success", "Tao moi thanh cong", time()+3);
			}else{
				setcookie("fail", "tao moi khong thanh cong", time()+3);
			}

			header("Location: index.php?mod=user&act=list");
		}
	}
 ?>