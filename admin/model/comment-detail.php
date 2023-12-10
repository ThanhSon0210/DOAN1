<?php
    function ql_bl(){
        $sql= "SELECT * FROM binhluan ";
        return get_all($sql);
     }
     function del_bl($id){
        $sql = "DELETE FROM binhluan WHERE id =".$id;
        delete($sql);
        $tb = "Đã xóa danh mục";
        return $tb;
        
     }
?>