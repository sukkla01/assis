<?php
    
  require "db.php";
  require "lib.php";

  $token = empty($_GET['token'])?null:$_GET['token'];
  //$hn = '000008403';
  $vn = getVn($objCon, $token);
  $hn = getHn($objCon, $token);
  mylog($objCon, $hn, 'sit', date('Y-m-d H:i:s'));

  $sql = "select p.name ,v.pttypeno,v.pttype_begin,v.pttype_expire

  from vn_stat v
  left outer join pttype p on p.pttype = v.pttype
  
  where v.vn = '$vn'";
  $result = mysqli_query($objCon, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Material Design for Bootstrap fonts and icons -->
  <link rel="stylesheet" href="assets/webfont/anokotmai.css">

  <!-- Material Design for Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/docs.min.css">

  <title>จอดูสิทธิ์</title>
</head>

<body style="font-family:Anokotmai;background-color:#E0E0E0;">
  <div class="container" style="margin-top:10px">
    <div class="card-deck mb-3 text-center">
      <?php


while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal"><?=$row["name"]; ?>
          </h4>
        </div>

        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-size:1.3em;">เลขที่สิทธิ์ <?=$row["pttypeno"]; ?></li>
            <li style="font-size:1.3em;">วันเริ่มใช้ <?=DateThai($row["pttype_begin"]); ?>
            </li>
            <li style="font-size:1.3em;">วันหมดอายุ <?=DateThai($row["pttype_expire"]); ?>
            </li>
          </ul>

        </div>
      </div>
      <?php
}
mysqli_close($objCon);
?>

    </div>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/vendor/jquery-slim.min.js"></script>
  <script src="assets/js/vendor/popper.min.js"></script>
  <script src="assets/js/docs.min.js"></script>

</body>

</html>