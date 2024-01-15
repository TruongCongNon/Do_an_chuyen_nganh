<?php

if (is_array($sanpham)) {    //bỏ sanpham vào đây 
    extract($sanpham);
    $tensp = $name;
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "No photo(không có hình)";
}
$iddm1 = $iddm;
$idsp = $id;
$listdanhmuc = loadall_danhmuc();
?>

<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">

                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($id == $iddm1)   $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>


            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensp" value="<?= trim($tensp) ?>">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="text" name="giasp" required pattern="[0-9]{0,}" value="<?= $price ?>">
            </div>

            <div class="row mb10">
                Số lượng<br>
                <input type="text" name="soluong" required pattern="[0-9]{0,}" value="<?= $soluong ?>">
            </div>


            <div class="row mb10">
                Hình<br>
                <?= $hinh ?> <br>
                <input type="file" name="hinh" accept="image/*">


            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $idsp ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>