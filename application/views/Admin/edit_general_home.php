<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New user
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>Admin/add_slider">Add New user </a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box-body" style="min-height: 73vh">
           <?php echo form_open_multipart(base_url('Admin/update_general_home')) ?>
           <table class="table table-bordered" id="example1">
             <tr>
              <td><input type="hidden" name="id" value="<?php echo @$edit->id ?>"></td>
               <th>Site Title</th>
               <td><input type="text" name="site_title" value="<?php echo @$edit->site_title ?>" class="form-control" ></td>
               <th>Special Text</th>
               <td><input type="text" name="specialty_text" value="<?php echo @$edit->specialty_text ?>" class="form-control"></td>
               <th>Logo</th>
               <td>
                <img src="<?php echo base_url('uploads/'.$edit->logo) ?>" width="100px" height="100px">
                <input type="file" name="logo" class="form-control">
              </td>
             </tr>
             <tr>
               <th>Address</th>
               <td><input type="text" name="address" value="<?php echo @$edit->address ?>" class="form-control"></td>
               <th>Phone</th>
               <td><input type="text" name="phone" value="<?php echo @$edit->phone ?>" class="form-control"></td>
               <th>Email</th>
               <td><input type="text" name="email" value="<?php echo @$edit->email ?>" class="form-control"></td>
             </tr>
             <tr>
               <td colspan="7"><input type="submit" value="Update" class="btn btn-block btn-primary"></td>
             </tr>
           </table>
           </form>
        </div>
        </div>
        </div>
        
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/footer_c');?>
