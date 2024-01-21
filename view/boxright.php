<div class="account">
    <div class="boxtitle">Tài khoản</div>
        <div class="block1">
            <?php
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
            ?>
                Xin chào <br><br>
                <?=$user?><br><br>
                <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a></li>
                <?php
                    if($role==1){?>
                <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                <?php }?>
                <li><a href="index.php?act=thoat">Thoát</a></li>
            <?php
                }else{
            ?>
            <form action="index.php?act=dangnhap" method="post">
                Tên đăng nhập
                <input type="text" name="user"><br><br>
                Mật khẩu
                <input type="password" name="pass"><br><br>
                <input type="checkbox" name="">
                <label for="">Ghi nhớ tài khoản</label><br><br>
                <input type="submit" value="Đăng nhập" name="dangnhap"><br>
            </form>
                <li><a href="#">Quên mật khẩu</a></li>
                <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
            <?php } ?>
        </div>
    </div>
    <div class="category"> 
        <div class="boxtitle">DANH MỤC</div>
        <div class="block2">   
            <ul>
                <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm="index.php?act=sanpham&iddm=".$id;
                        echo '<li>
                                <a href="'.$linkdm.'">'.$name.'</a>
                            </li>';
                    }
                ?> 
            </ul>
            <div class="searbox">
                <form action="index.php?act=sanpham" method="post">
                    <input type="text" name="kyw">
                    <input type="submit" name="timkiem" value="Tìm kiếm" id="">
                </form>
            </div>
        </div>
    </div>
    <div class="favorite">
        <div class="boxtitle">TỐP 10 YÊU THÍCH</div>
            <?php
                foreach ($dstop10 as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $img=$img_path.$img;
                    echo '<div class="image">
                    <img src="'.$img.'" alt="">
                    <a href="'.$linksp.'">'.$name.'</a>
                    </div>';
                }
            ?>
        </div>
    </div>

