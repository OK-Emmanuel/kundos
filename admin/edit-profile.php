<?php 
include('../includes/db.php');
// GEt the updated info from user
if (isset($_GET['update'])) {
    $newName = $_GET['fullname'];
    $newEmail = $_GET['email'];
    $newPhone = $_GET['phone'];
    $newMessage = $_GET['message'];
    $person = $_GET['userID'];

    // Update the user database
    $sql = "UPDATE agency SET
    contact_name = '$newName',
    contact_email = '$newEmail',
    contact_phone = '$newPhone',
    contact_message = '$newMessage'
    WHERE contact_id = '$person'";

    // Query Database connection and return a response
    $sql2 = mysqli_query($connection, $sql);
    if ($sql2) {
       echo "<script>alert('User Updated Successfully')</script>";
       echo "<script>window.location.href='dashboard.php'</script>";
    }
}


include('../includes/db.php');
require('admin_includes/header.php');
?>

<div class="container mt-3">
    <h3 class="mb-2">Edit Profile <i class="fas fa-edit"></i></h3>
            <?php 
            if (isset($_GET['edit'])) {
                $editId = $_GET['edit'];
                $sql = "SELECT * FROM agency WHERE contact_id = '$editId'";
                $sql2 = mysqli_query($connection, $sql);
                if (mysqli_num_rows($sql2) > 0) {

                    while ($rows = mysqli_fetch_assoc($sql2)) {
                    $name = $rows['contact_name'];
                    $phone = $rows['contact_phone'];
                    $email = $rows['contact_email'];
                    $message = $rows['contact_message'];
                    $userID = $rows['contact_id'];
                 
            ?>
            <form action="edit-profile.php" method="GET" class="form">
                    <input type="hidden" name="userID" value="<?= $userID; ?>">
                    <input type="text" value="<?= $name ?>" name="fullname" placeholder="Full name"  class="form-control mt-3" />
                    <input type="email" value="<?= $email ?>" name="email" placeholder="Your email" class="form-control mt-3" />
                    <input type="number" value="<?= $phone ?>" name="phone" placeholder="Phone number" class="form-control mt-3" />
                    <textarea name="message" class="form-control mt-3" placeholder="Type your message here" required=""><?= $message ?></textarea>
                    <button class="btn w-100 btn-primary mt-3" type="submit" name="update">Update Details</button>
            </form>
            <?php
                    }
                }
            } ?>
            <!-- <div style="display: flex; justify-content: center; align-items: center; height: 60vh">
            <h1 class="text-center text-danger"> No profile selected!</h1>
            </div>  -->
                
            
            
        </div>


<?php 
require('admin_includes/footer.php');
?>