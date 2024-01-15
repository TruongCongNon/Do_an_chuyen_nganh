<?php

if (is_array($tk)) {    //bỏ sanpham vào đây 
    extract($tk);
    $tensp = $name;
}
?>
<div class="row">
    <div class="row frmtitle">

        <h1>CẬP NHẬT TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Tài khoản<br>
                <input type="text" name="user" value="<?= trim($user) ?>" >
            </div>
            <div class="row mb10">
                Mật khẩu<br>
                <input type="password" style="   
                 width: 100%; border: 1px #CCC solid; padding: 5px 10px;
                border-radius: 5px;" name="pass" value="<?= $pass ?>">
            </div>

            <div class="row mb10">
                Email<br>
                <input type="text" name="email" value="<?= $email ?>" >

            </div>
            <div class="row mb10">
                Địa chỉ<br>
                <input type="text" name="address" value="<?= trim($address) ?>" >
            </div>
            <div class="row mb10">
                Số điện thoại<br>
                <input type="text" name="tel" value="<?= trim($tel) ?>" >
            </div>



            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>