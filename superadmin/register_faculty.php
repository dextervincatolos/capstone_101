<?php
include('sessions.php');


// adding user
if(isset($_POST['submitForm']))
{
    $faculty_id = $_POST['facultyNum'];
    $faculty_fname = $_POST['fname'];
    $faculty_mname = $_POST['mname'];
    $faculty_lname = $_POST['lname'];
    $faculty_suffix = $_POST['suffix'];
    $faculty_address = $_POST['facultyAddress'];
    $faculty_gender = $_POST['gender'];
    $faculty_contact = $_POST['contact'];
    $faculty_email = $_POST['email'];
    $faculty_role = $_POST['role'];
    $faculty_password = $_POST['password'];
    $faculty_confirmPassword = $_POST['confirmPassword'];
    $userStatus = $_POST['loginStatus'];

    
    $email_exist = mysqli_query($connection, "SELECT * FROM faculty_tbl WHERE faculty_email = '$faculty_email' ");

    if (mysqli_num_rows($email_exist) > 0)
    {
        $_SESSION['status'] = "Email is Already Used. Please use another Email.";
        $_SESSION['status_code'] = "warning";
        header('Location: admin_user_tbl.php');

    }
    else
    {
         // for security purposes, only 1 support account is allowed.
        $admin_user_account = mysqli_query($connection, "SELECT * FROM faculty_tbl WHERE faculty_role = 'Support'");
                    
        if (mysqli_num_rows($admin_user_account) > 1)
        {
            $_SESSION['status'] = "You cannot add another support account.";
            $_SESSION['status_code'] = "warning";
            header('Location: admin_user_tbl.php');
        }
        else 
        {
            
            // regex pattern for email
            $emailPattern = '/^([a-zA-z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';

            if(!preg_match($emailPattern, $faculty_email))
            {
                $_SESSION['status'] = "Email is Invalid.";
                $_SESSION['status_code'] = "warning";
                header('Location: admin_user_tbl.php');
            }
            else 
            {
                $faculty_id_exist = mysqli_query($connection, "SELECT * FROM faculty_tbl WHERE faculty_number = '$faculty_id' ");
               

                if (mysqli_num_rows($faculty_id_exist) > 0)
                {
                    $_SESSION['status'] = "Faculty ID number Already Exist.";
                    $_SESSION['status_code'] = "warning";
                    header('Location: admin_user_tbl.php');

    
                }
                else
                {
                    // regex pattern for password
                    $uppercase = preg_match('@[A-Z]@', $faculty_password);
                    $lowercase = preg_match('@[a-z]@', $faculty_password);
                    $number    = preg_match('@[0-9]@', $faculty_password);
                    $specialChars = preg_match('@[^\w]@', $faculty_password);

                    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($faculty_password) < 8) 
                    {
                        $_SESSION['status'] = "Password is not strong enough. Password should contain a combination of atleast one uppercase letter, one lowercase letter, one number, a special character, and should be longer than 8 characters.";
                        $_SESSION['status_code'] = "warning";
                        header('Location: admin_user_tbl.php');
                    }
                    else 
                    {
                        if($faculty_password === $faculty_confirmPassword)
                        { 
                            $enc_password = password_hash($faculty_password, PASSWORD_DEFAULT);
                
                            $insertRecord = "INSERT INTO faculty_tbl (faculty_number, faculty_fname, faculty_mname,faculty_lname,faculty_sname, faculty_address, faculty_gender, faculty_contact, faculty_email,  faculty_role, faculty_password, faculty_login_status) 
                                    VALUES ('$faculty_id', '$faculty_fname', '$faculty_mname', '$faculty_lname', '$faculty_suffix', '$faculty_address', '$faculty_gender', '$faculty_contact', '$faculty_email', '$faculty_role', '$enc_password', 'Offline')";
                            $query_run = mysqli_query($connection, $insertRecord);

                            if($query_run)
                            {
                                $_SESSION['status'] = "New Admin-user account registered!";
                                $_SESSION['status_code'] = "success";
                                header('Location: admin_user_tbl.php');
                            }
                            else
                            {
                                $_SESSION['status'] = "Something went wrong. Please try again";
                                $_SESSION['status_code'] = "error";
                                header('Location: admin_user_tbl.php');
                            }   
                            
                        }
                        else 
                        {
                            $_SESSION['status'] = "Password did not match.";
                            $_SESSION['status_code'] = "warning";
                            header('Location: admin_user_tbl.php');
                        }
                    }
                    
                }
            }
        }
      
    }
   
   
}


// update user data
if(isset($_POST['updateUserBtn']))
{
    $userID = $_POST['editUserBrgyID'];
    $employeeNum = $_POST['editEmployeeNum'];
    $email = $_POST['editEmail'];
    $firstName = $_POST['editFirstName'];
    $middleName = $_POST['editMiddleName'];
    $lastName = $_POST['editLastName'];
    $extName = $_POST['editExtName'];
    $office = $_POST['editOffice'];
    $position = $_POST['editPosition'];
    $userStatus = $_POST['editUserStatus'];

    $query = "UPDATE user_primary_data SET userEmployeeNum='$employeeNum', userEmail='$email', userFname='$firstName', userMname='$middleName', userLname='$lastName', userExtName='$extName', userOffice='$office', userPosition='$position', userStatus='$userStatus' WHERE userID='$userID' ";
    $query_run = mysqli_query($connection, $query);

        if($query_run)
        {

            $_SESSION['status'] = "User Profile Updated!";
            $_SESSION['status_code'] = "success";
            header('Location: user_brgy.php');
        }
        else
        {
            $_SESSION['status'] = "User Profile NOT Updated!";
            $_SESSION['status_code'] = "error";
            header('Location: user_brgy.php');
        }
    
   
}


// delete user data
if(isset($_POST['deleteUserBtn']))
{
    $userID = $_POST['deleteUserBrgyID'];

    $query = "DELETE FROM user_primary_data where userID = '$userID' ";
    $query_run = mysqli_query($connection, $query);

        if($query_run)
        {

            $_SESSION['status'] = "User Profile Deleted!";
            $_SESSION['status_code'] = "success";
            header('Location: user_brgy.php');
        }
        else
        {
            $_SESSION['status'] = "User Profile NOT Deleted!";
            $_SESSION['status_code'] = "error";
            header('Location: user_brgy.php');
        }

}


?>