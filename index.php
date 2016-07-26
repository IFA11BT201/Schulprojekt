<html>

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet"> </head>

<?php 
//inlcudes
require_once '/classes/itverwaltung.class.php';
$itverwaltung = new itverwaltung();
?>

<body>
    <div class="Container">
        <div class="row">
            
            <!-- Column width 9-->
            <div class="col-md-9" id="mainDiv"> Test<?php $itverwaltung->getAllRooms();?> </div>
            <!--/ Column width 9-->
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>