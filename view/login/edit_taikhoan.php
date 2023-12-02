
<main class="catalog  mb ">

    <div class="boxleft">
    
        <div class="box_title">Cập nhập tài khoản</div>
        <div class="box_content form_account">
            <?php 
            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=edit_taikhoan" method="post">
                <div>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="email" value="<?=$email?>">
                </div>
                <div>
                    Tên đăng nhập
                    <input type="text" name="user" placeholder="user" value="<?=$user?>">
                </div>
                Mật khẩu
                <div>
                    <input type="password" name="pass" placeholder="pass" value="<?=$pass?>">
                </div>
                Địa chỉ
                <div>
                    <input type="text" name="address" placeholder="address" value="<?=$address?>">
                </div>
                Điện thoại
                
                <div>
                    <input type="hidden" name="id" value="<?=$id?>" id="">
                    <input type="text" name="tel" placeholder="tel" value="<?=$tel?>">
                </div><input type="submit" value="Cập nhập" name="capnhap">
                <input type="reset" value="Nhập lại">
                </div>
                
                
            </form>
            <?php 
                if(isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
            ?>
            
        </div>
<?php
    include "view/boxright.php";
    ?>
    </div>
    

</main>
