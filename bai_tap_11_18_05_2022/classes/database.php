<?php
/* 
 * Project: oCoder Framework
 * File: /classes/basemodel.php
 * Purpose: abstract class access database.
 * Author: Linh Nguyen
 */

class Database {

	var $host = "localhost";
	var $user = 'user_demo';
	var $pass = '123456';
	var $db   = 'demo';
	
	var $conn;					// Database connection
	var $last_query;			// Results of last query
	var $last_sql;				// String that contains last sql query
	
	var $show_errors = true;	// Whether or not to show error messages
	
	/**
	 * Constructor function
	 * Connects and selects database
	 *
	 * @param    string   MySQL Host
	 * @param    string   MySQL Username
	 * @param    string   MySQL Password
	 * @param    string   MySQL Database name
	 * @return   link     Connection link
	 */
	function connect($host = '', $user = '', $pass = '', $db = '') {
	
		$host = !empty($host) ? $host : $this->host;
		$user = !empty($user) ? $user : $this->user;
		$pass = !empty($pass) ? $pass : $this->pass;
		$db   = !empty($db)   ? $db   : $this->db;
		$this->conn = mysqli_connect($host, $user, $pass,$db);

		// Check connection
		if (!$this->conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		return $this->conn;
	
	}
	
	/**
	 * Execute a query on the database
	 *
	 * @param    string   SQL query to execute
	 * @return   query    The query executed
	 */
	function query($sql) {
	
		is_resource($this->conn) || $this->connect();
		$this->last_sql = $sql;
		$this->last_query = mysqli_query( $this->conn,$sql);
		return $this->last_query;
	
	}
	
	/**
	 * Very simple select
	 *
	 * @param    string   Table name to select from
	 * @param    string   What to order by
	 * @param    string   Where statement
	 * @param    string   Columns to select
	 * @return   result   Result of query
	 */
	function select($table, $orderby = 'id DESC', $where = '', $cols = '*', $limit = '') {
	
		$orderby = !empty($orderby) ? "ORDER BY $orderby" : '';
		$where = !empty($where) ? "WHERE $where" : '';
		$limit = !empty($limit) ? "LIMIT $limit" : '';
	
		return $this->query("SELECT $cols FROM $table $where $orderby $limit");
	}

	
	/**
	 * Performs an insert query
	 *
	 * @param    string   Table name to query
	 * @param    array    Associative array of Column => Value to insert
	 * @return   result   Result of query
	 */
	function insert($table, $data) {
	
		if (!is_array($data))
			return false;
			
		foreach ($data as $col => $value)
			$data[$col] = $this->escape($value);
		
		$cols = array_keys($data);
		$vals = array_values($data);
		
		$this->query("INSERT INTO $table (".implode(',', $cols).") VALUES (".implode(',', $vals).")");
		return mysqli_insert_id($this->connect());
	
	}
	
	/**
	 * Updates a row
	 *
	 * @param    string   Table name to query
	 * @param    array    Associtive array of columns to update
	 * @param    string   Where clause
	 * @return   result   Result of query
	 */
	function update($table, $data, $where) {
	
		if (!is_array($data))
			return false;
			
		foreach ($data as $col => $value) {
			$vals[] = $col.' = '.$this->escape($value);
		}
		$this->query("UPDATE $table SET ".implode(',', $vals)." WHERE $where");

		return mysqli_affected_rows($this->connect());
	
	}
	
	/**
	 * Delete a single row
	 *
	 * @param    string   Table name to query
	 * @param    string   The column to match against
	 * @param    string   Value to match against column
	 * @return   result   Result of query
	 */
	function delete($table, $where) {
	
		$this->query("DELETE FROM $table WHERE $where");
		return mysqli_affected_rows($this->connect());
	
	}
	
	/**
	 * Get results of query
	 *
	 * @param    string   Return as object or array
	 * @return   result   Result of query
	 */
	function get($type = 'object') {
	
		$type = $type == 'object' ? 'mysqli_fetch_object' : 'mysqli_fetch_assoc';
		if ($this->last_query instanceof mysqli_result) {
			if (mysqli_num_rows($this->last_query) > 0) {
				while($rows = $type($this->last_query)) {
			        $results[] = $rows;
			    }
			}
		}
		else $this->error();

		return (!empty($results)) ? $results : null;
	
	}
	
	/**
	 * Get first result of query
	 *
	 * @param    string   Return as object or array
	 * @return   result   Result of query
	 */
	function get_first($type = 'object') {
	
		$type = $type == 'object' ? 'mysqli_fetch_object' : 'mysqli_fetch_assoc';
		
		if ($this->last_query instanceof mysqli_result) 
			return $type($this->last_query);
			
		else $this->error();
	
	}
	
	/**
	 * Escape strings
	 *
	 * @param    mixed    String to escape
	 * @return   string   Escaped string, ready for SQL insertion
	 */
	function escape($data) {
		switch(gettype($data)) {
			case 'string':
				$data = "'".mysqli_real_escape_string($this->connect(), $data)."'";
				break;
			case 'boolean':
				$data = (int) $data;
				break;
			case 'double':
				$data = sprintf('%F', $data);
				break;
			default:
				$data = ($data === null) ? 'null' : $data;
		}
		
		return (string) $data;
	
	}
	
	/**
	 * Show simple error messages to help aid development process
	 *
	 * @param    string   Custom error message to show
	 * @return   death    Error page
	 */
	function error($msg = '') {
	
		if ($this->show_errors === true) {
			$error = '<h1>Error!</h1>';
			
			if (!empty($msg))
				$error .= "$msg<br />";
				
			if (mysqli_connect_error())
				$error .= '<b>MySQL Error:</b> '.mysqli_connect_error().'<br />';
				
			if (isset($this->last_sql))
				$error .= '<b>SQL Statement:</b> '.$this->last_sql;
			
			die($error);
		}
	
	}

}