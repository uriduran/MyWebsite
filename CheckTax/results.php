<!DOCTYPE html>
<html style="min-height:100%;background-color:rgb(241,247,252);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700">
    <link rel="stylesheet" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-color:rgb(241,247,252);min-height:100%;">

<?php include "Calculator.php";
?>


    <div class="login-clean" style="min-width:100%;min-height:100%;">
        <form method="" action="index.php" style="width:361px;padding-right:25px;padding-bottom:20px;padding-left:25px;">
            <h1 class="text-center" style="font-size:29px;margin-bottom:-15px;padding-bottom:19px;"><strong>Calculations </strong></h1>
            <h1 style="font-size:15px;">Total Before Taxes: <?php echo $Total; ?> </h1>
            <div class="form-group">
                <h1 style="font-size:15px;">Federal Income Tax: <?php echo $Federal; ?></h1>
                <h1 style="font-size:15px;">State Income Tax: <?php echo $Illinois; ?></h1>
                <h1 style="font-size:15px;">Medicare Tax: <?php echo $Medicare; ?></h1>
                <h1 style="font-size:15px;">Social Security Tax: <?php echo $Social; ?></h1>
                <h1 style="font-size:15px;"><strong>Total After Tax: <?php echo $TotalTaxes; ?></strong></h1>
            </div>
            <div class="form-group"></div>
            <div class="form-group">
               <button class="btn btn-primary btn-block" style="padding-bottom:13px;margin-bottom:-30px;padding-top:10px;margin-top:42px;">New Calculation</button>
            </div>
            <div style="padding-top:20px;margin-top:55px;margin-right:0px;padding-left:88px;"><a href="#" style="padding-top:47px;padding-right:-11px;">urielduran.me </a></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>