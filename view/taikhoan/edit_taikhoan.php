<div class="content">
    <div class="blockone">
            <div class="favorite mb">
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="image formdangky">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);                
                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    Email
                    <input type="email" name="email" value="<?=$email?>">
                    Tên đăng nhập
                    <input type="text" name="user" value="<?=$user?>">
                    Mật khẩu
                    <input type="password" name="pass" value="<?=$pass?>">
                    Địa chỉ
                    <input type="text" name="address" value="<?=$address?>">
                    Điện thoại
                    <input type="text" name="tel" value="<?=$tel?>">

                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
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