<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>strom shoop</title>
        <meta name="description" content="" /> <!-- ba3den -->
        <link rel="stylesheet" href="stayl-page.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,700&display=swap" rel="stylesheet">    
    </head>
    <body>
    <header>
                
                <div class="heder">
                    <div class="menu"><i class='bx bx-menu'></i></div>
                    <img class="logo" src="strom.png" alt="logo" width="100" height="100">
                    
                    
                        
                    <div class="serh">
                            
                            <button type="submit" class="q"><i class ='bx bx-search'></i> </button>
                            <input type="text" placeholder="search...">
                            <button type="submit"  class="x"><i class='bx bx-x'></i></button>
                            
                    </div>
                    <div style="width: 30%;">

                    </div>
                    <div >
                        <h4>we are the best</h4>
                    </div>
                    <div class="ico">
                        <div class="cart">  <!-- سلة -->
                            
                            
                            <a href="#"><i class='bx bxs-cart'></i></a>
                        
                        </div>
                        <div class="pro">
                                    <img src="wallpaperflare.com_wallpaper (3).jpg">
                        </div>
                    
                
                        
                    </div>
                
                </div>

            
            </header> 
            <div class="interface">
                 <div class="right">
                    <div><h2>Welcome to Storm Shop</h2>
                    
                   <h4>your smart destination for electronics, where speed meets quality and technology strikes like a storm!</h4></div>
                     
                           
                    
                 </div>
                 <div class="left" >
                    
                        <img >
                     
                    
                 </div>
             </div>
             <br>
            <div class="part">      <!-- الاقسام --> 
                <div class="container">
                    
                    <!-- قسم النص -->
                    <div>
                      <p>PHONES</p>
                      
                    </div>
                    <!-- قسم الصور -->
                    <div style="width: 50%;" class="images">
                        <img src="prodwe/4927770cf1f4886d3ab0c51ef6fdfea5.jpg" >
                      </div>
                </div>
                <div class="container">
                    
                    <!-- قسم النص -->
                    <div>
                      <p>TABLRTS</p>
                      
                    </div>
                    <!-- قسم الصور -->
                    <div class="images">
                        <img src="prodwe/photo_2025-05-07_01-20-55.jpg" >
                      </div>
                </div>
                <div class="container">
                    
                    <!-- قسم النص -->
                    <div>
                      <p>WATCHES</p>
                      
                    </div>
                    <!-- قسم الصور -->
                    <div class="images">
                        <img src="prodwe/photo_2025-05-07_01-20-26.jpg" >
                      </div>
                </div>
                <div class="container">
                    
                    <!-- قسم النص -->
                    <div>
                      <p>LAPTOPS</p>
                    
                    </div>
                    <!-- قسم الصور -->
                    <div style="width: 70%;" class="images">
                        <img src="prodwe/photo_2025-05-07_01-20-31.jpg" >
                      </div>
                </div>
                <div class="container">
                    
                    <!-- قسم النص -->
                    <div>
                      <p>CONSOLS</p>
                      
                    </div>
                    <!-- قسم الصور -->
                    <div class="images">
                        <img src="prodwe/photo_2025-05-07_01-20-49.jpg" >
                      </div>
                </div>
                <div class="container">
                    
                    <!-- قسم النص -->
                    <div>
                      <p>SMART TV</p>
                      
                    </div>
                    <!-- قسم الصور -->
                    <div style="width: 70%;" class="images">
                        <img src="prodwe/photo_2025-05-07_01-20-42.jpg" >
                      </div>
                </div>
                <div class="container">
                    
                    <!-- قسم النص -->
                    <div>
                      <p>SPEAKERS</p>
                      
                    </div>
                    <!-- قسم الصور -->
                    <div style="width: 50%;" class="images">
                        <img src="prodwe/photo_2025-05-07_01-20-04.jpg" >
                      </div>
                </div>
            </div>
                
           

         <?php
             include('config.php');
             $result=mysqli_query($con,"SELECT * FROM prod");
             while($row = mysqli_fetch_array($result)){
                  echo"         
 
        <div class="prodoie-part">

            <div class="prodoie">
                <img class="card-img-top" src="..." alt="...">
            
                <p class="name">Flash</p>
                <hr>
                <p class="cach">10$</p>
                 <div>
                    <button class="bay">add to card<i class='bx bxs-card'></i></button>
                    <button class="sey">prodduct vision</button>
                </div>
            </div>
            "; } 
         ?>



            <div class="foter">                       <!-- البلاصة الفضية في الاسفل فيها الخدمة وحسابات الاونلاين وتعريف للستروم (; -->
                <ul>  <h3 id="right">Copyright</h3>
                    <p> © 2025 C_Storm. All rights reserved .
                        <br>All content,including texts,images,logos and <br>
                        designs is protected under copyright and trademark laws </p>
                </ul>

                <ul>  <h3 id="right"> privacy policy</h3>
                <P> Use of this website is subject to our <br> terms of use and privacy policy </P>
                
                </ul>

                <ul>  <h3 id="right">Account and user </h3>
                    <p>. you may be required to create an <br>account to access certain servises </p>
                    <p>. you must keep your login credentials confidential<br> and not share them whith any third party</p>
                    <p>. We reserve the right to suspend or terminate<br> your account if you violate these terms</p>
                </ul>
                <ul>
                    <h3 id="right"> Cantact us </h3>
                    <p>If you have any inquiries about these terms, you can contact us via email at:
                        support@cstorm.com</p>
                </ul>
        </div>
    </body>
</html>
