<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Helper function to check whether the url slug already exists
 */
if(!function_exists('isUrlExists')){
    function isUrlExists($tblName, $urlSlug){
        if(!empty($tblName) && !empty($urlSlug)){
            $ci = & get_instance();
            $ci->db->from($tblName);
            $ci->db->where('menu_link',$urlSlug);
            $rowNum = $ci->db->count_all_results();
            return ($rowNum>0)?true:false;
        }else{
            return true;
        }
    }
}

if(!function_exists('get_megamenu')){
	function get_megamenu($parent_id){
		//$query = $this->db->get('menu');
		//return $query->result();

		$menu = "";
		$ci = & get_instance();
		$sqlquery = $ci->db->query("SELECT * FROM `menu` WHERE `sub_menu` IS NULL AND `parent_menu` = '' ORDER BY `sub_menu` ASC");
		if ($sqlquery->num_rows() > 0)
		{
		   echo $i=0;
		   foreach ($sqlquery->result_array() as $row)
		   {
		   	  
		      //echo $row['parent_menu'];
		      //echo $row['parent_slug'];
		      //echo $row['menu_title'];
 
			$menu .="<li><a href='".$row['menu_link']."'>".$row['menu_title']."</a>";

			$menu .= "<ul>".get_megamenu($i)."</ul>"; //call  recursively

			$menu .= "</li>";
			echo $i++;
			
		   }
		   return $menu; 
		   //die();
		}

		// echo "<pre>";
		// print_r($sqlquery);
		//$sqlquery = " SELECT * FROM menu where status='1' and parent_id='" .$parent_id . "' ";
	}
}


if(!function_exists('get_megamenu1')){
	function get_megamenu1($parent_id){
		
	}
}

?>