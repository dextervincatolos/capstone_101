<?php
$pageTitle = 'Student Table';
include('sessions.php');
include('includes/header.php');
include('includes/navbar.php');
?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
        
        <!-- Brand Logo -->
        <a href="dashboard.php" class="brand-link">
            <img src="../assets/img/school-logo.png" alt="St. Joseph College Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-bold">St. Joseph College</span>
        </a>

        <!-- sidebar divider -->
        <div class="sidebar">
            
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group mt-3" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Users
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Student Table</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="faculty_tbl.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Faculty Table</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="admin_user_tbl.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Admin Users Table</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Resident Reports
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="reports_residents.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Resident Reports</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="access_level_chart.php" class="nav-link">
                    <i class="nav-icon fas fa-sitemap"></i>
                    <p> Access Levels Chart </p>
                </a>
            </li>
            </ul>
        </nav>

        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mt-1">
                    <div class="col-sm-6">
                        <h1 class="m-0">Student Table</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Student Table</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                
                <!-- fetching data from the database table user_primary_data with brgy level users -->
                <?php
                    // $queryStudent = "SELECT user_primary_data.userID, user_primary_data.userEmployeeNum, user_primary_data.userFname, user_primary_data.userMname, user_primary_data.userLname, user_primary_data.userExtName, user_primary_data.userOffice, user_primary_data.userPosition, user_primary_data.userLevel, user_primary_data.userStatus, user_primary_data.userEmail, user_primary_data.brgyID, tbl_brgy.brgyID, tbl_brgy.brgyName FROM user_primary_data INNER JOIN tbl_brgy ON user_primary_data.brgyID = tbl_brgy.brgyID WHERE userLevel='brgyLevel' AND adminID='$adminUid' ";
                    // $res = mysqli_query($connection, $queryStudent);
                    $queryStudent = "SELECT * FROM student_tbl";
                    $res = mysqli_query($connection, $queryStudent);
                ?>

                <table id="student_tbl" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Gender</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>View record</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                    <!-- fetching data from the database table of brgy level users -->
                        <?php
                            if(mysqli_num_rows($res) > 0)
                            {
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    // $brgyQuery = mysqli_query($connection, "SELECT user_primary_data.userID, user_primary_data.brgyID, tbl_brgy.brgyID, tbl_brgy.brgyName FROM user_primary_data 
                                    // INNER JOIN tbl_brgy ON user_primary_data.brgyID = tbl_brgy.brgyID");

                                    ?>

                                    <tr>
                                        <td> <?php echo $row['studentFullname']; ?> </td>
                                        <td> <?php echo $row['studentGender']; ?> </td>
                                        <td> <?php echo $row['studentContact']?> </td>
                                        <td> <?php echo $row['studentEmail']; ?> </td>
                                        <td> <?php echo $row['studentAddress']; ?> </td>
                                        <td> <?php echo $row['loginStatus']; ?> </td>
                                        <td><button class="btn btn-sm btn-warning form-control"> View record <i class="nav-icon fas fa-user"> </i></button></td>

                                    </tr>

                                    <?php
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    

</div>
<!-- ./wrapper -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>


<script>
    //script for data tables
    $(function () 
    {
        $("#student_tbl").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#student_tbl_wrapper .col-md-6:eq(0)');
        
    });

</script>


</body>
</html>
