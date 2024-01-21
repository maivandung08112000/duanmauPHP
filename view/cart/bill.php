<div class="content">
    <div class="blockone">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="favorite mb">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="image cart billform">
                <table>
                    <?php
                        if(isset($_SESSION['user'])){
                            $user=$_SESSION['user']['user'];
                            $address=$_SESSION['user']['address'];
                            $email=$_SESSION['user']['email'];
                            $tel=$_SESSION['user']['tel'];
                        }else{
                            $name="";
                            $address="";
                            $email="";
                            $tel="";
                        }
                    ?>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" name="user" value="<?=$user?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address" value="<?=$address?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?=$email?>"></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><input type="text" name="tel" value="<?=$tel?>"></td>
                    </tr>

                    <?php
                    
                    ?>
                </table>
            </div>  
        </div>
        <div class="favorite mb"> 
            <div class="boxtitle">Phương thức thanh toán</div>
                <div class="image col">
                    <table> 
                        <tr>
                            <td><input type="radio" name="pttt" id="" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt" id="" >Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="pttt" id="" >Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="favorite mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="image cart">
                <table>
                    <tr>
                        <?php
                            viewcart(0);
                        ?>
                    </tr>
                </table>
            </div>  
        </div>
        <div class="boxtitle formdangky bill">
                <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
            </div>
        </div>
    </form>
        <div class="box-right"> 
            <?php
                include "view/boxright.php";
            ?>
        </div>
    </div>