

<?php

include('sessions.php');

//save policy to Database
if(isset($_POST['save_policy']))
{

    $policy_title = $_POST['policy_title'];
    $policy_description = $_POST['policy_description'];

    // insert new policy to policy_tbl
    $insert_new_policy = mysqli_query($connection, "INSERT INTO policy_tbl (policy_title, policy_desc)  VALUES ('$policy_title', '$policy_description') ");
    $policyID = mysqli_insert_id($connection);

    if($policyID != '' )
    {

        
        $rules = array();
        $policy_rule = $_POST['policy_rule'];
        $policy_rule_gender = $_POST['rule_gender'];

        for ($i=0; $i < count($policy_rule); $i++) 
        { 
            array_push($rules, [$policy_rule[$i], $policy_rule_gender[$i]]);
        }

        for ($i=0; $i < count($rules); $i++) 
        {

            $prule =  $rules[$i][0];
            $prgender = $rules[$i][1];
    
            
            $insert_policy_rule = mysqli_query($connection,"INSERT INTO policy_rule_tbl (policyID, rule, gender) VALUES ( '$policyID', '$prule', '$prgender')");
    
            
        }


        $sanctions = array();
        $policy_sanction = $_POST['policy_sanction'];
        $policy_sanction_gender = $_POST['sanction_gender'];
        

        for ($i=0; $i < count($policy_sanction); $i++) 
        { 
            array_push($sanctions, [$policy_sanction[$i], $policy_sanction_gender[$i]]);
        }


        for ($i=0; $i < count($sanctions); $i++) 
        {

            $psanctions =  $sanctions[$i][0];
            $psgender = $sanctions[$i][1];
    
           
            $insert_policy_rule = mysqli_query($connection,"INSERT INTO policy_sanction_tbl (policyID, sanction, gender) VALUES ( '$policyID', '$psanctions', '$psgender')");
    
           
        }






       

    }



}




