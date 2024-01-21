
<div class="row frmcontent">
    <h1>THÊM MỚI SẢN PHẢM</h1>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data"> 
        <label for="">Danh mục</label><br>
        <select name="iddm" >
            <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
            <option value=""></option>
        </select><br><br>

        <label for="">Tên sản phẩm</label><br>
        <input type="text" name="tensp" id="rong"><br><br>

        <label for="">Giá</label><br>
        <input type="text" name="giasp" id="rong"><br><br>

        <label for="">Hình</label><br>
        <input type="file" name="hinh" ><br><br>

        <label for="">Mô tả</label><br>
        <textarea name="mota" cols="30" rows="10"></textarea><br><br>

        <input type="submit" value="Thêm mới" name="themmoi" >
        <input type="reset" value="Nhập lại" name="" >

        <a href="index.php?act=listsp"><input type="button" value="Danh sách" name="" ></a>

        <?php
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
        ?>
    </form>
</div>
