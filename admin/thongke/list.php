<div class="content">
    <div class="blockone">
        <h1>DANH SÁCH THỐNG KÊ</h1>
            <div class="favorite mb">

            <div class="image cart m10 formthongke mybillform">
                <table>
                    
                    <tr>
                        <th>MÃ DANH MUC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo '<tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$avgprice.'</td>
                                <td><a href=""><input type="button" value="Sửa"></a>-<a href=""><input type="button" value="Xoá"></a></td>
                            </tr>';
                        }
                    ?>
                </table>
            </div>  
            <div class="formdangky">
                <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
            </div>
        </div>
    </div>