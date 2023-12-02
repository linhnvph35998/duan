
<main class="catalog  mb ">

               
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
               <div class="mb">
                  <div class="box_title">TIN TỨC</div>
                  <div>
                     <img src="./img/thoi-trang-tham-hoa.webp" width="340px" >
                  </div><br>
                  <h3>Khi thời trang là thảm họa thì sẽ như thế nào ?</h3><br>
                  <p>Nguyễn Ngọc Dũng          31/05/2016<br>
                  Trong các tuần lễ thời trang, ngoài thời trang của các sao là vấn đề gây chú ý thì thời trang của các fashionista cũng là một chủ đề được...

                  </p><br>
                  <h4>Tại sao càng trưởng thành, bạn bè lại càng xa nhau?</h4><br>
                  <h4>Nghệ thuật phối màu vintage trong thời trang cổ điển</h4><br>
                  <h4>Zara ra mắt mẫu giày classic mới cạnh tranh với Nike</h4>
               </div>
              </div>

            <div class="boxleft">
                 <div class="banner">
                    <img id="banner" src="./img/slider_1.webp" alt="">
                    
                 </div><br>
            <h3>SẢN PHẨM MỚI</h3><br>
            <div class="items">
               <?php foreach($spnew as $sp){
                  extract($sp);
                  $hinh=$img_path.$img;
                  $link="index.php?act=sanphamct&idsp=$id";
                 echo '
              <div class="box_items">
                <div class="box_items_img">
                    <img src="'.$hinh.'" alt="">
                    
                </div><br>
                  <a class="item_name" href="'.$link.'">'.$name.'</a>
                  <p class="price">$'.$price.'</p>
                  
               </div>'; }?>
               
             <!-- <div class="box_items">
               <div class="box_items_img">
                  <img src="img/iphoneX.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="img/iphoneX.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./img/item1.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./img/item0.jfif" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./img/galaxyJ4.jfif" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./img/iphoneX.jpg" alt="">
                  <a class="add" href="">ADD TO CART</a>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./img/item0.jfif" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./img/anh5.jpg" alt="">
                  <div class="add" ><a href="danhsach.html">ADD TO CART</a></div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>  -->
             
             
            
        </div>
       
      </div>
            
           
        </main>
        <!-- BANNER 2 -->