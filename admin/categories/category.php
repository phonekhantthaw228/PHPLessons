<?php
include '../layouts/nav_sidebar.php';
include '../dbconnect.php';

$sql = "SELECT * FROM categories";
$stmt = $conn-> prepare($sql);
$stmt-> execute();
// var_dump ($stmt);
$categories = $stmt -> fetchAll();
// var_dump($categories);

?>


<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                                            <th>No</th>
                                
                                            <th >Category Name</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th >No</th>
                                            
                                            <th >Category</th>
                                         
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($categories as $category){
                                            ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?= $category['name'];?></td>
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