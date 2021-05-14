<?php
// include 'security.php';
include 'includes/db_admin.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/user_bar.php'; 
?>

<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Categories products
            <button type="button" class="ml-2 btn btn-primary btn-sm" data-toggle="modal" data-target="#addnewcategory">
              Add Category 
            </button>
    </h6>
     
  <!-- Modal -->
<div class="modal fade" id="addnewcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="actions.php" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Name Category</label>
        		<input type="text" class="form-control" name="name">
        	</div>
        	<div class="form-group">
    					<div class="custom-file">
  						<input name="image" type="file" class="custom-file-input">
  						<label class="custom-file-label">Choose file</label>
  						</div>
    			</div>
        	 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="add_category" class="btn btn-primary">Save</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
	<div class="mt-1">
		<?php if(isset($_SESSION['success']) && $_SESSION['success']!=""): ?>
      <h2 class="text-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></h2>
    <?php elseif(isset($_SESSION['status']) && $_SESSION['status']!=""): ?>
      <h2 class="text-danger"><?php echo $_SESSION['status']; unset($_SESSION['status']); ?></h2>
    <?php  endif;?>
  </div>
	</div>
		<!-- Earnings (Monthly) Card Example -->
    <?php 

        $query = $link->query("SELECT * FROM categories");
        $row = $query->fetch_all(MYSQLI_ASSOC);

     ?>
     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($row as $key): ?>
    <tr>
      <td><?php echo $key['id']; ?></td>
      <td><?php echo $key['name']; ?></td>
      <td><img class="img-fluid" width="100" height="100" src="<?php echo $key['image']; ?>" alt=""></td>
      <td>
<form action="categories_edit.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $key['id'];?>">
<button type="submit" name="edit_btn" class="btn btn-sm btn-primary mr-3">Edit</button>
</form>
      </td>
      <td>
<form action="actions.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="delete_id" value="<?php echo $key['id'];?>">
<button type="submit" name="delete_btn_cat" class="btn btn-sm btn-danger">Delete</button>
</form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>
</div>
   

 <?php 
include 'includes/scripts.php';
include 'includes/footer.php';
  ?>

