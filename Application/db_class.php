<?php
//création de classe
class DB
{
public $host='localhost';
public $username='';
public $password='';
public $database='test';
public $db='';
public function __construct($host=null, $username=null, $password=null, $database=null)
	{
		if($host = null)
		{
			$this->host=$host;
			$this->username=$username;
			$this->password=$password;
			$this->database=$database;
			try
			{
			$this->db=new PDO('mysql: host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
			}	catch(PDOException $e)
				{
					die('<h1>Impossible de se connecter à la base de donnée</h1>');
				}
		}
	}
	function query($sql, $data=array())
	{$bddd = new PDO('mysql: host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
	$sql='select * from products';
	$req=$bddd->prepare($sql);
	$req->execute($data);
	return $req->fetchAll(PDO::FETCH_OBJ);
   }
}
?>