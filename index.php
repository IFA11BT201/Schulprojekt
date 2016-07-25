<html>

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet"> </head>

<body>
    <div class="Container">
        <div class="row">
            <nav class="navbar navbar-default" id="navbar">
                <div class="container-fluid">
                    <div class="navbar-header"> <a class="navbar-brand" href="#">
                        IT-Verwaltung
                    </a> </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="navbar-text">Willkommen: Benutzer</li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <!-- Dropdown Navigation-->
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Column width 3-->
            <div class="col-md-3">
                <!-- Vertikale Navigation-->
                <ul class="nav nav-pills nav-stacked" id="verNav">
                    <li class="active"><a href="index.php">Startseite</a></li>
                    <li><a href="Stammdatenverwaltung.php">Stammdatenverwaltung</a></li>
                    <li><a href="#">Neuanschaffungen</a></li>
                    <li><a href="#">Wartungsarbeiten</a></li>
                    <li><a href="#">IT-Ausstattung</a></li>
                    <li><a href="#">Abfragen</a></li>
                </ul>
            </div>
            <!--/ Column width 3-->
            <!-- Column width 9-->
            <div class="col-md-9" id="mainDiv"> Test </div>
            <!--/ Column width 9-->
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>