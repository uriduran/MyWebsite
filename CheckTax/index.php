<!DOCTYPE html>
<html style="min-height:100%;background-color:rgb(241,247,252);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Calculator</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700">
    <link rel="stylesheet" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-color:rgb(241,247,252);min-height:100%;">

    <div class="login-clean" style="min-width:100%;min-height:100%;">
        <form method="post" action="results.php" style="width:361px;padding-right:25px;padding-bottom:40px;padding-left:25px;">
            <h1 class="text-center" style="font-size:20px;margin-bottom:-36px;">Calculate Total Paycheck</h1>
            <div class="illustration" style="padding-bottom:-16px;"><i class="material-icons" style="font-size:68px;">attach_money</i></div>
            <h1 style="font-size:15px;margin-top:-32px;">Hourly Wage:</h1>
            <input class="form-control" type="text" name="Wage" placeholder="Hourly Wage">
            <div class="form-group">
                <h1 style="font-size:15px;">Total Hours Worked:</h1>
                <input class="form-control" type="text" name="Hours" placeholder="Hours Worked" autocomplete="off">
            </div>
            <div class="form-group"></div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Submit </button>
            </div>
        </form>
        <center>
         <div style="padding-top: 30px;"><a href="urielduran.me" style="padding-top:47px;padding-right:0px;">urielduran.me </a></div>
        </center>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>