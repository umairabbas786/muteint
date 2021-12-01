<?php include "conn.php";?>

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

    //for image upload..
    $doc1 = $_FILES["doc1"]["name"];
    $tempname = $_FILES["doc1"]["tmp_name"];    
    $folder = "assets/docs/".$doc1;
    move_uploaded_file($tempname, $folder);

    //for image upload..
    $doc2 = $_FILES["doc2"]["name"];
    $tempname = $_FILES["doc2"]["tmp_name"];    
    $folder = "assets/docs/".$doc2;
    move_uploaded_file($tempname, $folder);

    //for image upload..
    $doc3 = $_FILES["doc3"]["name"];
    $tempname = $_FILES["doc3"]["tmp_name"];    
    $folder = "assets/docs/".$doc3;
    move_uploaded_file($tempname, $folder);

    $docs=array($doc1,$doc2,$doc3);
    $final_docs= implode(",",$docs);

    $sql="insert into dispatch (company_name,motor_carrier,start_date,trailer_type,desired_region,driver_home_time,freightguard_reports,reports,gross_amount,tracking_device,name,title,email,phone,extension,contact_time,docs) values ('$company_name','$motor_carrier','$start_date','$trailer_type','$desired_region','$driver_home_time','$freightguard_reports','$reports','$gross_amount','$tracking_device','$name','$title','$email','$phone','$extension','$contact_time','$final_docs')";
    $result=$conn->query($sql);
    if($result){
        $_SESSION['msg']="Data Submitted Successfully. We Will Contact You Soon.";
        header("location:dispatch.php");
        die();
    }
    else{
        $conn->error;
    }
}

?>
