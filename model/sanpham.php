<?php 
function add_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql="INSERT INTO sanpham(name,price,img,mota,iddm) 
    values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);

}
function xoa_sanpham($id){
    $sql="DELETE from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql ="SELECT * from sanpham where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function loadten_sanpham($iddm){
    if($iddm>0){
    $sql ="SELECT * from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
}
    else{
        return "";
    }
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="SELECT * from sanpham where '1'";
    if($kyw!=""){
        $sql.="and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.="and iddm='".$iddm."'";
    }
    $sql.="order by id desc";
    $sanpham=pdo_query($sql);
    return $sanpham;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
    $sql="UPDATE sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
else
    $sql="UPDATE sanpham set iddm='".$iddm."' ,name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
    pdo_execute($sql);

    
}
//hiển thị 9 sản phẩm mới nhất
function loadall_sanpham_home(){
    $sql="SELECT * FROM sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
//hiển thị top 10 san phẩm có lượt xem cao
function loadall_sanpham_top10(){
    $sql="SELECT * FROM sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadsp_cungloai($id,$iddm){
    $sql="SELECT * from sanpham where iddm=$iddm and id <> $id ";
    $ketqua=pdo_query($sql);
    return $ketqua;
}



?>