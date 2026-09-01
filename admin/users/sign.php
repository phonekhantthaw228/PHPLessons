<?php 

include '../dbconnect.php';
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $image='profilePicture.jpg';
    $password=$_POST['password'];
    $email = $_POST['email'];
    $status = $_POST['role'];

    $sql ="INSERT INTO users (name, email, password, role) VALUES (:name, :email,:password, :role)";
    $stmt =$conn-> prepare($sql);
    $stmt -> bindParam(':name', $name);
    $stmt -> bindParam(':email', $email);
    $stmt -> bindParam(':password', $password);
    $stmt -> bindParam(':role', $status);

    $stmt->execute();

    header ("location: user.php");


}
include '../layouts/nav_sidebar.php';

?>

 <div class="container-fluid px-4">
            
            <div class="mt-3">
                <h3 class="mt-4 d-inline">Sign up To explore</h3>
                <a href="posts.php" class="btn btn-danger float-end">Cancel</a>
            </div>
            
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="posts.php">Sign Up</a></li>
                <li class="breadcrumb-item active">Register</li>

            </ol>
            
            <div class="card mb-4">
                <div class="card-header text-center">
                    <i class="fa-solid fa-user fa-2x"></i>
                    <span class="fs-1 ms-2">Register</span>
                </div>
                <div class="card-body">
                    <form action="<?php htmlspecialchars($_SERVER ['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Active Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="role">Status</label>
                            <select class="form-select" id="category_id" name="role" aria-label="Default select example">
                                <option selected>Choose....</option>
                                
                                    <option value="">Admin</option>
                                    <option value="">User</option>
                                    <option value="">Author</option>

                                
                            </select>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="image" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div> -->
                        <div class="mb-3">
  <label for="profilePicture" class="form-label text-secondary fw-semibold">Profile Picture</label>
  <div class="input-group">
    <span class="input-group-text bg-light text-secondary">
      <i class="bi bi-image"></i> <!-- Replace with your font icon -->
    </span>
    <input type="file" class="form-control" id="profilePicture" name="profilePicture">
  </div>
</div>

                      
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php
include '../layouts/footer.php';
?>