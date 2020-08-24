<head>

      <?php include('JsKKT.php')?>
      <?php include('cssKKT.php') ?>

      <script>
      $(document).ready(function() {
      // Check for click events on the navbar burger icon
      // $(".navbar-burger").click(function() {
      // // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      // $(".navbar-burger").toggleClass("is-active");
      // $(".navbar-menu").toggleClass("is-active");
      //     });


          $('.navbar-burger').click(function() {
  $('#navbarMenuHeroA, .navbar-burger').toggleClass('is-active');
});
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
        @media (max-width: 1024px) {
            .aa1 {
                display:none !important;
            }
            .aa {
                width:30%;
            }
        } 
        @media (min-width: 1024px) {
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
<img src="images/bgathlete.jpg" style="width:100%;opacity:0.5;position:fixed">
<nav class="navbar" role="navigation" aria-label="main navigation" style="position:fixed;top:0px;left:0px;right:0px;width:100%">
            <div class=""style="display:flex;flex-direction:row;width:100%">
                <div class="aa aa2" style="display:flex;flex-direction:column;justify-content:center">
                  <a href="indexKKT.php"><img src="images/kktLOGO.png" style="obfect-fit:contain;width:90%;"></a>
                </div>
                <div class="navbar-menu" id="navMenu">
  

                <div class="aa1" id="navbarBasicExample" style="display:flex;flex-direction:row;width:80%">  
                  <div class="navbar-start" style="width:100%;display:flex;flex-direction:row;justify-content:space-between;">
                    <div class="" style="width:60%;display:flex;flex-direction:row;justify-content:flex-end">
                      <a class="navbar-item">
                        <input class="input" type="text" placeholder="Search">
                      </a>
                    </div>
                    <div class="" style="width:40%;display:flex;flex-direction:row;;justify-content:flex-start">
                      <a class="navbar-item font-face" href="indexKKT.php" style="color:#000000;opacity:0.7">
                        หน้าหลัก
                      </a>
                      <a class="navbar-item font-face" href="newsKKT.php" style="color:#000000;opacity:0.7">
                        ข่าว
                      </a>
                      <a class="navbar-item font-face" href="activityKKT.php" style="color:#000000;opacity:0.7">
                        ปฏิทินกิจกรรม
                      </a>
                      <a class="navbar-item font-face" href="vijaiKKT.php" style="color:#000000;opacity:0.7">
                        บทความงานวิจัย
                      </a>
                      <a class="navbar-item font-face" href="gallaryKKT.php" style="color:#000000;opacity:0.7">
                        Gallary
                      </a>
                      <a class="navbar-item font-face" href="information.php" style="color:#000000;opacity:0.7">
                        งานทะเบียนนักกีฬา
                      </a>
                    </div>
                  </div>
                </div>
                </div>

                      <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                        <span></span>
                        <span></span>
                        <span></span>
                      </span>
                      <div id="navbarMenuHeroA" class="navbar-menu hide-nav">
                        <div class="navbar-end">
                          <a class="navbar-item font-face" href="indexKKT.php" style="color:#000000;opacity:0.7">
                          หน้าหลัก
                          </a>
                          <a class="navbar-item font-face" href="newsKKT.php" style="color:#000000;opacity:0.7">
                            ข่าว
                          </a>
                          <a class="navbar-item font-face" href="activityKKT.php" style="color:#000000;opacity:0.7">
                            ปฏิทินกิจกรรม
                          </a>
                          <a class="navbar-item font-face" href="vijaiKKT.php" style="color:#000000;opacity:0.7">
                            บทความงานวิจัย
                          </a>
                          <a class="navbar-item font-face" href="gallaryKKT.php" style="color:#000000;opacity:0.7">
                            Gallary
                          </a>
                          <a class="navbar-item font-face" href="information.php" style="color:#000000;opacity:0.7">
                            งานทะเบียนนักกีฬา
                          </a>
                        </div>
                      </div>

            </div>
        </nav>
        <section class="hero is-medium ee aa1">
            <div class="hero-body" style=" padding-bottom: 5rem !important;padding-top: 9rem !important">
                <div class="container" style="text-align:center">
                    <img src="images/KKT2.png" style="width:100%">
                </div>
            </div>
        </section>

</body>




