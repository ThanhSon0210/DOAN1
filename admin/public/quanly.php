<?php
    $get_order =get_order();
    $hoadon ="";
    
  foreach ($get_order as $item) {
    extract($item);
    
        if($bill_status==0) $tt='<span class="badge rounded-pill alert-warning">đơn hàng mới</span>' ;
        if($bill_status==1) $tt='<span class="badge rounded-pill alert-success">Đã xác nhận</span>';
        if($bill_status==2) $tt='<span class="badge rounded-pill alert-success">Đang giao hàng</span>';
        if($bill_status==3) $tt='<span class="badge rounded-pill alert-success">Hoàn thành</span>';
        if($bill_status==4) $tt='<span class="badge rounded-pill alert-danger">Giao hàng thất bại</span>';
        if($bill_status==5) $tt='<span class="badge rounded-pill alert-danger">Cancelled</span>';
    $hoadon .='<tr>
        <td>'.$bill_name.'</td>
        <td>'.number_format($total,0,",",".").'VNĐ</td>
        <td>'.$tt.'</td>
        <td>'.$ngaydathang.'</td>
        <td class="text-end" style="">
            <a href="index.php?page=quanly_chitiet&id='.$id.'" class="btn" style="color:white;background-color: #0bd23d">Chi tiết</a>
        </td>
    </tr>';
  }
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>quản lý đơn hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Thành viên</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th scope="col">Tên khách hàng</th>
                                        <th scope="col">Tổng tiền</th>
                                        <th scope="col">Trang thái</th>
                                        <th scope="col">Ngày đặt hàng</th>
                                        <th scope="col">Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <!-- <td>Tuấn</td>
                                        <td>999999</td>
                                        <td>đang xử lý</td>
                                        <td>6/12/2023</td>
                                        <td class="text-end" style="">
                                            <a href="index.php?pg=orders-detail&id='.$id.'" class="btn" style="color:white;background-color: #BE1529">Chi tiết</a>
                                         <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
                                            chi tiết
                                        </button>
                                        </td> -->
                                        <?=$hoadon?>
                                    </tr>
                                </tbody>
                                <!-- <tfoot>
                                    
                                <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên chủ đề</th>
                                        <th scope="col">Chế độ</th>
                                        <th scope="col">Số lượng câu hỏi</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm thành viên mới</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Tên tài khoản">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="level" class="col-form-label">Chức vụ:</label>
                            <select class="form-control select2" name="level">
                                <option selected value="member">Thành viên</option>
                                <option value="admin">Quản trị viên</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>