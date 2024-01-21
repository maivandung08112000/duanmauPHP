<div class="content">
    <div class="blockone">
            <div class="favorite mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="image cart">
                <table>

                    <?php
                        viewcart(1);
                    ?>
                </table>
            </div>  
        </div>
            <div class="boxtitle formdangky bill">
            <a href="index.php?act=bill"><input type="button" value="Tiếp tục đặt hàng"></a> <a href="index.php?act=delcart"><input type="button" value="Xoá giỏ hàng"></a>
            </div>
        </div>
        <div class="box-right"> 
            <?php
                include "view/boxright.php";
            ?>
        </div>
    </div>