<?php
/*
 * Copyright (C) 2016 Administrator
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/*
 * @author Niko GS
 * @
 */


$menu = [
    'header' => 'IT-Verwaltung',
    'typ' => 'Name',
    'dropdown' => array(
        "menutext" => "Dropdown",
        "link" => "link",
        "link" => "link",
        "link" => "link",
    ),
];

function printmenu($menu, $type) {
    ?>
    <nav class="navbar navbar-default" id="navbar">
        <div class="container-fluid">
            <div class="navbar-header"> <a class="navbar-brand" href="#">
                    <?= $menu['header'] ?>
                </a> </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-text">Willkommen: <?= $user ?></li>

                <?php
                if (isset($menu['dropdown'])) {
                    foreach ($menu['dropdown'] as $key => $value) {
                        ?>
                        <li class = "dropdown">
                            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" role = "button" aria-haspopup = "true" aria-expanded = "false">
                                <?php
                                if ($key == "menutext") {
                                    echo $value;
                                }
                                ?><span class="caret"></span>
                            </a>
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
                        <?php
                    }
                }
                ?>
                <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <?php if ($key == "")  ?><span class="caret"></span>
                    </a>
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
    <?php
}
