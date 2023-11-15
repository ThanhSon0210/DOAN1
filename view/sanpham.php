<?php 
    $html_dm = '';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link = 'index.php?page=sanpham&iddm='.$id;
         $html_dm .='<a href="'.$link.'" style="text-decoration: none"><li class="list-group-item">'.$name.'</li></a>';
    }
    $html_dssp = showsp($dssp);
    if($titlepage !="") $title = $titlepage;
    else $title = "Sản Phẩm";
?>

<div class="row">
    <div class="col-md-12 my-3 shadow">
        <div style="border-radius: 25px; padding: 5px; color: white; background-color: rgba(253, 46, 0, 0.909);">
            <h1 style="text-align: center;"><?=$title?></h1>
        </div>
        <div class="row my-3">
            <div class="col-md-3">
                <ul class="list-group">
                    <?=$html_dm?>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <!-- Đây là cột chứa 4 sản phẩm -->
                    <?=$html_dssp?>
                </div>
            </div>
        </div>
    </div>
</div>

