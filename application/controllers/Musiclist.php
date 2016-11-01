<?php
include "/usr/local/nginx/html/MySmarty/smarty/Smarty.class.php";
class Musiclist extends CI_Controller {
    public function index()
	{
	    $conn = new mysqli("127.0.0.1","root","jinlpt0817", "music");
	    if ($conn->connect_error) {
	        die("数据库连接错误: " . $conn->connect_error);
	    }
	    $sql = "SELECT * FROM info";
	    $result = $conn->query($sql);
	    $list = [];
	    $count = 0;
	    while($row = $result->fetch_assoc()){
	        $list[$count] = $row['name'];
	        $count = $count + 1;
	    }
	  $smarty = new Smarty();
	  $smarty->template_dir = "/usr/local/nginx/html/application/views";
	  $smarty->compile_dir = "/usr/local/nginx/html/MySmarty/complie";
	  $smarty->assign("data",$list);
	  $smarty->display("music.html");
	  $conn->close();
	}
}