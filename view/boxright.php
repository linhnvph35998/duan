<div class="boxright">
               
             <div class="dm">
             <div class="mb">
                <div class="box_title">DANH MỤC</div>
                <div class="box_content2 product_portfolio">
                  <ul >
                    <?php 
                    foreach($dsdm as $dm){
                      extract($dm);
                      $linkdm="index.php?act=sanpham&iddm=".$id;
                      echo '<li><a href="'.$linkdm.'">'.$name.' </a></li>';
                    } ?>
                     <!-- <li><a href="">Đồng hồ </a></li>
                     <li><a href="">Laptop</a></li>
                     <li><a href="">Điện thoại</a></li>
                     <li><a href="">Ipad</a></li>
                     <li><a href="">Tivi</a></li> -->
                  </ul>
                </div>
                
             </div>
             
             <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
             <div class="mb">
                <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
                <div class="box_content">
                  <?php 
                  foreach($dstop10 as $sp){
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $img=$img_path.$img;
                    echo '<div class="selling_products" style="width:100%;">
                  <img src="'.$img.'" alt="anh">
                  <a href="'.$linksp.'">'.$name.'</a>
                </div>';
                  }
                  ?>
                
                <!-- <div class="selling_products" style="width:100%;">
                  <img src="./img/clockforgirl.jpg" alt="anh">
                  <a href="">Đồng hồ đeo tay nữ</a>
                </div>
                <div class="selling_products" style="width:100%;">
                  <img src="./img/clockforgirl.jpg" alt="anh">
                  <a href="">Đồng hồ đeo tay nữ</a>
                </div>
                <div class="selling_products" style="width:100%;">
                  <img src="./img/clockforgirl.jpg" alt="anh">
                  <a href="">Đồng hồ đeo tay nữ</a>
                </div>
                <div class="selling_products" style="width:100%;">
                  <img src="./img/clockforgirl.jpg" alt="anh">
                  <a href="">Đồng hồ đeo tay nữ</a>
                </div>
                </div> -->
                </div>
             </div>
            </div>