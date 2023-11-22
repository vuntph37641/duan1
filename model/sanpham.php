<?php
    
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham_top10(){
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
        $listsanpham=pdo_query($sql);
        return $listsanpham ;
    }
    function loadall_sanpham_home(){
        $sql="select * from sanpham where 1 order by id desc limit 0,9";
        $listsanpham=pdo_query($sql);
        return $listsanpham ;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql="select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadone_sanpham($id){
        $sql="select * from sanpham where id= ".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($id,$iddm,$tensp,$giasp,$hinh,$mota){
        if($hinh!="")
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
    else
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        pdo_execute($sql);
    }

?>
