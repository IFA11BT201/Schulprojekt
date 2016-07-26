<?php
	
	$SALT = "ZsauSbAnToaAfAS5aGay56w3Ww35";
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

	namespace benutzer;

	/**
	 * Description of benutzer
	 *
	 * @author Administrator
	 */
	include_once "/mysqlilib/MysqliDb.php";

	class benutzer {
		//	Init the connection to the database
		function __constructor() {
			$db = new MysqliDb(
			Array(
            'host' => '192.168.2.252',
            'username' => 'softwareteam',
            'password' => 'softwarepass',
            'db' => 'login',
            'port' => 3306,
            'charset' => 'utf8')
			);
		}
		//	Logging the user into the database, returns true when it was succesfully and
		//	false when not. When it was succesfull saves too the rolleID into a session variable
		function login($user, $password){
			
			$sha256 = hash("sha256",$password);
			$sha256 = $sha256 + $SALT;
			$db = MysqliDb::getInstance();
			$db->where("name", $user);
			$db->where("passwort", $sha256);
			$data = $db->get("benutzer");
			if($data.length>0){
				$db->where("id", $data["rolle"]);
				$data = $db->get("rolle");
				$session_start();
				$_SESSION['rolle'] = $data["bezeichnung"];
				return true;
			}
			else
				return false;
		}
		//	Insert accounts into the database
		function createAccount($user, $password, $rolleID){
			
			if($user!="" && $password!="" && $rolleID!=""){
				$sha256 = hash("sha256",$password);
				$db = MysqliDb::getInstance();
				$account = new Array(
					'name' = $user,
					'passwort' = $sha256 + $SALT,
					'created' = $db->now(),
					'expires' = $db->now('+1Y'),
					'rolle' = $rolleID
				);
				return $db->insert('benutzer',$account);
			}
			else
				return false;
		}
		//	Get the rol of the logged user
		function getRolByID($rolleID){
			$db = MysqliDb::getInstance();
			$db->where("id", $rolleID);
			return $db->get('rolle',"bezeichnung");
		}
	}
?>