

<?php 
if(is_array($sanpham)){
  extract($sanpham);
} 
$hinhpath="../upload/".$img;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
}
else {
    $hinh="no photo";
}


?>
<div class="row2">
         <div class="row2 font_title">
          <h1>SỬA SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <select  name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
            <?php foreach($danhmuc as $tt){
              extract($tt);
              if($iddm==$id){
                   echo  '<option value="'.$id.'" selected>'.$name.'</option>';
           }
              else
                  echo  '<option value="'.$id.'" >'.$name.'</option>';
                }
           ?>
           </select> <input type="text" name="kyw" id="" style=width:150px>
           <input type="submit" name="listok" value="Chọn">
           </div>



           <div class="row2 mb10">
            <label>Tên sản phẩm</label> <br>
            <input type="text" value="<?=$name?>" name="tensp">
           </div>

           <div class="row2 mb10">
            <label>Giá</label> <br>
            <input type="text" value="<?=$price?>" name="giasp" >
           </div>

           <div class="row2 mb10">
            <label>Hình sản phẩm</label> <br>
            <input type="file" name="hinh" ><br>
            <?=$hinh?>
           </div>

           <div class="row2 mb10">
            <label>Mô tả</label> <br>
            <input type="text" value="<?=$mota?>" name="mota" cols="30" rows="10" >
           </div>

           
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?=$id?>">
         <input class="mr20" type="submit" name="capnhap"value="CẬP NHẬP">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&& ($thongbao!="")){ echo $thongbao;}?>
          </form>
         </div>
        </div>

        