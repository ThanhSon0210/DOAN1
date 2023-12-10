<?php
    //cataloglist
    $catalog_html='';
    $i=1;
    foreach ($cataloglist as $item) {
        extract($item);
        $linkedit='<a href="index.php?page=updatedmform&id='.$id.'">Sửa</a>';
        $linkdel='<a href="index.php?page=deldm&id='.$id.'">Xóa</a>';
        $catalog_html.='<tr>
                            <td>'.$i.'</td>
                            <td>'.$name.'</td>
                            <td> '.$linkedit.' / '.$linkdel.'</td>
                        </tr>';
                        $i++;
    }
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chuyên mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Chuyên mục</li>
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
                    Thêm danh mục
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

                            <h3 style="color:red"><?=$tb?></h3>
                            <form action="index.php?page=search" method="post">
                                <input type="text" name="ktw" placeholder="nhập tên danh mục">
                                <button type="submit" name="btnsearch">Tìm kiếm</button>
                            </form>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên danh mục</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?=$catalog_html?>
                                
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
                <h4 class="modal-title">Thêm danh mục mới</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?page=addcatalog" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Tên danh mục:</label>
                        <input type="text" class="form-control" name="name" placeholder="Tên danh mục">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    
                    <button type="submit" name="btnadd" class="btn btn-primary">Thêm</button>
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>