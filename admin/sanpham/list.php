<div class="row">
    <div class="row frmtitle mb">
        <H1>DANH SÁCH SẢN PHẨM</H1>
    </div>


    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">

        <select name="iddm">

            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="Tìm kiếm">
    </form>
    <form action="" method="post">
        <div class="row frmcontent">
            <!-- tạo bảng -->
            <div class="row mb10 frmdsloai">

                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>SỐ LƯỢNG</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php


                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=" . $id;
                        $xoasp = "index.php?act=xoasp&id=" . $id;
                        $hinhpath = "../upload/" . $img;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height='80'>";
                        } else {
                            $hinh = "No photo(không có hình)";
                        }

                        $number_format_gia = number_format($price, 0, ',', '.') . ' vnđ';
                        echo '<tr>      
                                        <td><input type="checkbox" value="' . $id . '" name="checkbox[]" > </td>
                                        <td>' . $id . '</td>
                                        <td>' . $name . '</td>
                                        <td>' . $hinh . '</td>   
                                        <td>' . $number_format_gia . '</td>
                                        <td>' . $soluong . '</td>
                                        <td>' . $luotxem . '</td>
                                        <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a> <a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                    }
                    ?>


                </table>
            </div>



            <div class="row mb10">


                <!-- <input  type="submit" value="Chọn tất cả" formaction="index.php?act=listsp&&check=on">
                    <input  type="submit" value="Bỏ chọn tất cả" formaction="index.php?act=listsp"> -->
                <input type="submit" value="Xóa sản phẩm đã chọn" formaction="index.php?act=xoasp">
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
            </div>
    </form>
</div>
</div