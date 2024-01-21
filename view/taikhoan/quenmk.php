<div class="content">
    <div class="blockone">
            <div class="favorite mb">
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="image formdangky col">
                <form action="index.php?act=quenmk" method="post">
                    Email
                    <input type="email" name="email">
            
                    <input type="submit" name="guiemail" value="Gửi" id="">
                    <input type="reset" name="" value="Nhập lại" id="">
                </form>
                <h2 class="thongbao">
                <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </h2>
            </div>  
        </div>
    </div>
        <div class="box-right">
            <?php
                include "view/boxright.php";
            ?>
        </div>
    </div>