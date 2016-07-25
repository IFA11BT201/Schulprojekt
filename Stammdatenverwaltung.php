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
                        <li><a href="">Abmelden</a></li>
                    </ul>
                </div>
            </nav>
            <!-- Column width 3-->
            <div class="col-md-3">
                <!-- Vertikale Navigation-->
                <ul class="nav nav-pills nav-stacked" id="verNav">
                    <li><a href="index.php">Startseite</a></li>
                    <li class="active dropdown"><a href="Stammdatenverwaltung.php">Stammdatenverwaltung</a></li>
                    <li><a href="#">Neuanschaffungen</a></li>
                    <li><a href="#">Wartungsarbeiten</a></li>
                    <li><a href="#">IT-Ausstattung</a></li>
                    <li><a href="#">Abfragen</a></li>
                </ul>
            </div>
            <!--/ Column width 3-->
            <!-- Column width 9-->
            <div class="col-md-9" id="mainDiv">
                <div class="panel panel-default">
                    <div class="panel-heading"> Stammdatenverwaltung - Lieferanten
                        <!-- Small button group -->
                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                        <div class="btn-group pull-right">
                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Auswählen <span class="caret"></span> </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Lieferanten</a></li>
                                <li><a href="">Räume</a></li>
                                <li><a href="">Benutzer</a></li>
                                <li><a href="">Komponentenarten</a></li>
                                <li><a href="">Komponenterattribute</a></li>
                                <li><a href="">Informationseingabe</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Vorname</th>
                                    <th>Nachname</th>
                                    <th>Firma</th>
                                    <th id="tblOpt">Optionen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>Muster GmbH</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>Muster GmbH</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>Muster GmbH</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Column width 9-->
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>