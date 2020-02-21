<?php
//echo "main_menu";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-12">
          	<!-- <input type="submit" value="Create new Menu" class="btn btn-success"> -->
          	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_menu">
			  Add menu
			</button>

			<!-- Modal -->
			<div class="modal fade" id="add_menu" tabindex="-1" role="dialog" aria-labelledby="add_menuLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="add_menuLabel">Add menu</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form role="form" method="post" action="<?php echo base_url();?>admin/add_menu" class="addmenuForm">
				        <div class="card-body">
			              <div class="form-group">
			                <label for="menuName">Title</label>			                
			                <input type="text" name="menuItemTitle" id="menuItemTitle" class="form-control">
			              </div>
			              <div class="form-group">
			                <label for="menuLink">Link</label>
			                <input type="text" name="menuItemLink" id="menuItemLink" class="form-control">
			              </div>		              
			              <div class="form-group">
			                <input type="checkbox" value="1" name="subMenu" id="hasSubMenu">
	                      	<label for="checkSubMenu">Sub-menu</label>
			              </div>
			              <div class="form-group parent_dropdown">
			                <label for="parentName">Parent</label>
			                <select name="parentName" class="form-control custom-select parentName">
			                  <option selected disabled>Select one</option>
			                  <option>Home</option>
				              <option>Works</option>
				              <option>Services</option>
				              <option>Pages</option>
				              <option>About</option>
				              <option>Blog</option>
				              <option>Contact</option> 
			                </select>
			              </div>
			            </div>
			            <!-- /.card-body -->
			            <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <!-- <button type="button" class="btn btn-primary">Save</button> -->
					        <input type="submit" value="Submit" name="submit" class="btn btn-primary"/></div>
					    </div>
		        	</form>
			      </div>
			      
			    </div>
			  </div>
			</div>
            <!-- small box -->
<!--             <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div> -->
          </div>
          <!-- ./col -->


        </div>
        <!-- /.row -->
       


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
