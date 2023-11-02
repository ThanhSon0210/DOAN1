<?php 
    $html_dssp = '';
    $stt=1;
    foreach ($productlisst as $item) {
        extract($item);
        if($img!=""){
            $img_file = '../'.PATH_IMG.$img;
            if(file_exists($img_file)){
                $hinh = '<img src="'.$img_file.'" width="80px">';
            }else{
                $hinh = 'Hình không tồn tại trên host';
            }
        }else{
            $hinh = 'Chưa có hình';
        }
        $linkedit = 'index.php?page=updatespform&id='.$id;
        $linkdel = 'index.php?page=deletesp&id='.$id;
        $html_dssp .='  <tr>
                            <td>'.$stt.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$name.'</td>
                            <td>'.number_format($price,0,".",".").'</td>
                            <td><a href="'. $linkedit.'">Sửa</a> - <a href="'. $linkdel.'">Xóa</a></td>
                        </tr>';
                        $stt++;
    }
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
                        Thêm sản phẩm mới
                    </button>
            </div>
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
                                        <th scope="col">#</th>
                                        <th scope="col">Hình</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?=$html_dssp?>
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
                <h4 class="modal-title">Thêm sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="price2" placeholder="Giá củ sản phẩm">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Hình ảnh</label>
                        <input type="file" name="img" class="col-form-label" id="">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Sản phẩm New</label>
                        <input type="checkbox" name="chknew" id="">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Sản phẩm Hot</label>
                        <input type="checkbox" name="chkhot" id="">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Mô tả</label>
                        <textarea name="mota" id="" cols="30" rows="5" style="width:100%; border:1px #CCC solid" class="col-form-label"></textarea>                        
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="level" class="col-form-label">Chọn danh mục:</label>
                            <select class="form-control select2" name="level">
                                <option selected value="member">Danh mục</option>
                                <option value="admin">Danh mục 1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary">Thêm mới</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>