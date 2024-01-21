
<div class="content">
<div class="block-text">
    <div class="blockone">
            <div class="favorite mb">
                <?php
                    extract($onesp);
                ?>
            <div class="boxtitle"><?=$name?></div>
            <div class="image">
                <?php
                    $img=$img_path.$img;
                    echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                    echo $mota;
                ?>
            </div>  
        </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            });
            </script>
            <div class="bl" id="binhluan"></div>

            </div>
        <div class="favorite mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="image col">
                <?php   
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                    }
                ?>
                </div>  
            </div>
        </div>
        <div class="box-right">
            <?php
                include "boxright.php";
            ?>
        </div>
    </div>
</div>
</div>
