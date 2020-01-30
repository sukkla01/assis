<?php
require "db.php";
require "lib.php";
$hn = getHn($objCon, $token);

mylog($objCon, $hn, 'media', date('Y-m-d H:i:s'));
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

        <title>จอมีเดีย </title>
        <style>
            .col-md-5 {
                position: relative;
                width: 40%;
                min-height: 1px;
                padding-right: 5px;
                padding-left: 5px;
                padding-top: 5px;
            }
            .col-md-7 {
                position: relative;
                width: 60%;
                min-height: 1px;
                padding-right: 15px;
                padding-left: 15px;
            }
        </style>
    </head>

    <body style="font-family:Anokotmai;background-color:#E0E0E0;">
        <div class="container" style="margin-top:10px">
            <div class="col-xs-12" >
                <h1>ข่าวสาร</h1>
            </div>
            <div class="row" style="background-color:white;">
                <div class="col-md-5 ">
                    <iframe width="100%" height="100" 
                            src="https://www.youtube.com/embed/ORzelkS8jak?control=0" 
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                    </iframe>
                </div>
                <div class="col-md-7 ">
                    <p style="font-size: 12px;margin-top: 25px;font-weight: 100px">ฝุ่นละออง PM 2.5 ภัยร้ายใกล้ตัว ทำลายสุขภาพ by หมอแอมป์</p>
                    <p style="font-size: 11px;margin-top: -10px;color: #818a91">โพสเมื่อ 30 ก.ย. 2019</p>
                </div>

            </div>

            <div class="row" style="background-color:white;margin-top: 5px">
                <div class="col-md-5 ">
                    <iframe width="100%" height="100" 
                            src="https://www.youtube.com/embed/zZ82fZp7jhA" 
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                    </iframe>
                </div>
                <div class="col-md-7 ">
                    <p style="font-size: 12px;margin-top: 25px;font-weight: 100px">[Dr.Amp Podcast] ฝุ่นละออง PM 2.5 ภัยร้ายใกล้ตัว by หมอแอมป์</p>
                    <p style="font-size: 11px;margin-top: -10px;color: #818a91">โพสเมื่อ 11 พ.ย. 2019</p>
                </div>

            </div>

            <div class="row" style="background-color:white;margin-top: 5px">
                <div class="col-md-5 ">
                    <iframe width="100%" height="100" 
                            src="https://www.youtube.com/embed/WKt8vkhwrmc" 
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                    </iframe>
                </div>
                <div class="col-md-7 ">
                    <p style="font-size: 12px;margin-top: 25px;font-weight: 100px">อาหารต้านพิษฝุ่น PM 2.5 : รู้สู้โรค</p>
                    <p style="font-size: 11px;margin-top: -10px;color: #818a91">โพสเมื่อ : 31 ม.ค.62</p>
                </div>

            </div>



        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/vendor/jquery-slim.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/docs.min.js"></script>

</body>

</html>