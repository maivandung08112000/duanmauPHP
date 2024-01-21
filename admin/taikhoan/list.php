<div class="col frmcontent">
    <div class="row"><h1>DANH SÁCH TÀI KHOẢN</h1></div>
    <div class="col m10">
        <table>
            <tr>
                <th></th>
                <th>MÃ TK</th>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Điện thoai</th>
                <th>Vai trò</th>
                <th></th>
            </tr>
            <?php
                foreach ($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoatk&id=".$id;
                    echo '
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a>|<a href="'.$xoatk.'"><input type="button" value="Xoá"></a></td>
                    </tr>';
                }
            ?>

        </table>
    </div>
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xoá các mục chọn">
    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
</div> 