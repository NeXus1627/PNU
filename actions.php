<?php
include 'includes/db_admin.php';


if (isset($_POST['add_labexcel'])) {
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$course = $_POST['course'];
	$grupa = $_POST['grupa'];
	$lab_num = $_POST['lab_num'];
	$lab = $_FILES['image']['name'];
	$upload = "excel/".$lab;
	move_uploaded_file($_FILES['image']['tmp_name'],$upload);
	//var_dump($name);
	/*var_dump($lastname);
	var_dump($course);
	var_dump($grupa);
	var_dump($lab_num);
	var_dump($upload);*/

	if($course == "course_1"){
	$query = $link->query("INSERT INTO course_1(name,lastname,grupa,lab_num,lab) VALUES('$name','$lastname','$grupa','$lab_num','$upload')");
	}
	elseif($course == "course_2"){
		$query = $link->query("INSERT INTO course_2(name,lastname,grupa,lab_num,lab) VALUES('$name','$lastname','$grupa','$lab_num','$upload')");
	}
	elseif($course == "course_3"){
		$query = $link->query("INSERT INTO course_3(name,lastname,grupa,lab_num,lab) VALUES('$name','$lastname','$grupa','$lab_num','$upload')");
	}
	elseif($course == "course_4"){
		$query = $link->query("INSERT INTO course_4(name,lastname,grupa,lab_num,lab) VALUES('$name','$lastname','$grupa','$lab_num','$upload')");
	}


	if($query){
	header('Location:index.php');
	}

	}


	if (isset($_POST['add_labword'])) {
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$course = $_POST['course'];
	$grupa = $_POST['grupa'];
	$lab_num = $_POST['lab_num'];
	$lab = $_FILES['image']['name'];
	$upload = "word/".$lab;
	move_uploaded_file($_FILES['image']['tmp_name'],$upload);
	 // var_dump($name);
	 // var_dump($lastname);
	 // var_dump($course);
     // var_dump($grupa);
	 // var_dump($lab_num);
	 // var_dump($upload);

	if($course == "course_1"){
	$query_1 = $link1->query("INSERT INTO course_1(name,lastname,grupa,lab_num,lab) VALUES('$name','$lastname','$grupa','$lab_num','$upload')");
	}
	elseif($course == "course_2"){
		$query_1 = $link1->query("INSERT INTO course_2(name,lastname,grupa,lab_num,lab) VALUES('$name','$lastname','$grupa','$lab_num','$upload')");
	}
	elseif($course == "course_3"){
		$query_1 = $link1->query("INSERT INTO course_3(name,lastname,grupa,lab_num,lab) VALUES('$name','$lastname','$grupa','$lab_num','$upload')");
	}
	elseif($course == "course_4"){
		$query_1 = $link1->query("INSERT INTO course_4(name,lastname,grupa,lab_num,lab) VALUES('$name','$lastname','$grupa','$lab_num','$upload')");
	}


	if($query_1){
	header('Location:index.php');
	}

	}
 ?>
