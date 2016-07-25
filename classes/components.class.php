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

namespace components;

/**
 * Description of components
 *
 * @author Administrator
 */
include "/mysqlilib/MysqliDb.php";
$db = new MysqliDb(Array(
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'db' => 'idk',
    'port' => 3306,
    'prefix' => 'idk_',
    'charset' => 'utf8'));

class components {
    /*
     * 
     */

    function getAllComponents() {
        $db = MysqliDb::getInstance();
        return $db->get('components');
    }

    /*
     * 
     */

    function getComponent($id) {
        $db = MysqliDb::getInstance();
        $db->where("id", $id);
        return $db->get('components');
    }

    /*
     * 
     */

    function cop() {
        $db = MysqliDb::getInstance();
        $db->join("komponente_hat_attribute kha", "kha.kompnenten_k_id=k.k_id", "LEFT");
        $db->joinWhere("users u", "u.tenantID", 5);
        $products = $db->get("products p", null, "u.name, p.productName");
        print_r($products);
    }

}
