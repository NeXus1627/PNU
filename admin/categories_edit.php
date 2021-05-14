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
    <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
  </div>

  <div class="card-body">
<?php 

	if (isset($_POST['edit_btn'])) {
		$id = $_POST['edit_id'];
		$query = $link->query("SELECT * FROM categories WHERE id = '$id'");
        $row = $query->fetch_all(MYSQLI_ASSOC);
        foreach ($row as $key) {
        	$id = $key['id'];
        	$name = $key['name'];
        	$image = $key['image'];	
        }
	}

 ?>
  <div class="col-3">
    	<form action="actions.php" method="post" enctype="multipart/form-data">
      	<input type="hidden" name="edit_id" value="<?php echo $key['id'];?>">
  	   <div class="form-group">
                <label>Category name</label>
                <input type="text" name="edit_name" class="form-control" placeholder="Enter Username" value="<?php echo $key['name'];?>">
        </div>
        <div class="form-group">
    		<div class="custom-file">
  				<input name="image" type="file" class="custom-file-input">
  				<label class="custom-file-label">Choose file</label>
  			</div>
    	</div>
        <div class="form-group">
        	<input type="hidden" name="oldimage" value="<?php echo $key['image'];?>">
        	<img class="img-fluid" src="<?php echo $key['image'];?>" alt="">
        </div>
             <div class="form-group">
                <a class="btn btn-danger" href="categories.php">Cancel</a>
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