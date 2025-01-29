<?php

include_once("config.php");

class Database
{
      var $con;
	  
	  function connect_db()
	  {
	    $this->con  =  mysqli_connect(HOST,USER,PASS,DATABASE) or die("Failed connecting to mysql server".mysqli_connect_error());
		return $this->con;
	  }
	  
	  function exec($sql)
	  {
	  $result   =   mysqli_query($this->con,$sql) or die("Wrong Query".mysqli_error($this->con));
	  if($result)
	    {
		return $result;
		}else{
		    return NULL;
		     }
	  }
	  
	  
	  
	  function fetch_array($rs)
	  {
	  return mysqli_fetch_array($rs);
	  }
	  function fetch_assoc($rs)
	  {
	  return mysqli_fetch_assoc($rs);
	  }
	  function fetch_object($rs)
	  {
	  return mysqli_fetch_object($rs);
	  }
	  function fetch_row($rs)
	  {
	  return mysqli_fetch_row($rs);
	  }
	  
	  function rows_id()
	  {
	  return mysqli_insert_id($this->con);
	  }
	  
	  function total_rows($rs)
	  {
	  return mysqli_num_rows($rs);
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