<?php include('inc/sidenavbar.php');?>
<?php include('inc/navbar.php');?> 
<?php

    if(isset($_GET['updateuser'])){
        $id = $_GET['updateuser'];
        $getUpdateUser = $user->getUserIdData($id);
        $viewUpdateUser = $getUpdateUser->fetch_assoc();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userUpdate = $user->updateUser($_POST, $_FILES, $id);
    }

?>
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="container">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Profile</h4>
                        <?php
                            if(isset($userUpdate)){
                                echo $userUpdate;
                            }
                        ?>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                        <img class="update_user_img" class="mb-2" src="./<?php echo $viewUpdateUser['adminImage'];?>" alt=""><br>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="feedback1">New Image</label>
                                        <input type="file" id="feedback1" class="form-control" value="" name="image">
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="feedback1">Name</label>
                                            <input type="text" id="feedback1" class="form-control" value="<?php echo $viewUpdateUser['adminName'];?>" name="firstName">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="feedback4">Last Name</label>
                                            <input type="text" id="feedback4" class="form-control" value="<?php echo $viewUpdateUser['adminLastName'];?>" name="lastName">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="feedback4">User Name</label>
                                            <input type="text" id="feedback4" class="form-control" value="<?php echo $viewUpdateUser['adminUser'];?>" name="userName">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="feedback2">Email</label>
                                            <input type="email" id="feedback2" class="form-control" value="<?php echo $viewUpdateUser['adminEmail'];?>" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                        <label for="feedback2">Phone</label>
                                        <input type="number" id="feedback2" class="form-control" value="<?php echo $viewUpdateUser['phoneNumber'];?>" name="phoneNumber">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <input type="submit" value="Update" name="submit" class="btn btn-primary mr-1">
                                        <a href="listuser.php" class="btn btn-light-light block">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic multiple Column Form section end -->
<?php include('inc/footer.php');?>