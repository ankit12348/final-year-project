<?php
session_start();
class users
{

	public $host = "localhost";
	public $username = "root";
	public $pass = "";
	public $db_name = "project";
	public $conn;
	public $data;
	public $cat;
	public $que;
	public $ansr;
	public $doc;
	public $name;

	public function __construct()
	{
		$this->conn = new mysqli($this->host, $this->username, $this->pass, $this->db_name);
		if($this->conn->connect_errno)
		{
			die ("database connection failed".$this->conn->connect_errno);
		}
	}

	public function signup($check)
	{
		$query=$this->conn->query("select * from sign_up where email = '$check'");
		$row = $query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			return true;
		}
	}
	public function process($data)
	{
		$this->conn->query($data);
		return true;
	}

	public function signin($email, $pass)
	{
		$query=$this->conn->query("select * from sign_up where email='$email' and password='$pass'");
		$row = $query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $pass;
			return true;
		}
		else
		{
			return false;
		}
	}

	public function admin($email, $pass)
	{
		$query=$this->conn->query("select * from admin where email='$email' and password='$pass'");
		$row = $query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$_SESSION['email'] = $email;
			return true;
		}
		else
		{
			return false;
		}
	}

	public function admin_user($email)
	{
		$query=$this->conn->query("select * from admin where email='$email'");
		$row = $query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$this->name[] = $row;
		}
		return $this->name;
	}

	public function profile($email)
	{
		$query=$this->conn->query("select * from sign_up where email='$email'");
		$row = $query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$this->data[] = $row;
		}
		return $this->data;
	}

	public function category()
	{
		$query=$this->conn->query("select * from categories");
		while($row = $query->fetch_array(MYSQLI_ASSOC))
		{
			$this->cat[] = $row;
		}
		return $this->cat;
	}

	public function questions($qus)
	{
		$query=$this->conn->query("select * from questions where category='$qus'");
		while($row = $query->fetch_array(MYSQLI_ASSOC))
		{
			$this->que[] = $row;
		}
		return $this->que;
	}

	public function answer($data)
	{
		$ans=implode("", $data);
		$right=0;
		$wrong=0;
		$no_ans=0;
		$query=$this->conn->query("select id, ans from questions where category='".$_SESSION['cat']."'");
		while($qust = $query->fetch_array(MYSQLI_ASSOC))
		{
			if($qust['ans'] == $_POST[$qust['id']])
			{
				$right++;
			}
			elseif ($_POST[$qust['id']] == "No_Attempt") 
			{
				$no_ans++;
			}
			else
			{
				$wrong++;
			}
		}
		$array=array();
		$array['right'] = $right;
		$array['wrong'] = $wrong;
		$array['no_ans'] = $no_ans;
		return $array;
	}

	public function ans_show($data)
	{
		$query=$this->conn->query("select * from questions where category='".$_SESSION['cat']."'");
		while($row = $query->fetch_array(MYSQLI_ASSOC))
		{
			$this->ansr[] = $row;
		}
		return $this->ansr;
	}

	public function about($data)
	{
		$this->conn->query($data);
		return true;
	}

	public function add($rec)
	{
		$query=$this->conn->query($rec);
		return true;
	}

	public function delete($cat)
	{
		$query=$this->conn->query("delete from questions where category='$cat'");
		return true;
	}
	
	public function upload($doc)
	{
		$this->conn->query($doc);
		return true;
	}

	public function file($data)
	{
		$query=$this->conn->query("select * from search where category ='$data'");
		while($row = $query->fetch_array(MYSQLI_ASSOC))
		{
			$this->doc[] = $row;
		}
		return $this->doc;
	}

	public function url($url)
	{
		header("location:".$url);
	}

}

?>