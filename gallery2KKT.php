<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <?php include('JsKKT.php') ?>
    <?php include('cssKKT.php') ?>
    
    <style>
        
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .dd {
                box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            }
            .column01 {
            display: block;
            flex-basis: 0;
            flex-grow: 1;
            flex-shrink: 1;
            padding: 0.75rem;
            }
            .sec-1 {
            padding-left: 24;
            padding-right: 24;
            padding-top: 48;
            }
           
        @media (max-width: 1024px) {
            .sec-2 {
            /* padding-left: 24;
            padding-right: 24; */
            padding-top: 25;
            }
            .con-1 {
                padding-left:0;
                padding-right:0:
            }
            .width-card {
                width:40%;
            }
        } 
        @media (min-width: 1024px) {
            .sec-3 {
                padding:3rem 1.5rem;
            }
            .con-2 {
                width: 100%;
                padding-right: 35px;
                padding-left: 35px;
                margin-right: auto;
                margin-left: auto;
            }
            .width-card1 {
                width:20%;
            }
            
        } 
        @media (min-width: 360px) {
           
        }     
    </style>

    <script>
        $(document).ready(function() {
            // addnew()
            fetchGallery()
        });

        function fetchGallery(){
            var url_string = window.location.href;
            var url = new URL(url_string);
            var id = parseInt(url.searchParams.get('id'));
            $.ajax({
                type:'post',
                url:'./api/fetchSingleGallery.php',
                data:{
                    "id":id
                },
                success:function(response){
                    console.log(response)
                    var alldata = response.split('alladmin_')[1]
                    var alldata_ = alldata.split('0000000000')[0]
                    // console.log(alldata_.split('^'))
                    var result = alldata_.split('^')
                    var pic = result[1].split(',')

                    var inner = ''
                    $('#event_name').html(result[2])
                    $('#img1').attr('src','../kkt/myfile/'+pic[0])
                    $('#img1').css('width','50%')
                    $('#img2').attr('src','../kkt/myfile/'+pic[1])
                    $('#img2').css('width','50%')
                    $('#img3').attr('src','../kkt/myfile/'+pic[2])
                    $('#img3').css('width','50%')
                    if(pic.length > 0){
                        console.log(pic)
                        inner += '    <div class="columns is-multiline" style="display:flex;flex-direction:row;margin:0;width:100%">'
                        for (var i = 0; i < pic.length-1; i++) {
                            
                            inner += '                 <div onclick="chooseImg(`'+pic[i]+'`)" data-toggle="modal" data-target="#myModal" class="width-card width-card1 dd" style="margin:15px 15px;width:220px;height:220px;padding:20px;border:1px solid #ccc;border-radius:5px;display:flex;justify-content:center;align-items:center;">'
                            inner += '                  <div class="" style="">' 
                            inner += '                      <span ><img src="../kkt/myfile/'+pic[i]+'"></span>' 
                            inner += '                  </div>' 
                            inner += '                 </div>'
                            
                            
                        
                        }
                        inner += '             </div>'
                        $('#news').append(inner);
                    }
                }
            })
        }

        function chooseImg(img){
            $('#imgModal').attr('src','../kkt/myfile/'+img)
        }

        function addnew() {



            var inner = ""

            var descrip = [
                "ฟุตบอล",
                "ซีเกมส์",
                "เทควันโด",
                "มวย",
                "แบตมินตัน",
                "ปิงปอง",
                "มวยไทย",
                "วอลเล่บอล"
            ]

           

            inner += '    <div class="columns is-multiline" style="display:flex;flex-direction:row;margin:0;justify-content: center;width:100%">'
            for (var i = 0; i < 12; i++) {

                inner += '                 <div class="width-card width-card1" style="margin:15px 15px;">'
                inner += '                  <div class="card card-equal-height" >' 
                inner += '                      <span class="dd"><img src="images/news8.jpg"></span>' 
                inner += '                  </div>' 
                inner += '                 </div>'
            
            }
            inner += '             </div>'
            $('#news').append(inner);


        }
    </script>


</head>
<body>
    <?php include('navKKT.php') ?>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width:70% !important;max-width:none;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body" style="display:flex;flex-direction:row;justify-content:center;align-items:center;position:relative;padding:50px">
                    <button style="z-index:1500;position:absolute;top:0;right:10" type="button" class="close" data-dismiss="modal">&times;</button>
                    <img id="imgModal">
                </div>
            </div>

        </div>
    </div>

    <div class="container" style="background:#FFFFFF;padding:0;">
        <section class="hero is-medium ee aa1">
            <div class="hero-body" style=" padding-bottom: 5rem !important;padding-top: 9rem !important">
                <div class="container" style="text-align:center">
                    <img src="images/KKT2.png" style="width:100%">
                </div>
            </div>
        </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="sec-1">
    <section class="font-face">
            <div class="column01">
                <span id="event_name" class="span m-card">Football</span>
                <div class="textbox"></div>
            </div>
        </section>
    </section>
  
    <!-- <section class="sec-3 sec-2">
        <div class="columns">
            <div class="con-2 con-1">
                
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" style="height:50%">
                        <div class="carousel-item active">
                            <img id="img1" class="d-block w-100" src="images/news2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img id="img2" class="d-block w-100" src="images/sunny.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img id="img3" class="d-block w-100" src="images/mongkon.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </section> -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="section ">
        <div class="columns">
            <div class="container-fluid">
	            <div id="news">
            </div>
        </div>
    </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <?php include('footerKKT.php') ?>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>