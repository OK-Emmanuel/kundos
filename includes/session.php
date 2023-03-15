<?php
// Start session for each user


// Style the session output
 
if (isset($_SESSION['error'])) {?>
	<div class="alert alert-danger alert-dismissible">
            <i class="fas fa-triangle-exclamation"></i> <?= $_SESSION['error']?>
            <h1>Hello World</h1>
            <button class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	
	
<?php 
unset($_SESSION['error']);
}
elseif (isset($_SESSION['success'])) {?>
	<div class="alert alert-success alert-dismissible">
            <i class="fas fa-check"></i> <?= $_SESSION['success']?>
            <button class="btn-close" data-bs-dismiss="alert"></button>
    </div> 
	
<?php 
unset($_SESSION['success']);
} 
?>

