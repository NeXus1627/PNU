<?php
include 'security.php';
include 'includes/db_admin.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/user_bar.php'; 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit</h6>
  </div>

  <div class="card-body">
<?php 

	if (isset($_POST['edit_btn'])){
		$id = $_POST['edit_id'];
		$query = $linkq1->query("SELECT * FROM course_1 WHERE id = '$id'");
        $row = $query->fetch_all(MYSQLI_ASSOC);
        foreach ($row as $key){
        	$id = $key['id'];
          $mark = $key['mark'];

         
        }
      }
	

 ?>
  <div class="col-3">
    	<form action="actions.php" method="post" enctype="multipart/form-data">
      	<input type="hidden" name="edit_id" value="<?php echo $key['id'];?>">
  	   <div class="form-group">
                <input type="text" name="mark" class="form-control" placeholder="Enter Mark" value="<?php echo $key['username'];?>">
        </div>
             <div class="form-group">
                <a class="btn btn-danger" href="word.php">Cancel</a>
                <button name="update_btn_cat" class="btn btn-info" type="submit">Update</button>
            </div>
          </form>
  </div>

    </div>
  </div>
</div>

</div>

<!-- /.container-fluid -->

 <?php 
include 'includes/scripts.php';
include 'includes/footer.php';
  ?>