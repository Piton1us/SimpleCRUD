<div class="container ">
   <div class="card">
      <div class="card-header">
         <?php if(!$user['id']): ?>
            <h3>Create User: <b><?php echo $user['name'] ?></b></h3>
         <?php else: ?>
            <h3>Update User: <b><?php echo $user['name'] ?></b></h3>
         <?php endif; ?>
      </div>
      <div class="card-body">
         <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group m-2">
               <label>Name</label>
               <input type="text" name="name" value="<?php echo $user['name'] ?>" class="form-control">
            </div>
            <div class="form-group m-2">
               <label>Username</label>
               <input type="text" name="username" value="<?php echo $user['username'] ?>" class="form-control">
            </div>
            <div class="form-group m-2">
               <label>Email</label>
               <input type="email" name="email" value="<?php echo $user['email'] ?>" class="form-control">
            </div>
            <div class="form-group m-2">
               <label>Phone</label>
               <input type="phone" name="phone" value="<?php echo $user['phone'] ?>" class="form-control">
            </div>
            <div class="form-group m-2">
               <label>Website</label>
               <input type="text" name="website" value="<?php echo $user['website'] ?>" class="form-control">
            </div>
            <div class="form-group m-2">
               <label>Image</label>
               <input type="file" name="picture" class="form-control-file">
            </div>
            <button class="btn btn-success m-2">Submit</button>

         </form>
      </div>
   </div>
</div>