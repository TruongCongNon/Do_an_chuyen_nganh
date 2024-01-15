
<div class="row mb ">
            <div class="boxtrai mr">
            <div class="row mb">
               
                    <div class="boxtitle">SẢN PHẨM <strong><?=$tendm?></strong></div>
                    <div class="row boxcontent">
                        <div class="sanphamhome">
                        <?php 
                            $i=0;    
                            foreach ($dssp as $sp) {
                                extract($sp);        
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $hinh=$img_path.$img;
                                if(($i==2)||($i==5)||($i==8)||($i==11)){
                                    $mr="";
                                } else {
                                    $mr="mr";
                                }
                                    
                                echo '<div   style="border:none;"class="boxsp '.$mr.'"><p></p>
                                        <div class="row img">
                                        <a href="'.$linksp.'">
                                        <img src="'.$hinh.'" alt=""  
                                         ></a></div>
                                        
                                        
                                        <a  style="text-decoration: none; color:black;" href="'.$linksp.'">'.$name.'</a>';
                                        echo '<p></p>';
                                        echo number_format($price,0,',','.').' vnđ'; 
                                        
                                    echo'<div class="row btn addtocart">
                                        <form action="index.php?act=addtocart" method="post">
                                          
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="soluong" value="'.$soluong.'">
                                            <input type="hidden" name="name" value="'.$name.'">
                                            <input type="hidden" name="img" value="'.$img.'">
                                            <input type="hidden" name="price" value="'.$price.'"><p></p>
                                            <input   style="cursor: pointer; width:150px; height:40px "  
                                            type="submit" name="addtocart" value="Thêm vào giỏ hàng"><p></p>
                                        </form>
                                        </div>
                                </div>';
                                            
                                $i+=1;
                            }
                            
                        ?>
                        </div>        
                  
                    </div>
            </div>
            
            </div>
            <div class="boxphai">
                <?php include "boxright.php";?>
            </div>
        </div>