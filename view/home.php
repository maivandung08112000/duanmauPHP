<div class="content">
    <div class="block_text"> 
        <div class="blockone">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="view/image/banner1.jpg" style="width:880px; height:400px; object-fit:cover;">
                <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="view/image/banner2.png" style="width:880px; height:400px; object-fit:cover;">
                <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="view/image/banner3.jpg" style="width:880px; height:400px; object-fit:cover;">
                <div class="text">Caption Three</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                </div><a href=""></a>
            </div>
            <div class="box-left">
                <?php
                    $i=0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh=$img_path.$img; 
                        if(($i==2) || ($i==5) || ($i==8)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="introduc1 '.$mr.'">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                            <p>$'.$price.'</p>
                            <a href="'.$linksp.'">'.$name.'</a>
                            <div class="formdangky mb btnaddtocart">
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="'.$id.'">
                                    <input type="hidden" name="name" value="'.$name.'">
                                    <input type="hidden" name="img" value="'.$img.'">
                                    <input type="hidden" name="price" value="'.$price.'">
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                </form>
                                </div>
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