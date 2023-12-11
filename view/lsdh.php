<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Đơn hàng của bạn</h1>
                </div>
                <div class="col-sm-9">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Đơn hàng </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col">Ngày đặt hàng</th>
                                        <!-- <th scope="col">Số lượng mặt hàng</th> -->
                                        <th scope="col">Tổng giá trị đơn hàng</th>
                                        <th scope="col">Tình trạng đơn hàng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                function get_user_bills($id){
                                    $sql = "SELECT * FROM bill where iduser = $id";
                                    return pdo_query($sql);
                                }
                                // print_r($_SESSION['s_user']['id']);
                                if (isset($_SESSION['s_user']['id'])) {
                                    $userId = $_SESSION['s_user']['id'];
                                    $list_bill = get_user_bills($id); // Hàm get_user_bills() lấy danh sách hóa đơn của người dùng từ cơ sở dữ liệu
                                    
                                    // print_r($list_bill);
                                    if ($list_bill !== null) {
                                        foreach ($list_bill as $item) {
                                            extract($item);
                                            $ttdh = get_ttdh($item['bill_status']);
                                            if($ttdh == 0) {
                                                
                                            }
                                            echo ' <tr>
                                                <td>HTPS_' . $id . '</td>
                                                <td>' . $ngaydathang . '</td>
                                                <td>' . $total . '</td>
                                                <td style="color: rgb(19, 229, 19);">' . $ttdh . '</td>
                                            </tr>';
                                        }
                                    } else {
                                        echo 'Không có hóa đơn';
                                    }
                                } else {
                                    echo 'Không có người dùng';
                                }
                                                   
                                    ?>
                                </tbody>
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