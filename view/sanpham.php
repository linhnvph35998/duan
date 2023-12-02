<style>
  td{
    padding:0 20px;
  }

</style>
<main class="catalog  mb ">
 
    <div class="boxleft">
      
        <div class="box_title1">SẢN PHẨM  <strong> <?= " ".$tendm?></strong></div>
        <div class="box_content1"><div class="items">
          <?php 
          foreach($dssp as $sp){
            extract($sp);
            $hinh=$img_path.$img;
            $link="index.php?act=sanphamct&idsp=$id";
           echo '
        <div class="box_items">
          <div class="box_items_img">
              <img src="'.$hinh.'" alt="" >
              
          </div>
            <a class="item_name" href="'.$link.'">'.$name.'</a>
            <p class="price">$'.$price.'</p>
            
         </div>'; }
          ?>
        </div>
      </div>

    
     
    </div>
    

  </main>
  <!-- BANNER 2 -->