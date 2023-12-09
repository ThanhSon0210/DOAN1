
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0" ><?=$user_admin."(".$email_admin.")"?> - <a href="logout.php">Thoát</a></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
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
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Sản Phẩm</h3>
                  <p>Có Tất Cả 22 Sản Phẩm bao gồm bàn phím, chuột, giá đỡ,...</p>
                  
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="index.php?page=products" class="small-box-footer">Xem bảng thống kê sản phẩm <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>Danh Mục</h3>
                  <p>Thống kê các danh mục có sản phẩm (các danh mục còn lại đang cập nhật)</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="index.php?page=thongke" class="small-box-footer">Xem bảng thống kê danh mục <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>Biểu Đồ Phân Tích</h3>

                  <p>Hiển thị các danh mục theo dạng biểu đồ để dễ quan sát</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="index.php?page=bieudo" class="small-box-footer">Xem biểu đồ <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>Tài Khoản</h3>
                  <p>quản lý tất cả những người sử dụng trang web bao gồm cả quản trị và khách hàng</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="index.php?page=users" class="small-box-footer">Xem quản lý tài khoản <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>

          
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->  
    <!-- /.content-wrapper -->