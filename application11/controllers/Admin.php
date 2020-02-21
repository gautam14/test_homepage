<?php 

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->load->helper('url');
		//$this->load->helper('form');
		$this->load->model("homepage_model");
		$this->load->helper('common');
	}

	public function index(){
		$this->load->view('template/dashboard/header');
		$this->load->view('template/dashboard/sidebar');
		$this->load->view('admin');
		$this->load->view('template/dashboard/footer');
		
	}
	public function edit_homepage(){
		$this->load->view('template/dashboard/header');
		$this->load->view('template/dashboard/sidebar');
		$this->load->view('template/dashboard/pages/edit_homepage');
		$this->load->view('template/dashboard/footer');
	}

	public function main_menu(){
		$this->load->view('template/dashboard/header');
		$this->load->view('template/dashboard/sidebar');
		$this->load->view('template/dashboard/pages/main_menu');
		$this->load->view('template/dashboard/footer');
	}

	public function add_menu(){
		if($this->input->post('submit') == true){
			if(!empty($this->input->post('parentName'))) {
				$parent_menu = $this->input->post('parentName');
			}else {
				$parent_menu = "";
			}
			$parentURL = strtolower(url_title($parent_menu));
			$menuItemLink = $this->input->post('menuItemLink');
            if(isUrlExists('menu',$menuItemLink)){
               $menuItemLink = $menuItemLink.'-'.time(); 
            }
            //$postData['url_slug'] = $titleURL;
			$data = array(
				'menu_title' => $this->input->post('menuItemTitle'),
				'menu_link' => $menuItemLink,
				'sub_menu' => $this->input->post('subMenu'),				
				'parent_menu' => $parent_menu,
				'parent_slug' => $parentURL
			); 
			//print_r($data);
			//die("add_menu");
			$this->homepage_model->add_menu($data);
			redirect('admin/main_menu');


		}

	}

	public function get_menu(){
			//get_megamenu(0);
			//die("test");
			$data = $this->homepage_model->get_menu();

			print_r($data);
			die("test");
			$i=1;
			$menu_data = array();
			$menu_item = array();
			//$submenu_data = array();
			foreach($data as $row)
			{
					//$i++;
					if($row->sub_menu != NULL && $row->parent_slug != ''){
						//$menu_item['title'] = $row->menu_title;
						//$menu_item['menu_link'] = $row->menu_link;
						$menu_item['parent_title'] = $row->parent_menu;
					    $menu_item['parent_link'] = $row->parent_slug;

						if (in_array($menu_item['parent_title'], $menu_item)) {				 	
							$submenu_data['submenu_title'] = $row->menu_title;
							$submenu_data['submenu_link'] = $row->menu_link;
								
						}

					 $menu_item[] = $submenu_data;
					 $menu_data[] = $menu_item;

					// if($row->parent_menu == $menu_item['title']){
					// 	$menu_item['sub-menu']['submenu_title'] = $row->menu_title;
					// 	$menu_item['sub-menu']['submenu_link'] = $row->menu_link;
					// }
					// $submenu_data[] = $menu_item['sub-menu'];
					 
				}else{
					$menu_item['title'] = $row->parent_menu;
					$menu_item['menu_link'] = $row->parent_slug;
					$menu_item['else'] = "else";
				}
				
				//$menu_data[] = $menu_item;
				//$menu_data[] = $submenu_data;
			}
			echo "<pre>";
			print_r($menu_data);
			print_r($submenu_item);
			
			//$this->load->view('edit_homepage')
		}
}

?>