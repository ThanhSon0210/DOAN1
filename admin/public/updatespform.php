<?php   
    extract($detail);
    $catalog_html = '';
    foreach ($cataloglist as $item) {
        extract($item);
        if($id==$iddm){
            $slc = "Selected";
        }else{
            $slc = "";
        }
        $catalog_html .= '<option value="'.$id.'" '.$slc.'>'.$name.'</option>';
    }
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm SP</h1>
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
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                        <form action="" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="level" class="col-form-label">Chọn danh mục:</label>
                                        <select class="form-control select2" name="level">
                                            <option value="sonnu">Danh Mục</option>
                                            <?=$catalog_html?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm">
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
                                
                                
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-primary">Cập nhật</button>
                                
                            </div>
                        </form>
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

