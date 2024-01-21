<div class="col frmcontent">
    <div class="row"><h1>DANH SÁCH TÀI KHOẢN</h1></div>
    <div class="col m10">
        <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>NỘI DUNG</th>
                <th>USER</th>
                <th>IDUSER</th>
                <th>IDPRO</th>
                <th></th>
            </tr>
            <?php
                foreach ($listbinhluan as $binhluan){
                    extract($binhluan);
                    $suabl="index.php?act=suabl&id=".$id;
                    $xoabl="index.php?act=xoabl&id=".$id;
                    echo '
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a>|<a href="'.$xoabl.'"><input type="button" value="Xoá"></a></td>
                    </tr>';
                }
            ?>

        </table>
    </div>
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xoá các mục chọn">
</div> 