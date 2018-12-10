<?php  
include_once('../database/DBcon.php');
class Post 
{
	private $userid;
	private $post_time;
	private $post_text;
	private $file;
	
	function __construct($userid,$post_text,$file)
	{
		$this->userid=$userid;
		$this->post_time=date('Y/m/d h:m:s');
		$this->file=$file;
		$this->post_text=$post_text;
	}
	public function addpost(){
		$con=new DBcon();
		$sql="INSERT INTO sociopro.posts(`user_id`, `post_text`, `file`, `post_date`) VALUES (?,?,?,?)";
		$pre=$con->connect()->prepare($sql);
		$pre->execute([$this->userid,$this->post_text,$this->file,$this->post_time]);
		return "SUCCESS";


	}
	public static function fetchposts(){
		$con=new DBcon();
		$sql="SELECT users.username, posts.post_id, posts.post_text , posts.post_date from sociopro.posts INNER JOIN sociopro.users on posts.user_id=users.id";
		$pre=$con->connect()->prepare($sql);
		$pre->execute([]);
		$rows=array();
		$count=$pre->rowCount();
		if ($count>0) {
			$i=0;
		while ($row=$pre->fetch(PDO::FETCH_ASSOC)) {
			$rows[$i]=$row;
			$i++;
		}
			
		}

		return $rows;

	}
}
?>