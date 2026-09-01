<?php

include '../layouts/nav_sidebar.php';
include '../dbconnect.php';
$sql = "SELECT * FROM users";
$stmt= $conn -> prepare($sql);
$stmt -> execute();
// var_dump ($stmt);
$users = $stmt -> fetchAll();
// var_dump ($users);

?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Users' Info</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profiles</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th> Sr.No</th>
                                            <th >Name</th>
                                            <th>email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th> Sr.No</th>
                                            <th >Name</th>
                                            <th>email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                         
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $SerialNumber = 1;
                                    foreach($users as $user){
                                        ?>
                                        <tr>
                                            <td><?= $SerialNumber++;?></td>
                                            <td><?= $user['name'];?></td>
                                            <td><?= $user['email'];?></td>
                                            <td><?= $user['role'];?></td>
                                            <td><button class="btn btn-primary">Logout</button>
                                                <button class="btn btn-warning">Edit</button></td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                  
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

<?php

include '../layouts/footer.php';

?>