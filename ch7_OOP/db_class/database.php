<?php

include_once("config.php");

class Database
{
      var $con;
	  
	  function connect_db()
	  {
	    $this->con  =  mysql_connect(HOST,USER,PASS) or die("Failed connecting to mysql server".mysql_error());
		mysql_select_db(DATABASE) or die("Failed connecting to Database".mysql_error());
		return $this->con;
	  }
	  
	  function exec($sql)
	  {
	  $result   =   mysql_query($sql) or die("Wrong Query".mysql_error());
	  if($result)
	    {
		return $result;
		}else{
		    return NULL;
		     }
	  }
	  
	  
	  
	  function fetch_array($rs)
	  {
	  return mysql_fetch_array($rs);
	  }
	  function fetch_assoc($rs)
	  {
	  return mysql_fetch_assoc($rs);
	  }
	  function fetch_object($rs)
	  {
	  return mysql_fetch_object($rs);
	  }
	  function fetch_row($rs)
	  {
	  return mysql_fetch_row($rs);
	  }
	  
	  function rows_id()
	  {
	  return mysql_insert_id();
	  }
	  
	  function total_rows($rs)
	  {
	  return mysql_num_rows($rs);
	  }
	  
	  function insert()
	  {
	    $query   =  "INSERT INTO `$this->table` SET ";
	    foreach($this->data as $key=>$val)
		{
		  $arr[$key]  =  "`$key`='$val'";
		}
		
		if(count($arr)>0)
		{
		  $query  .= implode(" , ",$arr );
		}
		else
		{
		echo "Wrong Query";
		exit;
		}
		
		//echo $query;
		return $this->exec($query);
	  }
	  
	   function update()
	  {
	    $query   =  "UPDATE `$this->table` SET ";
	    foreach($this->data as $key=>$val)
		{
		  $arr[$key]  =  "`$key`='$val'";
		}
		
		if(count($arr)>0)
		{
		  $query  .= implode(" , ",$arr );
		}
		else
		{
		echo "Wrong Query";
		exit;
		}
		
		foreach($this->cond as $k=>$v)
		{
		  $ar[$k]  =  "`$k`='$v'";
		}
		
		if(count($ar)>0)
		{
		  $query  .= " WHERE  ". implode(" and  ",$ar );
		}
		else
		{
		echo "Wrong Query";
		exit;
		}
		
		//echo $query;
		return $this->exec($query);
	  }
	  
	  function delete()
	  {
	    $query   =  "DELETE FROM  `$this->table` ";
	    foreach($this->cond as $k=>$v)
		{
		  $ar[$k]  =  "`$k`='$v'";
		}
		
		if(count($ar)>0)
		{
		  $query  .= " WHERE  ". implode(" and  ",$ar );
		}
		else
		{
		echo "Wrong Query";
		exit;
		}
		
		//echo $query;
		return $this->exec($query);
	  }
}

					 

?>