<?php
require("frames/header.ini");
require("frames/main_header.ini");
include("frames/main-sidebar.ini");
require("data.php");
?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lí Bệnh viện
        <small>Danh sách</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Bệnh viện</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <div class="box box-primary">
            <div class="box-header with-border">
        <div class="alert alert-success" style="display:none;" id="delete_success">
        <strong id="success_content"></strong>
        </div>
        <div class="alert alert-danger" style="display:none;" id="delete_failed">
        <strong id="failed_content"></strong>
        </div>
            </div>
        </div>
        <div class="col-md-3 clear-pd-right" >
        <form action="#" method="post">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">THÊM MỚI</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
             <div class="box-body">
              	<div class="input-group">
                  <span class="input-group-addon">Tên BV</span>
                  <input type="text" class="form-control" placeholder="Tên bệnh viện ">
                </div>
                <br/>
                
                <div class="input-group">
                	<span class="input-group-addon">Tỉnh/TP</span>
	                <select class="form-control select2">
	                  
	                  <option>Alaska</option>
	                  <option>California</option>
	                  <option>Delaware</option>
	                  <option>Tennessee</option>
	                  <option>Texas</option>
	                  <option>Washington</option>
	                </select>
                </div>
                <br/>
                <div class="input-group">
                	<span class="input-group-addon">Quận/Huyện</span>
	                <select class="form-control select2">
	                  <option selected="selected">Hai Bà Trưng</option>
	                  <option>Alaska</option>
	                  <option>California</option>
	                  <option>Delaware</option>
	                  <option>Tennessee</option>
	                  <option>Texas</option>
	                  <option>Washington</option>
	                </select>
              </div>
              <br>
              <div class="input-group">
                	<span class="input-group-addon">Xã/Phường</span>
	                <select class="form-control select2">
	                  <option selected="selected">Đồng Tâm</option>
	                  <option>Alaska</option>
	                  <option>California</option>
	                  <option>Delaware</option>
	                  <option>Tennessee</option>
	                  <option>Texas</option>
	                  <option>Washington</option>
	                </select>
              </div>
              <br>
              <div class="input-group">
                  <span class="input-group-addon">Đánh giá</span>
                  <input type="text" class="form-control" placeholder="Đánh giá...">
                </div>
                <br/>
                <div class="form-group">
                  <label>Mô tả</label>
                  <textarea class="form-control" rows="3" placeholder="Nhập mô tả..." style="resize: none;"></textarea>
                </div>
                <br/> 
             </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <button type="submit" class="btn btn-primary btn-block margin-bottom">TẠO</button>
          </form>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quản lí Bệnh viện</h3>

              
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" onclick="deleteObject('delbvs','benhvien')"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm edit" onclick="edit('benhvien_edit');"><i class="fa fa-edit"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              
                <!-- /.pull-right -->
              </div>
              <div   class="table-responsive mailbox-messages">
                <table id="example1" class="table table-bordered table-striped">
                   <thead class="tb-head">
	                <tr >
	                  <th style="width: 1px; visibility: hidden;"></th>
	                  <th>Tên bệnh viện</th>
	                  <th>Địa chỉ</th>
	                  <th>Mô tả</th>
	                  <th>Đánh giá</th>
	                </tr>
                  </thead>
                  <tbody id="tbody">
                   <?php 
                  $data=getBenhvien();
                  if ($data) {
                    foreach ($data as $acc) {
                  ?>
                  <tr>
                    <td><input type="checkbox" value=<?php echo $acc['benhvien_id'];?>></td>
                    <td><a href="#"><?php echo $acc['tenbenhvien'];?></a></td>
                    <td><?php echo $acc['diachi'];?></td>
                    <td><a href="#"><?php echo $acc['mota'];?></a></td>
                    <td><?php echo $acc['danhgia'];?></td>
                  </tr>
                  <?php 
                     }}
                  ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
          
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm edit" onclick="edit('benhvien_edit');"><i class="fa fa-edit"></i></button>
                  
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
<?php
include("frames/main-footer.ini");
include("frames/footer.ini");
?>