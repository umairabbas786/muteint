<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "muteint"; 
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 

<?php
session_start();
ob_start();

if(isset($_POST['form_submit'])){
    $company_name=$_POST['company_name'];
    $motor_carrier=$_POST['motor_carrier'];
    $start_date = $_POST['start_date'];
    $trailer_type=$_POST['trailer_type'];
    if(isset($_POST['48states'])){
        $a=$_POST['48states'];
    }
    else{
        $a=" ";
    }
    if(isset($_POST['southeast'])){
        $b=$_POST['southeast'];
    }
    else{
        $b=" ";
    }
    if(isset($_POST['southwest'])){
        $c=$_POST['southwest'];
    }
    else{
        $c=" ";
    }
    if(isset($_POST['northeast'])){
        $d=$_POST['northeast'];
    }
    else{
        $d=" ";
    }
    if(isset($_POST['midwest'])){
        $e=$_POST['midwest'];
    }
    else{
        $e=" ";
    }
    if(isset($_POST['westcoast'])){
        $f=$_POST['westcoast'];
    }
    else{
        $f=" ";
    }
    $arr = array($a,$b,$c,$d,$e,$f);
    $desired_region= implode(",",$arr);

    if(isset($_POST['every_other_day'])){
        $aa=$_POST['every_other_day'];
    }
    else{
        $aa=" ";
    }
    if(isset($_POST['every_weekend'])){
        $bb=$_POST['every_weekend'];
    }
    else{
        $bb=" ";
    }
    if(isset($_POST['every_two_weeks'])){
        $cc=$_POST['every_two_weeks'];
    }
    else{
        $cc=" ";
    }
    if(isset($_POST['flexible'])){
        $dd=$_POST['flexible'];
    }
    else{
        $dd=" ";
    }
    $arr1=array($aa,$bb,$cc,$dd);
    $driver_home_time= implode(",",$arr1);



    $freightguard_reports=$_POST['freightguard_reports'];
    if(isset($_POST['reports'])){
        $reports=$_POST['reports'];
    }
    else{
        $reports=" ";
    }
    if(isset($_POST['gross_amount'])){
        $gross_amount=$_POST['gross_amount'];
    }
    else{
        $gross_amount=" ";
    }
    $tracking_device=$_POST['tracking_device'];
    $name=$_POST['name'];
    if(isset($_POST['title'])){
        $title=$_POST['title'];
    }
    else{
        $title=" ";
    }
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    if(isset($_POST['extension'])){
        $extension=$_POST['extension'];
    }
    else{
        $extension =" ";
    }
    
    $contact_time=$_POST['contact_time'];

    $insertValuesSQL="";
    //for multiple images
        // File upload configuration 
        $targetDir = "assets/docs/";
        $allowTypes = array('jpg','png','jpeg','gif','pdf','doc'); 
          
        $fileNames = array_filter($_FILES['docs']['name']);
        if(!empty($fileNames)){ 
            foreach($_FILES['docs']['name'] as $key=>$val){ 
                // File upload path 
                $fileName = basename($_FILES['docs']['name'][$key]); 
                $targetFilePath = $targetDir . $fileName; 
                 
                // Check whether file type is valid 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                if(in_array($fileType, $allowTypes)){
                    if(move_uploaded_file($_FILES["docs"]["tmp_name"][$key], $targetFilePath)){
                        $insertValuesSQL .= $fileName .",";
                    }
                }
            } 
        }
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ',');
        }
        //--End Multiple Files..

    $sql="insert into dispatch
    (company_name,motor_carrier,
    start_date,trailer_type,desired_region,
    driver_home_time,freightguard_reports,reports,
    gross_amount,tracking_device,name,title,email,
    phone,extension,contact_time,docs)
    values('$company_name','$motor_carrier','$start_date','$trailer_type','$desired_region','$driver_home_time',
    '$freightguard_reports','$reports','$gross_amount','$tracking_device','$name','$title','$email','$phone','$extension',
    '$contact_time','$insertValuesSQL')";
    $result=$conn->query($sql);
    if($result){
        $_SESSION['msg']="Data Submitted Successfully. We Will contact you Shortly";
        header("location:dispatch.php");
        die();
    }
    else{
        echo $error;
    }


}

?>
