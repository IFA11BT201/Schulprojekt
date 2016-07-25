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

namespace itverwaltung;

/**
 * Description of lieferant
 *
 * @author Administrator
 */
include_once "/mysqlilib/MysqliDb.php";

class itverwaltung {

    function __constructor() {
        $db = new MysqliDb(
                Array(
            'host' => '192.168.2.252',
            'username' => 'softwareteam',
            'password' => 'softwarepass',
            'db' => 'itv_v02',
            'port' => 3306,
            'charset' => 'utf8')
        );
    }
    public function __destructor() {
        $db = NULL;
    }
    /*
     * 
     */

    function getAllSupplies() {
        $db = MysqliDb::getInstance();
        $data = $db->get('lieferant');
    }

    /*
     * 
     */

    function getSupply($id) {
        $db = MysqliDb::getInstance();
        $db->where("id", $id);
        return $db->get('lieferant');
    }

    //Room

    /*
     * @author TEAM IT
     * @uses $MySqliDb->get('table');
     * 
     * @throws Exception
     * @return Table raume 
     */

    function getAllRooms() {
        $db = MysqliDb::getInstance();
        return $db->get('raeume');
    }

    /*
     * 
     * @author TEAM IT
     * @uses $MySqliDb->get('table');
     *
     * @param int $id The ID of the User.
     * 
     * @throws Exception
     * @return Tableraum
     */

    function getRoom($id) {
        $db = MysqliDb::getInstance();
        $db->where("id", $id);
        var_dump($db->get('raeume'));
    }

    /*
     * 
     */

    function getAllComponents() {
        $db = MysqliDb::getInstance();
        return $db->get('komponenten');
    }

    /*
     * 
     */

    function getComponent($id) {
        $db = MysqliDb::getInstance();
        $db->where("id", $id);
        return $db->get('komponenten');
    }

    //USER

    /*
     * 
     *

    function getAllUsers() {
        $db = MysqliDb::getInstance();
        return $db->get('users');
    }

    *
     * 
     *

    function getUser($id) {
        $db = MysqliDb::getInstance();
        $db->where("id", $id);
        return $db->get('users');
    }
     *
     */

    function login($username, $password) {
        
    }

    //put your code here
}
