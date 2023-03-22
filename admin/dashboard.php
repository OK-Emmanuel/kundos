<?php  include('../includes/db.php')?>
<?php 
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    echo $delete;
    $sql = "DELETE FROM agency WHERE contact_id = '$delete' ";
    $sql2 = mysqli_query($connection, $sql);
    if($sql2){
        echo "<script>alert('User Deleted Successfully')</script>";
        echo "<script>window.location.href='dashboard.php'</script>";
    }
}

?>
<?php require('admin_includes/header.php'); ?>
                    <div class="container-fluid ">
                        <h1 class="mt-4">All Messages</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Messages</li>
                        </ol>                        
                    </div>
                    <div class="container">
                    <table class="table table-bordered table-striped">
                        <thead class="thead">
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th class="text-danger">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <?php 
                            $serialno = 1;
                            $sql = "SELECT * FROM agency";
                            $sql2 = mysqli_query($connection, $sql);
                            if(mysqli_num_rows($sql2) > 0){
                                while ($rows = mysqli_fetch_assoc($sql2)) {
                                    $id= $rows['contact_id'];
                                    $name = $rows['contact_name'];
                                    $message = $rows['contact_message'];
                                    $mail = $rows['contact_email'];
                            ?>
                            <tr>
                                <td><?= $serialno++ ?></td>
                                <td><?= $name ?></td>
                                <td><?= $message ?></td>
                                <td><?= $mail ?></td>

                                <!-- Delete Button -->
                                <td title="<?= $id ?>"><a href="dashboard.php?delete=<?= $id ?>">
                                <button  name="delete" class="fas fa-trash text-danger"></button></a></td>
                                
                                <td title="<?= $id ?>"><a href="edit-profile.php?edit=<?= $id ?>">
                                <button class="fas fa-edit text-primary"></button></a></td>
                            </tr>
                            <?php }
                            }
                            ?>
                        </tbody>
                    </table>
                    </div>
                           
                        
                </main>
            <?php include('admin_includes/footer.php'); ?>
