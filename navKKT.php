<html>
    <head>

      <?php include('JsKKT.php')?>
      <?php include('cssKKT.php') ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script>
      var temp = ''
      $(document).ready(function() {
        $('.navbar-burger').click(function() {
          $('#navbarMenuHeroA, .navbar-burger').toggleClass('is-active');
          console.log($(''))
        });
        // $('.navbar-burger').click(function() {
        //   $('#navbarMenuHeroA, .navbar-burger').toggleClass('is-active');
        //   // console.log($('#navbarMenuHeroA'))
        // });
      });

            
      </script>
    
    <style>
      .ee {
        background: #000000; /* For browsers that do not support gradients */    
        background: -webkit-linear-gradient(left, #000000 , #014261); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(right, #000000, #014261); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(right, #000000 , #014261); /* For Firefox 3.6 to 15 */
        background: linear-gradient(to right, #000000 , #014261); /* Standard syntax (must be last) */
      }
      .placeholder-head::placeholder{
        color:#fff !important;
      }
      a.navbar-item:hover{
        background-color:transparent !important;
      }
        @media (max-width: 1024px) and  (min-width: 200px){
            .aa1 {
                display:none !important;
            }
            .aa {
                width:30%;
            }
        }
        /* @media (max-width: 1024px) and (min-width: 1023px) and (max-height: 1366px) and (min-height: 1366px)  {
          and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.5)
            .aa2 {
                width:20%;
            }
            .aa {
                width:30%;
            }
            .aa1 {
                display:none !important;
            }
            .hide-nav {
              display: none !important;
            }
            .navbar-burger{
              display:block !important;
            }
        } */
        @media (min-width: 1025px) and (max-width: 5000px) {
            .aa2 {
                width:20%;
            }
            .hide-nav {
              display: none !important;
            }
        }
       
    </style>
    </head>

    <body>
        <nav class="navbar" role="navigation" aria-label="main navigation" style="position:fixed;top:0px;left:0px;right:0px;width:100%;background-color:#00A650;height:130px;">
            <div class="" style="display:flex;flex-direction:row;width:100%">
                <div class="aa aa2" style="display:flex;flex-direction:column;justify-content:center;width:30%">
                  <a href="index.php"><img src="images/kktLOGO2.png" style="obfect-fit:contain;width:90%;"></a>
                </div>
                
                <div class="navbar-menu" id="navMenu" style="width:70%;">
                  <div class="aa1" id="navbarBasicExample" style="display:flex;flex-direction:row;width:100%">  
                    <div class="navbar-start" style="width:100%;display:flex;flex-direction:row;justify-content:space-between;">
                      <!-- <div class="" style="width:60%;display:flex;flex-direction:row;justify-content:flex-end"> -->
                        <!-- <div class="navbar-item"> -->
                          <!-- <i onclick="checksearch()" style="cursor:pointer;" class="material-icons">
                              search
                          </i>
                          <input id="searchInput" class="input" type="text" placeholder="Search"> -->
                        <!-- </div> -->
                      <!-- </div> -->
                      <div class="" style="width:100%;display:flex;flex-direction:row;;justify-content:flex-end;">
                        <div style="height:100%;display:flex;align-items:center;">
                          <i onclick="checksearch()" style="cursor:pointer;color:#fff;" class="material-icons">
                              search
                          </i>
                          <input id="searchInput" class="input placeholder-head" style="background-color:#00A650;" type="text" placeholder="Search">
                        </div>
                          
                        <a class="navbar-item font-face" href="index.php" style="color:#fff;">
                          หน้าหลัก
                        </a>
                        <a class="navbar-item font-face" href="news.php" style="color:#fff;">
                          ข่าว
                        </a>
                        <a class="navbar-item font-face" href="activity.php" style="color:#fff;">
                          ปฏิทินกิจกรรม
                        </a>
                        <a class="navbar-item font-face" href="research.php" style="color:#fff;">
                          บทความงานวิจัย
                        </a>
                        <a class="navbar-item font-face" href="gallery.php" style="color:#fff;">
                          Gallery
                        </a>
                        <a class="navbar-item font-face" href="../kkt/index.php" style="color:#fff;">
                          เข้าสู่ระบบนักวิทย์
                        </a>
                        <a class="navbar-item font-face" href="organizeChart.php" style="color:#fff;">
                          แผนผังองค์กร
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                      <!-- <div> -->
                        <span style="" class="navbar-burger burger" >
                          <span></span>
                          <span></span>
                          <span></span>
                        </span>
                      <!-- </div> -->
                      
                      <div id="navbarMenuHeroA" class="navbar-menu hide-nav" style="position:relative">
                        <div id="nav_end" class="navbar-end" >
                        <!-- style="position:absolute;background-color:#fff;right:0px;" -->
                          <a class="navbar-item font-face" href="index.php" style="color:#000000;opacity:0.7">
                          หน้าหลัก
                          </a>
                          <a class="navbar-item font-face" href="news.php" style="color:#000000;opacity:0.7">
                            ข่าว
                          </a>
                          <a class="navbar-item font-face" href="activity.php" style="color:#000000;opacity:0.7">
                            ปฏิทินกิจกรรม
                          </a>
                          <a class="navbar-item font-face" href="research.php" style="color:#000000;opacity:0.7">
                            บทความงานวิจัย
                          </a>
                          <a class="navbar-item font-face" href="gallery.php" style="color:#000000;opacity:0.7">
                            Gallery
                          </a>
                          <a class="navbar-item font-face" href="../kkt/index.php" style="color:#000000;opacity:0.7">
                            เข้าสู่ระบบนักวิทย์
                          </a>
                          <a class="navbar-item font-face" href="organizeChart.php" style="color:#000000;opacity:0.7">
                            แผนผังองค์กร
                          </a>
                        </div>
                      </div>

            </div>
        </nav>
        <section class="hero is-medium ee aa1">
        <img src="images/bgathlete.jpg" style="width:100%;opacity:0.1;position:fixed;">
            <!-- <div class="hero-body" style=" padding-bottom: 5rem !important;padding-top: 9rem !important">
                <div class="container" style="text-align:center">
                    <img src="images/KKT2.png" style="width:100%">
                </div>
            </div> -->
        </section>

        


    </body>
</html>