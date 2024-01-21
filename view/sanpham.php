<div class="content">
    <div class="blockone">
            <div class="favorite mb">
                
            <div class="boxtitle">SẢN PHẨM <strong><?=$tendm?></strong></div>
            <div class="image">
                <?php
                    $i=0;
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img; 
                            if(($i==2) || ($i==5) || ($i==8) || ($i==11)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '<div class="introduc1 mr '.$mr.'">
                                <div class="row mn"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                <p>$'.$price.'</p>
                                <a href="'.$linksp.'">'.$name.'</a>
                                </div>';
                            $i+=1;
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