<div class="content">
    <div class="blockone">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
        <form action="index.php?act=listbill" method="post">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
            <input type="submit" name="listok" value="GO">
        </form>
            <div class="favorite mb">

            <div class="image cart mybillform m10">
                <table>
                    
                    <tr>
                        <th></th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $kh=$bill["bill_name"].'
                            <br>'.$bill["bill_email"].'
                            <br>'.$bill["bill_address"].'
                            <br>'.$bill["bill_tel"];
                            $ttdh=get_ttdh($bill["bill_status"]);
                            $countsp=loadall_cart_count($bill["id"]);
                            echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>DAM-'.$bill['id'].'</td>
                                    <td>'.$kh.'</td>
                                    <td>'.$countsp.'</td>
                                    <td><strong>'.$bill["total"].'</strong>VNĐ</td>
                                    <td>'.$ttdh.'</td>
                                    <td>'.$bill["ngaydathang"].'</td>
                                    <td><input type="button" value="Sửa"> <input type="button" value="Xoá"></td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>  
            <div class="formdangky">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xoá các thư mục đã chọn">
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
            </div>
        </div>
    </div>