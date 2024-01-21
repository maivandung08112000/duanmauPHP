<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='100'>";
    }else{
        $hinh="no photo";
    }
?>
<div class="row frmcontent">
    <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <select name="iddm" >
            <option value="0" selected>Tất cả</option>
            <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    if($iddm==$id) $s="selected"; else $s="";
                        echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                }
            ?>
        </select><br><br>

        <label for="">Tên sản phẩm</label><br>
        <input type="text" name="tensp" value=<?=$name?>><br><br>

        <label for="">Giá</label><br>
        <input type="text" name="giasp" id="rong" value="<?=$price?>"><br><br>

        <label for="">Hình</label><br>
        <input type="file" name="hinh" >
        <?=$hinh?><br><br>

        <label for="">Mô tả</label><br>
        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea><br><br>

        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="Cặp nhật" name="capnhat" >
        <input type="reset" value="Nhập lại" name="" >

        <a href="index.php?act=listsp"><input type="button" value="Danh sách" name="" ></a>

        <?php
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
        ?>
    </form>
</div>
