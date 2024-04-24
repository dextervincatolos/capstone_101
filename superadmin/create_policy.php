<?php
$pageTitle = 'Policy';
include('sessions.php');
include('includes/header.php');
include('includes/navbar.php');
?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
        
        <!-- Brand Logo -->
        <a href="dashboard.php" class="brand-link">
            <img src="../assets/img/cics-logo.png" alt="CICS Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-bold"><?php echo $college; ?> </span>
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
                    <i class="nav-icon fas fa-cogs"></i>
                    <p> System Management <i class="right fas fa-angle-left"></i> </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="create_policy.php" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Policy</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="faculty_tbl.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Course/Program</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin_user_tbl.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Class Sections</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin_user_tbl.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Events</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin_user_tbl.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Organization</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
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
                        <h1 class="m-0">Policies</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Policy</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">


        <div class="col-md-12">
            <div class="">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-bullhorn"></i> </h3>
                    <a class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#adduserprofile">
                        <i class="fas fa-plus "></i>
                    </a>
                    <!-- add user modal -->
                    <div class="modal fade" id="adduserprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-bold" id="exampleModalLabel">Create new policy</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="save_new_policy.php" method="POST">
                                <div class="modal-body">

                                    <div class="form-group" >
                                        <label> 
                                            Policy Title
                                            <span class="text-bold text-sm text-danger">*</span> 
                                        </label>
                                        <input type="text" name="policy_title" id="policy_title" class="form-control" required placeholder="Policy Title">
                                    </div>
                                       
                                    <div class="form-group">
                                        <label>  Policy Description  </label>
                                        <textarea class="form-control" name="policy_description" id=""  required></textarea>
                                    </div>
                                   
                                    <hr>
                                    <label> Policy Rules <span class="text-bold text-sm text-danger">*</span></label>
                                    

                                    <div  id="add_rule">
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <input type="text" name="policy_rule[]" class="form-control" required placeholder="Write rule here">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <select class="form-control" name="rule_gender[]" id="">
                                                    <option value="">Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <button class="form-control btn btn-success btn-sm create_new_rule"> New Rule</button>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <label> Policy Sanction <span class="text-bold text-sm text-danger">*</span></label>
                                    

                                    <div id="add_sanction">
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <input type="text" name="policy_sanction[]" id="contact" class="form-control" required placeholder="Write rule here">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <select class="form-control" name="sanction_gender[]" id="">
                                                    <option value="">Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <button class="form-control btn btn-success btn-sm create_new_sanction"> New Sanction</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="save_policy" class="btn btn-primary">Save</button>
                                </div>

                            </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                    <div id="accordion">
                        <?php

                            $query_policies = "SELECT * FROM policy_tbl";
                            $res = mysqli_query($connection, $query_policies);

                            if(mysqli_num_rows($res) > 0)
                            {
                                while($row = mysqli_fetch_assoc($res))
                                { ?>

                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title w-100">
                                                <a class="d-block w-100" data-toggle="collapse" href="#policy_<?php echo $row['policyID']; ?>">
                                                    <blockquote class="quote-warning">
                                                        <p class="text-bold text-success"><?php echo $row['policy_title']; ?></p>
                                                        <small class="text-dark"><cite title="Description"><?php echo $row['policy_desc']; ?></cite></small>
                                                    </blockquote>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="policy_<?php echo $row['policyID']; ?>" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="row">
                                                <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Rules to follow</h3>
                                                            </div>
                                                            <!-- /.card-header -->
                                                            <div class="card-body p-0">
                                                                <table class="table table-sm">
                                                                    <thead>
                                                                        <tr>
                                                                        <th style="width: 10px">#</th>
                                                                        <th>Rules</th>
                                                                        <th>Applicable for?</th>
                                                                        <th>Violators</th>
                                                                        <th style="width: 40px">%</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php 
                                                                            $policyID = $row['policyID'];
                                                                            $query_policy_rules = "SELECT * FROM policy_rule_tbl WHERE policyID = '$policyID'";
                                                                            $res_rules = mysqli_query($connection, $query_policy_rules);
                                
                                                                            if(mysqli_num_rows($res_rules) > 0) {
                                                                                while($row_rule = mysqli_fetch_assoc($res_rules)) { ?>
                                                                            <tr>
                                                                                <td><?php echo $row_rule['ruleID']; ?></td>
                                                                                <td><?php echo $row_rule['rule']; ?></td>
                                                                                <td><?php echo $row_rule['gender']; ?></td>
                                                                                <td>
                                                                                    <!-- <div class="progress progress-xs">
                                                                                        <div class="progress-bar progress-bar-warning" style="width: 55%"></div>
                                                                                    </div> -->
                                                                                </td>
                                                                                <td>
                                                                                    <!-- <span class="badge bg-danger">55%</span> -->
                                                                                </td>
                                                                            </tr>
                                                                        <?php } 
                                                                            } else {?>
                                                                                <tr>
                                                                                    <td colspan="4" class="text-danger text-center"> - No available rules for this policy. - </td>
                                                                                </tr>
                                                                         <?php   }  ?> 
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- /.card-body -->
                                                        </div>
                                                        <!-- /.card -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Policy sanctions</h3>
                                                            </div>
                                                            <!-- /.card-header -->
                                                            <div class="card-body p-0">
                                                                <table class="table table-sm">
                                                                    <thead>
                                                                        <tr>
                                                                        <th style="width: 10px">#</th>
                                                                        <th>Sanction</th>
                                                                        <th>Applicable for?</th>
                                                                        <th>Complied</th>
                                                                        <th style="width: 40px">%</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php 
                                                                            $query_policy_rules = "SELECT * FROM policy_sanction_tbl WHERE policyID = '$policyID'";
                                                                            $res_sanction = mysqli_query($connection, $query_policy_rules);
                                
                                                                            if(mysqli_num_rows($res_sanction) > 0) {
                                                                                while($row_sanction = mysqli_fetch_assoc($res_sanction)) { ?>
                                                                            <tr>
                                                                                <td><?php echo $row_sanction['sanctionID']; ?></td>
                                                                                <td><?php echo $row_sanction['sanction']; ?></td>
                                                                                <td><?php echo $row_sanction['gender']; ?></td>
                                                                                <td>
                                                                                    <!-- <div class="progress progress-xs">
                                                                                        <div class="progress-bar progress-bar-warning" style="width: 55%"></div>
                                                                                    </div> -->
                                                                                </td>
                                                                                <td>
                                                                                    <!-- <span class="badge bg-danger">55%</span> -->
                                                                                </td>
                                                                            </tr>
                                                                        <?php } 
                                                                            } else {?>
                                                                                <tr>
                                                                                    <td colspan="4" class="text-danger text-center"> - No available sanctions for this policy. - </td>
                                                                                </tr>
                                                                         <?php   }  ?> 
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- /.card-body -->
                                                        </div>
                                                        <!-- /.card -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                    <?php    
                                     }
                                        } ?>

                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>












































































            
          

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


</body>
</html>
