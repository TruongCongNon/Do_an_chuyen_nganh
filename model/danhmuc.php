<?php       // đây là phần tối ưu hóa controller, tập trung các câu sql đó thành những function


function insert_danhmuc($tenloai) {
    $query="select count(*) from danhmuc where name='$tenloai'";
    if(pdo_check($query)==false){
        return ' Tên danh mục đã tồn tại'; 
    } else {
        //đây là phần được bê từ index.php ở case adddm
        $sql="insert into danhmuc(name) values('$tenloai')"; 
        $count = pdo_execute($sql);
        return "Thêm danh mục thành công";
    }
    
    
}

    function delete_danhmuc($id) {
        $sql="delete from binhluan where idpro in (select id from sanpham  where iddm= ".$id.")";
        pdo_execute($sql);
        $sql="delete from sanpham where iddm=".$id;
        pdo_execute($sql);
       
        $sql="delete from danhmuc where id=".$id;
        pdo_execute($sql);
    }

    function loadall_danhmuc() {
        $sql="select * from danhmuc order by id desc";
        $listdanhmuc=pdo_query($sql);   
        return $listdanhmuc;    
    }

    function loadone_danhmuc($id) { 
        $sql="select * from danhmuc where id=".$id; // $id  lấy từ trên dòng đem xuống 
        $dm=pdo_query_one($sql);
        return $dm;   
    }

    function update_danhmuc($id,$tenloai) {    
        $query="select count(*) from danhmuc where name='$tenloai'";
        if(pdo_check($query)==true){
            //đây là phần được bê từ index.php ở case adddm
            $sql="update danhmuc set name='".$tenloai."' where id=".$id;
            pdo_execute($sql);
     
        return null;
        } else 
         return "Tên danh mục tồn tại";
      
    }

?>