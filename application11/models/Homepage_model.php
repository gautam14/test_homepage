<?php
class Homepage_model extends CI_model {

	public function index(){
		die("User model");

	}
	public function add_menu($data){
		//echo "add menu model";
		$this->db->insert('menu', $data);		
		//print_r($data);
	}

    




	public function get_menu(){
		//$query = $this->db->get('menu');
		//return $query->result();

		//get_megamenu(0);
		$resultMainMenu = $this->db->query("SELECT * FROM `menu` WHERE `sub_menu` IS NULL AND `parent_menu` = '' ORDER BY menu_title ASC");
		//while($row = mysql_fetch_array($resultMainMenu)){

		if ($resultMainMenu->num_rows() > 0)
		{
		   //echo $i=0;
		   foreach ($resultMainMenu->result_array() as $row)
		   {
		   	echo "<li><a href='".$row['menu_link']."'>".$row['menu_title']."</a></li>";
		   	//echo "--->".$row['menu_link']."<br>";
		   	$resultSubmenu = $this->db->query("SELECT * FROM `menu` WHERE `sub_menu` IS NOT NULL AND `parent_menu` = 'pages'   ORDER BY menu_title ASC");
		   	//echo "<pre>";
			//print_r($resultSubmenu);
			print_r($row);
		   	if ($resultSubmenu->num_rows() >= 1 )
			{
				foreach ($resultSubmenu->result_array() as $rowSub)
			   {
			   	//if ($rowSub['parent_menu'] == $row['parent_menu']){
			   	
			   	//echo "<br>".$rowSub['menu_title']."<br>";
			  // }
			   }
			}

		   }
		}


		//echo $row['menu_title'] . '<br />'; // echo main menu
		// $resultSubmenu = $this->db->query("SELECT * FROM `menu` WHERE `sub_menu` IS NOT NULL ORDER BY menu_title ASC") or die(mysql_error());
		// if(mysql_num_rows($resultSubmenu) >= 1){
		// while($rowSub = mysql_fetch_array($resultSubmenu)){
		//     echo ' -- ' . $rowSub['menu_title'] . '<br />'; // echo sub menu
		// }
		// }
		//}
	}
}
?>