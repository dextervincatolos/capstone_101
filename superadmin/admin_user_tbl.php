<?php
$pageTitle = 'Admin-User Table';
include('sessions.php');
include('includes/header.php');
include('includes/navbar.php');
?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
        
        <!-- Brand Logo -->
        <a href="dashboard.php" class="brand-link">
            <img src="../assets/img/cics-logo.png" alt="cics-logo" class="brand-image img-circle elevation-3">
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
                    <a href="#" class="nav-link">
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
                    <a href="admin_user_tbl.php" class="nav-link active">
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
                        <h1 class="m-0">Admin-User Table</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Admin User Table</li>
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
                    <a class="btn btn-primary float-right" data-toggle="modal" data-target="#adduserprofile">
                        <i class="fas fa-user-plus fa-sm text-white-50"></i> Add Admin-user
                    </a>
                    <br>
                    <hr>

                    <!-- add user modal -->
                    <div class="modal fade" id="adduserprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-bold" id="exampleModalLabel">Register Faculty Admin-user</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="register_faculty.php" method="POST">
                                <div class="modal-body">
                                    
                                    <div class="row">
                                    <div class="form-group col-md-4" >
                                            <label> 
                                                First Name
                                                <span class="text-bold text-sm text-danger">*</span> 
                                            </label>
                                            <input type="text" name="fname" id="fname" class="form-control" required placeholder="First name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label> 
                                                Middle Name 
                                                <span class="text-bold text-sm text-danger">* </span>
                                            </label>
                                            <input type="text" name="mname" id="mname" class="form-control" required placeholder="Middle name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label> 
                                                Last Name
                                                <span class="text-bold text-sm text-danger">*</span> 
                                            </label>
                                            <input type="text" name="lname" id="lname" class="form-control" required placeholder="Last name">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label> 
                                                Suffix 
                                            </label>
                                            <input type="text" name="suffix" id="suffix" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2" >
                                            <label> 
                                                Faculty ID
                                                <span class="text-bold text-sm text-danger">*</span> 
                                            </label>
                                            <input type="text" name="facultyNum" id="facultyNum" class="form-control" required placeholder="ID number">
                                        </div>
                                        <div class="form-group col-md-10">
                                        <label> 
                                            Faculty Address 
                                            <span class="text-bold text-sm text-danger">* </span>
                                            <i class="text-italic text-sm text-danger"> (Write complete address)</i>
                                        </label>
                                        <input type="text" name="facultyAddress" id="facultyAddress" class="form-control" required placeholder="Enter Faculty Address">
                                    </div>
                                    </div>
                                    
                                    

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label> Gender <span class="text-bold text-sm text-danger">*</span></label>
                                            <select class="form-control select2" name="gender" id="gender" required aria-label="gender" required>
                                                <option selected="selected" selected disabled>Select Gender</option>
                                                <option value="Male"> Male </option>
                                                <option value="Female"> Female </option>
                                                        
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label> Faculty Role <span class="text-bold text-sm text-danger">*</span></label>
                                            <select class="form-control select2" name="role" id="role" required aria-label="role">
                                                <option selected="selected" selected disabled>Select Role</option>
                                                <option value="Dean">College Dean </option>
                                                <option value="Adviser"> Class Adviser </option>
                                                        
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="form-group col-md-6">
                                            <label> Contact <span class="text-bold text-sm text-danger">*</span> </label>
                                            <input type="text" name="contact" id="contact" class="form-control" required placeholder="Enter Contact number">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label>Email <span class="text-bold text-sm text-danger">*</span> </label>
                                            <input type="email" name="email" id="email" class="form-control checking_email" required placeholder="Enter Email">
                                            <small class="error_email" style="color: red;"></small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Password <span class="text-bold text-sm text-danger">*</span> </label>
                                            <input type="password" name="password" id="password" class="form-control" required placeholder="Enter Password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Confirm Password <span class="text-bold text-sm text-danger">*</span> </label>
                                            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" required placeholder="Confirm Password">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="hidden" name="loginStatus" id="loginStatus" value="Offline" required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="submitForm" class="btn btn-primary">Save</button>
                                </div>

                            </form>

                            </div>
                        </div>
                    </div>
                
                    <!-- fetching data from the database table user_primary_data with brgy level users -->
                    <?php
                        // $queryStudent = "SELECT user_primary_data.userID, user_primary_data.userEmployeeNum, user_primary_data.userFname, user_primary_data.userMname, user_primary_data.userLname, user_primary_data.userExtName, user_primary_data.userOffice, user_primary_data.userPosition, user_primary_data.userLevel, user_primary_data.userStatus, user_primary_data.userEmail, user_primary_data.brgyID, tbl_brgy.brgyID, tbl_brgy.brgyName FROM user_primary_data INNER JOIN tbl_brgy ON user_primary_data.brgyID = tbl_brgy.brgyID WHERE userLevel='brgyLevel' AND adminID='$adminUid' ";
                        // $res = mysqli_query($connection, $queryStudent);
                        $queryFaculty = "SELECT * FROM faculty_tbl";
                        $res = mysqli_query($connection, $queryFaculty);
                    ?>

                    <table id="faculty_tbl" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Faculty Name</th>
                                <th>Faculty Gender</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Faculy Role</th>
                                <th>Login Status</th>
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
                                            <td> <?php echo $row['faculty_fname'] .' '.$row['faculty_mname'].' '. $row['faculty_lname'] .' '. $row['faculty_sname']; ?> </td>
                                            <td> <?php echo $row['faculty_gender']; ?> </td>
                                            <td> <?php echo $row['faculty_contact']?> </td>
                                            <td> <?php echo $row['faculty_email']; ?> </td>
                                            <td> <?php echo $row['faculty_address']; ?> </td>
                                            <td> <?php echo $row['faculty_role']; ?> </td>
                                            <td> <?php echo $row['faculty_login_status']; ?> </td>
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
        $("#faculty_tbl").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#faculty_tbl_wrapper .col-md-6:eq(0)');
        
    });

</script>


</body>
</html>
