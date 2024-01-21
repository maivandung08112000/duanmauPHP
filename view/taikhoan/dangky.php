<div class="content">
    <div class="blockone">
            <div class="favorite mb">
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="image formdangky">
                <form action="index.php?act=dangky" method="post">
                    Email
                    <input type="email" name="email">
                    Tên đăng nhập
                    <input type="text" name="user" id="">
                    Mật khẩu
                    <input type="password" name="pass" id="">
                    <input type="submit" name="dangky" value="Đăng ký" id="">
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