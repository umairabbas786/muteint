<?php include "conn.php";?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dispatchers Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h1 class="text-center lead display-3">Dispatch Information</h1>
        <table class="table table-striped table-responsive">
  <thead>
    <tr>
      <th>#</th>
      <th>Company Name</th>
      <th>Motor Carrier</th>
      <th>Start Date</th>
      <th>Trailer Type</th>
      <th>Desired Region</th>
      <th>Driver Home Time</th>
      <th>Freightguard Reports</th>
      <th>Reports</th>
      <th>Gross Amount</th>
      <th>Tracking Device</th>
      <th>Full Name</th>
      <th>Title</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Extension</th>
      <th>Contact Time</th>
      <th>Documents</th>	
    </tr>
  </thead>
  <tbody>
      <?php 
        $sql="select * from dispatch order by id desc";
        $result=$conn->query($sql);
        while($row=mysqli_fetch_assoc($result)){
            $a=$row['id'];
            $b=$row['company_name'];
            $c=$row['motor_carrier'];
            $d=$row['start_date'];
            $e=$row['trailer_type'];
            $f=explode(',',$row['desired_region']);
            $g=explode(',',$row['driver_home_time']);
            $h=$row['freightguard_reports'];
            $z=$row['reports'];
            $j=$row['gross_amount'];
            $k=$row['tracking_device'];
            $l=$row['name'];
            $m=$row['title'];
            $n=$row['email'];
            $o=$row['phone'];
            $p=$row['extension'];
            $q=$row['contact_time'];
            $r=explode(',',$row['docs']);
      ?>
    <tr>
      <th scope="row"><?php echo $a;?></th>
      <td><?php echo $b;?></td>
      <td><?php echo $c;?></td>
      <td><?php echo $d;?></td>
      <td><?php echo $e;?></td>
      <td>
          <?php
      $length=count($f);
        $i=0;
        while($i<$length){
        if($f[$i]!=" "){
        echo "".$f[$i]."<br>";
        }
        $i++;
        }
        ?>
        </td>
      <td>
      <?php
      $length=count($g);
        $i=0;
        while($i<$length){
        if($g[$i]!=" "){
        echo "".$g[$i]."<br>";
        }
        $i++;
        }
        ?>
      </td>
      <td><?php echo $h;?></td>
      <td><?php echo $z;?></td>
      <td><?php echo $j;?></td>
      <td><?php echo $k;?></td>
      <td><?php echo $l;?></td>
      <td><?php echo $m;?></td>
      <td><?php echo $n;?></td>
      <td><?php echo $o;?></td>
      <td><?php echo $p;?></td>
      <td><?php echo $q;?></td>
      <td>
      <?php
        $length=count($r);
        $i=0;
        while($i<$length){
        echo "<a href='assets/docs/".$r[$i]."'>Click To Open/Download</a> <br>";
        $i++;
        }
        ?>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>