<?php 
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "global.php";
include "view/header.php"; 
$spnew=loadall_sanpham_home();
$dsdm=loadall_danhmuc();
$dstop10=loadall_sanpham_top10();

    if(isset($_GET['act']) && ($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "sanpham":
                if(isset($_POST['kyw']) && $_POST['kyw']!=""){
                    $kyw=$_POST['kyw'];

                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm']) && $_GET['iddm']>0){
                    $iddm=$_GET['iddm'];
                   
                }
                else{
                    $iddm=0;
                }
                $tendm=loadten_sanpham($iddm);
                $dssp=loadall_sanpham($kyw,$iddm);
                include "view/sanpham.php";
                
                break;
            case "sanphamct":
                if(isset($_POST['guibinhluan'])){
                    insert_binhluan($_POST['idpro'], $_POST['noidung']);
                }
                if(isset($_GET['idsp']) && $_GET['idsp']>0){
                    $sp=loadone_sanpham($_GET['idsp']);
                    $sp_cungloai=loadsp_cungloai($_GET['idsp'],$sp['iddm']);
                    $binhluan=load_binhluan($_GET['idsp']);
                    include "view/chitietsanpham.php";
                }
                
                break;
            case "dangky":
                if(isset($_POST['dangky']) && $_POST['dangky']){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Đã đăng ký thành công, vui lòng đăng nhập sử dụng";
                }

                    include "view/login/dangky.php";
                    break;
                case "dangnhap":
                    if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser=dangnhap($user,$pass);
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;
                            header('location:index.php');
                        }else{
                            $thongbao="Tài khoản hoặc mật khẩu sai";
                        }
                    
                    }
        
                            include "view/login/dangky.php";
                            break;
                 case "dangnhap":
                    if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser=dangnhap($user,$pass);
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;
                            header('location:index.php');
                        }else{
                            $thongbao="Tài khoản hoặc mật khẩu sai";
                        }
                    
                    }
        
                            include "view/login/dangky.php";
                            break;
                case "edit_taikhoan":
                                if(isset($_POST['capnhap']) && $_POST['capnhap']){
                                    $user=$_POST['user'];
                                    $pass=$_POST['pass'];
                                    $email=$_POST['email'];
                                    $address=$_POST['address'];
                                    $tel=$_POST['tel'];
                                    $id=$_POST['id'];
                                    update_taikhoan($id,$user,$email,$address,$pass,$tel);
                                    $_SESSION['user']=dangnhap($user,$pass);
                                    header('location:index.php?act=edit_taikhoan');
                                
                                }
                    
                             include "view/login/edit_taikhoan.php";
                            break;
                    case "thoat":
                        session_unset();
                        header('location:index.php');
                        break;
            }

           
    }
    else{
        include "view/home.php";
    }
        
        include "view/footer.php";


?>
        
        
       