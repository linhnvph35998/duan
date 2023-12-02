<?php 
function add_danhmuc($tenloai){
    $sql="INSERT INTO danhmuc(name) values('$tenloai')";
    pdo_execute($sql);

}
function xoa_danhmuc($id){
    $sql="DELETE from danhmuc where id=".$id;
    pdo_execute($sql);
}
function loadone_danhmuc($id){
    $sql ="SELECT * from danhmuc where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function loadall_danhmuc(){
    $sql="SELECT * from danhmuc order by id desc";
    $danhmuc=pdo_query($sql);
    return $danhmuc;
}
function update_danhmuc($id,$tenloai){
    $sql="UPDATE danhmuc set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}

function load_ten_dm($iddm){
    $sql="SELECT * from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
}




?>