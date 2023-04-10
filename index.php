<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <meta name="robots" content="index, follow" />
     <meta name="description" content="About | Developer & Coder Deepak Patil Portfolio">

     <title>Portfolio Deepak</title>
     <link rel="icon" href="img/dp.png" type="image/x-icon">
     <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
     <link rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     <link href="css/animate.min.css" rel="stylesheet">
     <link href="css/aos.css" rel="stylesheet">
     <!-- main style -->
     <link href="css/style.css" rel="stylesheet">

 </head>

 <script type="text/javascript">
     (function(c, l, a, r, i, t, y) {
         c[a] = c[a] || function() {
             (c[a].q = c[a].q || []).push(arguments)
         };
         t = l.createElement(r);
         t.async = 1;
         t.src = "https://www.clarity.ms/tag/" + i;
         y = l.getElementsByTagName(r)[0];
         y.parentNode.insertBefore(t, y);
     })(window, document, "clarity", "script", "ecrevwmud8");
 </script>

 <script async src="https://www.googletagmanager.com/gtag/js?id=G-RYV6RB945Z"></script>
 <script>
     window.dataLayer = window.dataLayer || [];

     function gtag() {
         dataLayer.push(arguments);
     }
     gtag('js', new Date());
     gtag('config', 'G-RYV6RB945Z');
 </script>

 <body>
     <!-- animated circles -->
     <div class="area" style='width:100% ; height:auto '>
         <ul class="circles">
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
         </ul>

         <!-- Preloader -->
         <div id="preloader">
             <div id="status">

                 <div class="preloader" aria-busy="true" aria-label="Loading, please wait."
                     role="progressbar">
                 </div>

             </div>
         </div>
         <button class="btn">Top</button>
         
         <div class="container center-width">
             <nav class="fixed ">
                 <div class="logo" style="padding-top: 5px; width: 400px;">
                    <a href="./index.php "><img src="img/dp.png" alt="Logo Image" style="width: 100%;"></a>
                 
                 </div>
                 <div class="hamburger">
                     <div class="line1"></div>
                     <div class="line2"></div>
                     <div class="line3"></div>
                 </div>

                 <ul class="nav-links ">
                     <li class="nav-item"><a data-scroll href="#about">About</a></li>
                     <li class="nav-item"><a data-scroll href="#projects">projects</a></li>

                     <li class="nav-item"><a data-scroll href="#contact">contact</a></li>
                 </ul>

             </nav>
         </div>
         <div id="typewriter">
             <span id="typewriter-text"></span>
             <span class="typewriter-cursor">|</span>
         </div>
         <div class="section" id="about">

             <div class="container">
                 <div class="col-md-12 abt-me" data-aos="fade-up">

                     <div class="d-flex flex-row">

                            <h2 class="name-intro " style="color: #ffffff; text-align: center; font-size: 24px; font-weight: 500; display: flex; justify-content: center; align-items: center;">
                                  <span>
                                      <div class="avatar ">
                                          <img  src="img/skills/1669447116425.jfif" alt="" style='width: 100%'>
                                      </div>
                                  </span>
                                  Hi, I'm Deepak Patil
                            </h2>

                     </div>

                     <h1 style="text-align: center;">Developer | Programmer & Designer</h1>

                 </div>
                 <?php
                     include 'sanity.php';
                         
                         
                         echo '<div class="chip-cont col-lg-12 d-flex" style="padding-top: 20px;">';
                         echo '<div class="chips-chips justify-content-center">';
                         foreach($jsonAbout as $about) 
                         {
                         
                                 $url = 'https://cdn.sanity.io/images/jw4752tu/production/';
                                 $imageAssetId = $about['imgUrl']['asset']['_ref'];
                                 // print_r($imageAssetId) ;
                                 
                                 $image_parts = explode('-', $imageAssetId);
                                $image_id = $image_parts[1];
                                $image_size = $image_parts[2];
                                $image_extension = explode('.', $image_parts[3])[0];
                                $final_url = $url . $image_id . '-' . $image_size . '.' . $image_extension;
                            
                            
                                echo '<div class="chip-length  chip-text"><h3 class="chip-item"><img src="' . $final_url . '"style="width: 50px;"> ' . $about['title'] . '</h3></div>';
                        }
                         echo '</div>';
                         echo '</div>';
                 ?>

             </div>
         </div>

         </div>
         <div class="section" id="projects" style="padding:50px">
         <h2 style="text-align: center; font-size: 40px  ;margin-top:100px" class='name-intro'>Make it Work! <span
                 style='color: #eac132'> Make it Right</span>
             </br>Make it Fast!
         </h2>
             <?php
                
                include 'sanity.php';
                    
                $posts=$jsonProjects ;
                $num_posts = count($posts);
                ?>
             <?php for ($i = 1; $i < $num_posts ; $i++): if ($i == 3) {
                continue;
              }?>
                         
             <div data-aos="fade-up" style='margin-top: 20px;'>

                 <?php 
             $url = 'https://cdn.sanity.io/images/jw4752tu/production/';
     $imageAssetId = $posts[$i]['imgUrl']['asset']['_ref'];
     // print_r($imageAssetId) ;
     
                    $image_parts = explode('-', $imageAssetId);
                    $image_id = $image_parts[1];
                    $image_size = $image_parts[2];
                    $image_extension = explode('.', $image_parts[3])[0];


                    $final_url = $url . $image_id . '-' . $image_size . '.' . $image_extension;
     
     if ($i % 2 == 0): ?>
                 <div class='row'>
                     <div class="col-lg-6 col-md-6 col-sm-12 "
  style="background-color: #dbff93; border-radius: 10px; height:300px !important ;max-width:400px !important ;display:flex ; align-items:center; justify-content:center">

  <img src="<?php echo $final_url; ?>"
      style="width:80% ;height: auto; filter: none; object-fit: contain; "
      alt="image" class="img-responsive" />
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 center-element  text-box">
  <div class=" fin-alignment">
      <h3 class="fin-alignment"
          style="font-size: 18px; font-weight: 500; background-color: #AFF0A5; color: #000; ; border-radius: 10px; width: fit-content; padding:10px">
          <?php echo $posts[$i]['title']; ?></h3>
  </div>

  <div class="">
      <h2 class="home-content-h1 fin-alignment" style="color: #ffffff; text-align: justify; font-size: 24px; font-weight: 500;
             "><?php echo $posts[$i]['description']; ?></h2>
  </div>
  <div class="">
      <h3 class="fin-alignment"
          style="color: #dfdfdf; font-size: 18px; text-decoration: underline;">
          <a href="<?php echo $posts[$i]['projectLink']; ?>"
              style="color: #dfdfdf;">Read more</a>
      </h3>
  </div>
                     </div>
                 </div>
                 <div style='width:100% ; height: 3px; background-color:#fff ;margin-top:100px'>
                 </div>
                 <?php else: ?>

                 <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12 center-element  text-box">
  <div class=" fin-alignment">
      <h3 class="fin-alignment"
          style="font-size: 18px; font-weight: 500; background-color: #AFF0A5; color: #000;  border-radius: 10px; width: fit-content; padding:10px">
          <?php echo $posts[$i]['title']; ?></h3>
  </div>

  <div class="">
      <h2 class="home-content-h1 fin-alignment" style="color: #ffffff; text-align: justify; font-size: 24px; font-weight: 500;
             "><?php echo $posts[$i]['description']; ?></h2>
  </div>
  <div class="">
      <h3 class="fin-alignment"
          style="color: #dfdfdf; font-size: 18px; text-decoration: underline;">
          <a href="<?php echo $posts[$i]['projectLink']; ?>"
              style="color: #dfdfdf;">Read more</a>
      </h3>
  </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 "
  style="background-color: #dbff93; border-radius: 10px; height:300px !important ;max-width:400px !important ;display:flex ; align-items:center; justify-content:center">

  <img src="<?php echo $final_url; ?>"
      style="width:80% ;height: auto; filter: none; object-fit: contain; "
      alt="image" class="img-responsive" />
                     </div>

                 </div>
                 <div style='width:100% ; height: 3px; background-color:#fff ;margin-top:100px'>
                 </div>
                 <?php endif; ?>
                 <?php endfor; ?>
             </div>

             <div class="section" id="contact" >
                 <div class="container">
                     <div class="col-md-12 ">
  <h1 style=" padding-bottom: 5px; text-align: center">
      Let's talk</h1>
  <div class="h-50"></div>
                     </div>
                     
                     
                     
                     <div class="col-md-12 contact-me  box-padd " data-aos="fade-up">

  <div class="" style="background-image: linear-gradient(164deg, #000000, #3ac59f 71%, #b8f07c );
                 padding: 30px; border-radius: 15px;">
      <p style="font-size: 16px; color: #dfdfdf; font-weight: 500 ;"> ❤️
          Reach out to me via gmail, linkedin or other social media links
      </p>
      <h3 onclick="sendEmail();"
          style="color: #dfdfdf; font-size: 18px; cursor: pointer;">
          deepuadi94@gmail.com </h3>
  </div>

                     </div>
                 </div>
                 <div class="section  handles">
                     <div class="container " style="width: 400px;">
  <ul class="social">
      <!-- <li><a href="#"><i class="ion-social-facebook"></i></a></li> -->

      <li><a href="https://www.linkedin.com/in/akshaya-sree-ui-ux-design/"
              target="_blank"><i
                  class="ionicons ion-social-linkedin"></i></a></li>
      <li><a href="https://twitter.com/AkshayaSreeM" target="_blank"><i
                  class="ion-social-twitter"></i></a></li>
      <li><a href="https://www.instagram.com/terrablacked/"
              target="_blank"><i class="ion-social-instagram"></i></a>
      </li>
      <li><a href="https://medium.com/@akshayasreem" target="_blank"> <i
                  class="bi bi-medium"></i></a></li>

  </ul>
                     </div>
                 </div>
                 <!-- ./social media handles -->
                 <!-- copy rights -->
                 <div class="section copyrights">
                     <div class="container copyrights">
  <p> 2023 Designed by Deepak Patil</p>
                     </div>
                 </div>
                 <!-- ./copy rights -->
             

             <!-- jQuery -->
             <script src="js/jquery.js"></script>
             <!--  plugins  -->
             <script src="js/bootstrap.min.js"></script>
             <script src="js/plugins.js"></script>
             <script src="js/aos.js"></script>
             <script src="js/jquery.form.js"></script>
             <script src="js/jquery.validate.min.js"></script>

             <!--  main script  -->
             <script src="js/custom.js"></script>

             <script>
                 $(window).on('beforeunload', function() {
                     $('body').hide();
                     $(window).scrollTop(0);
                 });
             </script>
             <script>
                 function sendEmail() {
                     window.open("mailto:deepuadi94@gmail.com");
                 }
             </script>
             <script>
                 (function() {
                     window.onpageshow = function(event) {
  if (event.persisted) {
      window.location.reload();
  }
                     };
                 })();
             </script>

 </body>

 </html>