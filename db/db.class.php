<?php

  require_once "util.php";


 class DBConn 
 {
	private static $conn; 
	private static $db_name;  

	public static function Execute($query, $database = DB_NAME) 
	
	{
		self::$db_name = $database;
		self::openConnection();
		
		$resultDB = self::$conn->query($query);
		$result["affectedRows"]= 0;
		
		if(self::$conn->errno)
		{
			//todo log error
			$result["error"]["number"] = self::$conn->errno;
			$result["error"]["description"] = self::$conn->error;
		}
		else
		{
			$result["affectedRows"] = self::$conn->affected_rows;
			if($resultDB->num_rows > 0)
			{
				while($row = $resultDB->fetch_assoc())
				{
					$result["data"][] = $row;
				}
			}
		
		
	    }
		
		self::closeConnection();
		
		if(!ISSET($result))
		{
			$result["error"]["number"] = -1;
			$result["error"]["description"] = "UNKNOWN ERROR";
		}
		
		return $result;
	
	}
	
	private static function openConnection() 
	{
		self::$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,self::$db_name);
	}
	
	private static function closeConnection() 
	{
		self::$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,self::$db_name);
	}
 }

?>