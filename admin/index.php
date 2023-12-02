<?php
include "../model/danhmuc.php";
include "../model/sanpham.php";
    include "header.php";
    include "../model/pdo.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case 'adddm':
                
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    
                    $tenloai=$_POST['tenloai'];
                    add_danhmuc($tenloai);
                    $thongbao="Thêm hành công";

                }
                include "add.php";
                break;

            case "listdm":
                $danhmuc=loadall_danhmuc();
                include "list.php";
                break;  
            case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                xoa_danhmuc($_GET['id']);
            }
            $danhmuc=loadall_danhmuc();
                include "list.php";
                break;
            case "suadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm=loadone_danhmuc($_GET['id']);
            }
                include "update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhap'])&& ($_POST['capnhap'])){
                    
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="Cập nhập hành công";

                }
                
                $sql="SELECT * from danhmuc order by id desc";
                $danhmuc=pdo_query($sql);
                include "list.php";
                break;
                // sản phẩm---------------------


                case 'addsp':
                
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];

                    $target_dir="../upload/";
                    $hinh=$_FILES['hinh']['name'];
                    $target_file=$target_dir.basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                    add_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    
                    $thongbao="Thêm hành công";

                }
                $danhmuc=loadall_danhmuc();
                include "sanpham/add.php";
                break;

            case "listsp":
                if(isset($_POST['listok'])&& ($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }
                else{
                    $kyw="";
                    $iddm=0;

                }
                $danhmuc=loadall_danhmuc();
                $sanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;  
            case "xoasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                xoa_sanpham($_GET['id']);
            }
                $sanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case "suasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham=loadone_sanpham($_GET['id']);
            }
                $danhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhap'])&& ($_POST['capnhap'])){
                    
                    $iddm=$_POST['iddm'];
                    $id=$_POST['id'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];

                    $target_dir="../upload/";
                    $hinh=$_FILES['hinh']['name'];
                    $target_file=$target_dir.basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                      update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                    $thongbao="Cập nhập hành công";

                }
                $danhmuc=loadall_danhmuc();
                $sanpham=loadall_sanpham();
                include "sanpham/list.php";
                break;

        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
