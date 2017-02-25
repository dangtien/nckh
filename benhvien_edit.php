<?php
require("frames/header.ini");
require("frames/main_header.ini");
include("frames/main-sidebar.ini");
?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa thông tin
        <small>Bệnh viện</small>
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
      <form action="#" method="post">
        <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Thông tin</h3>
            </div>
            <div class="box-body">
            	<div class="input-group">
                	<span class="input-group-addon">Tên bệnh viện </span>
                	<input type="text" class="form-control" placeholder="Tên bệnh viện ">
                </div>
                <br/>
                <div class="input-group">
                	<span class="input-group-addon">Đánh giá</span>
                	<input type="text" class="form-control" placeholder="Đánh giá độ tin cậy">
                </div>
                <br/>
                <div class="form-group">
                  <label>Mô tả</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." style="resize: none;"></textarea>
                </div>
                <br/>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Địa chỉ</h3>
            </div>
            <div class="box-body">
			<form>
                <div class="input-group">
                	<span class="input-group-addon">Tỉnh/Thành phố</span>
	                <select class="form-control select2">
	                  <option selected="selected">Hà Nội</option>
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
                
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <button class="btn btn-success btn-edit" type="submit">LƯU THAY ĐỔI</button>
        </div>
      </form>
    </div>
    </section>
<?php
include("frames/main-footer.ini");
include("frames/footer.ini");
?>