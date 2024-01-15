<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục<br>
                <select name="iddm" required>
                    '<option value="">...</option>

                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>

                    <!-- <option value=""></option> -->
                </select>
            </div>

            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensp" required>
            </div>
            <div class="row mb10">
                Số lượng<br>
                <input type="text" name="soluong" required pattern="[0-9]{0,}" title="">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="text" name="giasp" required pattern="[0-9]{0,}">
            </div>
            <div class="row mb10">
                Hình<br>
                <input type="file" name="hinh" accept="image/*">
            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoisanpham" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>