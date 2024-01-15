
<div class="row mb ">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <!-- <img src="view/images/banner.jpg" alt=""> -->
                        <!-- Slideshow container -->
                        <div class="slideshow-container">
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade"> 
                        <img src="./view/images/banner1.jpg" alt="" style="width:100%">
                        </div>

                         <!-- Full-width images with number and caption text -->
                         <div class="mySlides fade">   
                        <img src="./view/images/banner2.jpg" alt="" style="width:100%">
                        </div>

                         <!-- Full-width images with number and caption text -->
                         <div class="mySlides fade">
                        <img src="./view/images/banner3.jpg" alt="" style="width:100%">
                        </div>

                         <!-- Full-width images with number and caption text -->
                         <div class="mySlides fade">
                        <img src="./view/images/banner4.jpg" alt="" style="width:100%">
                        </div>


                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="sanphamhome">
                    <?php   
                        $i=0;       
                        foreach ($spnew as $sp) {
                            extract($sp);         
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            } else {
                                $mr="mr";
                            }
                         
                            echo '<div style="border:none;" class="boxsp '.$mr.'"><p></p>
                                    <div class="row img"><a style="text-decoration: none"
                                     href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                    
                                    <a style="text-decoration: none; color:black;" 
                                    href="'.$linksp.'">'.$name.'</a>';
                                    echo '<p></p>';
                                    echo number_format($price,0,',','.').' vnđ';
                                    
                                echo'<div  class="row btnaddtocart">
                                    <form action="index.php?act=addtocart" method="post">
                                        <input type="hidden" name="id" value="'.$id.'">
                                        <input  type="hidden" name="name" value="'.$name.'">
                                        <input type="hidden" name="img" value="'.$img.'">
                                        <input type="hidden" name="price" value="'.$price.'"><p></p>
                                        <input  style="cursor: pointer; width:150px; height:40px " 
                                        type="submit" name="addtocart" value="Thêm vào giỏ hàng"><p></p>
                                    </form>
                                    </div>
                                </div>';
                                           
                            $i+=1;
                        }
                    ?>
                    </div>
                    <div >
                            <ul >

                        <?php
                        $n=load_page();
                        if($n>1)
                        for($i=1;$i<=$n;$i++)
                           if($i==$number_page)
                              echo  '<a style="color:black" href="index.php?act=page&number_page='.$i.'">
                            <li style="display:inline-block;font-size: 20px; padding: 8px 16px ; ">'.$i.'</li></a>';
                           else 
                           echo  '<a style="color:#ccc" href="index.php?act=page&number_page='.$i.'">
                        <li style="display:inline-block;font-size: 20px; padding: 8px 16px ; ">'.$i.'</li></a>';
                        ?>
                    
                           
                      
                        </ul>
                    </div>
                </div> 
            </div>
            <div class="boxphai">
                <?php include "boxright.php";?>
            </div>
        </div>