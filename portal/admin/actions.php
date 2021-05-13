<?php
//include 'security.php';
include 'includes/db_admin.php';


// Оновлення

if (isset($_POST['update_btn'])) {
	$id = $_POST['edit_id'];
	$username = $_POST['edit_username'];
	$password = $_POST['edit_password'];
	$usertype = $_POST['edit_usertype'];

	$query = $link1->query("UPDATE admins SET username = '$username', password = '$password', usertype = '$usertype' WHERE id = '$id'");

	if ($query) {
		$_SESSION['success'] = 'Your Data is updated';
		header('Location: register.php');
	}
	else {
		$_SESSION['status'] = 'Your Data is not updated';
		header('Location: register.php');
	}

}

// Видалення
if (isset($_POST['delete_btn'])) {
	$id = $_POST['delete_id'];
	$query = $link1->query("DELETE FROM admins WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Data is deleted';
		header('Location: register.php');
	}
	else {
		$_SESSION['status'] = 'Your Data is not deleted';
		header('Location: register.php');
	}
}



//Авторизація

if (isset($_POST['login_btn'])) {
	$email_login = $_POST['email'];
	$password_login = $_POST['password'];

	$query = $link1->query("SELECT * FROM admins WHERE username = '$email_login' AND password = '$password_login'");
	$auth = $query->fetch_assoc();
		if ($auth['usertype'] == 'admin') {
			$_SESSION['username'] = $email_login;
			header('Location: admin_index.php');
		}
		elseif ($auth['usertype'] == 'user') {
			header('Location:../index.php');
		}
		else {
			$_SESSION['status'] = 'Email or password is invalible';
			header('Location: login.php');
		}
}





// Категорії оновлення

if (isset($_POST['update_btn_cat'])) {
	$id = $_POST['edit_id'];
	$mark = $_POST['mark'];
	var_dump($id);

	
	$query = $link1->query("UPDATE course_1 SET mark = '$mark', WHERE id = '$id'");

	// if ($query) {
	// 	$_SESSION['success'] = 'Category is updated';
	// 	header('Location: word.php');
	// 	}
	// 	else {
	// 		$_SESSION['status'] = 'Category is not updated';
	// 	header('Location: word.php');
	// 	}

}

if (isset($_POST['delete_btn_cat'])) {
	$id = $_POST['delete_id'];
	$photo = $link->query("SELECT image FROM course_1 WHERE id = '$id'");
	$result = $photo->fetch_assoc();
	$imagepath = $result['image'];
	unlink($imagepath);
	$query = $link->query("DELETE FROM categories WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Category is deleted';
		header('Location: categories.php');
	}
	else {
		$_SESSION['status'] = 'Your Category is not deleted';
		header('Location: categories.php');
	}
}




 ?>