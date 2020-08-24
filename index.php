<html>
<head>
    <?php include('JsKKT.php') ?>
    <?php include('cssKKT.php') ?>
    
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .bg-font {
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
        }
        .op {
            opacity:1px;
        }
        @media (max-width: 1024px) {
            .aa1 {
                display:none !important;
            }
            .nn {
                flex-wrap:unset !important;
                text-align: unset !important;
                font-size:15px;
            }
            .aa {
                width:30%;
            }
            .hide-head {
              display: none !important;
            }
            .hide-head1 {
                margin-top:40px; 
            }
            .tt {
                margin-left: 25px; 
                height:45px;
            }
            .tt2 {
                padding: unset!important;
            }
            .notWeb{
                display:none !important;
            }
            .showHead{
                width:100%;
                display:flex;
                flex-direction:row;
                justify-content:space-between;
            }
            .notWebMenu{
                width:100% !important;
            }
            .showOnlyNotWeb{
                display :'';
            }
        } 
        @media (min-width: 1024px) {
            .cc {
                height:50px;
                margin:20px;
            }
            .nn1 {
                font-size:25px;
            }
            .section-edit {
                padding: 3rem 1.5rem;
            }
            .notWeb{
                display:'';
            }
            .showHead{
                width:60%;
                display:flex;
                flex-direction:row;
                justify-content:space-between;
            }
            .showOnlyNotWeb{
                display :none !important;
            }
        } 
        @media (min-width: 360px) {
            .Ncol {
                margin: 15 0;
            }
        } 
    </style>
            <script>
                $(document).ready(function() {

                    addCarousel()
                    addnew()
                    addnew5()
                    addnew3()
                    addnew6()
                    fetchInformation()
                    
                });

                
                function checksearch(){
                    window.location.href = './search.php?type=news&word='+$('#searchInput').val()
                }

                function fetchInformation(){
                    $.ajax({
                        type:'post',
                        url : './api/fetchInformationNews.php',
                        data:{},
                        success:function(response){
                            // console.log(response)
                            if(response.indexOf('alladmin_') >= 0){
                                var alldata = response.split('alladmin_')[1]
                                var alldata_ = alldata.split('0000000000')
                                var pic = []
                                var textNews = []
                                // console.log(alldata_)
                                for(var i = 0 ; i < alldata_.length ; i++){
                                    if(alldata_[i].trim().length > 0){
                                        // console.log('++++',alldata_[i])
                                        var result = alldata_[i].split('^')
                                        // console.log(result)
                                        var Piclength = result[6].split(',').length
                                        for(var j = 0 ; j < Piclength ; j++){
                                            if(result[6].split(',')[j].trim().length > 0 ){
                                                pic.push(result[6].split(',')[j])
                                                // console.log(result[6].split(',')[j])
                                            }
                                            
                                        }
                                        textNews.push(result[1])
                                        
                                        // console.log('=>',result)
                                    }
                                }
                                if(pic.length == 1){
                                    pic.push(pic[0])
                                    pic.push(pic[0])
                                    textNews.push(textNews[0])
                                    textNews.push(textNews[0])
                                }else if(pic.length == 2){
                                    pic.push(pic[0])
                                    textNews.push(textNews[0])
                                }
                                $('#imgInfor1').attr('src',pic[0])
                                $('#textInfor1').html(textNews[0])
                                $('#imgInfor2').attr('src',pic[1])
                                $('#textInfor2').html(textNews[1])
                                $('#imgInfor3').attr('src',pic[2])
                                $('#textInfor3').html(textNews[2])
                                // console.log(pic)
                                // console.log(textNews)
                            }
                            
                        }
                    })
                }

                function addnew6() {

                    $.ajax({
                        type:'post',
                        url:'./api/fetchResultMatch.php',
                        data:{},
                        success:function(response){
                            console.log(response)
                            if(response.indexOf('alladmin_') >= 0){
                                console.log(response.split('alladmin_')[1].split('0000000000'))
                                var result = response.split('alladmin_')[1].split('0000000000')
                                var inner = ""
                                inner += '    <div class="columns is-multiline">'
                                for(var i = 0 ; i < result.length - 1 ; i++ ){
                                    console.log(result[i].split('^'))
                                    var data = result[i].split('^')
                                    var date = data[9].split('/')[1]+'/'+data[9].split('/')[0]+'/'+(parseInt(data[9].split('/')[2])+543)
                                    inner += '<div style="width:100%;height:150px;display:flex;flex-direction:column;margin-bottom:10px;background-color:#ccc;border-radius:3px;padding:15px 10px;">'
                                    inner += '    <div class="showHead" style="">'
                                    inner += '        <div style="margin-left:10px">'
                                    inner += '            <h3>'+data[1]+'</h3>'
                                    inner += '        </div>'
                                    inner += '        <div>'
                                    inner += '            <h4 class="notWeb">'+date+'</h3>'
                                    inner += '        </div><div>'
                                    inner += '            <h4 class="notWeb">'+data[8]+'</h3>'
                                    inner += '        </div>'
                                    inner += '    </div>'
                                    inner += '    <div style="display:flex;flex-direction:row;width:100%;height:100%">'
                                    inner += '        <div class="notWebMenu" style="display:flex;flex-direction:column;height:100%;width:50%;justify-content:space-evenly;">'
                                    inner += '            <div  style="display:flex;flex-direction:row;width:100%;height:40px;">'
                                    inner += '                <div  style="width:50%;display:flex;justify-content:flex-end;">'
                                    inner += '                    <span>ชนิดกีฬา :</span>'
                                    inner += '                </div>'
                                    inner += '                <div  style="width:50%;">'
                                    inner += '                    <span style="margin-left:5px">'+data[2]+'</span>'
                                    inner += '               </div>'
                                    inner += '            </div>'
                                    inner += '            <div style="display:flex;flex-direction:row;width:100%;height:40px;">'
                                    inner += '                <div style="width:50%;display:flex;justify-content:flex-end;">'
                                    inner += '                    <span>ชื่อ - สกุล :</span>'
                                    inner += '                </div>'
                                    inner += '               <div style="width:50%;">'
                                    inner += '                    <span style="margin-left:5px">'+data[5]+'</span>'
                                    inner += '                </div>'
                                    inner += '            </div>'
                                    inner += '            <div class="showOnlyNotWeb" style="display:flex;flex-direction:row;width:100%;height:40px;">'
                                    inner += '                <div style="width:50%;;display:flex;justify-content:flex-end;">'
                                    inner += '                    <span>ผลการแข่งขัน :</span>'
                                    inner += '                </div>'
                                    inner += '                <div style="width:50%;">'
                                    inner += '                    <span style="margin-left:5px">'+data[4]+'</span>'
                                    inner += '                </div>'
                                    inner += '            </div>'
                                    inner += '        </div>'
                                    inner += '        <div class="notWeb" style="display:flex;flex-direction:column;height:100%;width:50%;justify-content:space-evenly;">'
                                    inner += '            <div class="notWeb" style="display:flex;flex-direction:row;width:100%;height:40px;">'
                                    inner += '                <div style="width:50%;display:flex;justify-content:flex-end;">'
                                    inner += '                    <span>ประเภทกีฬา :</span>'
                                    inner += '                </div>'
                                    inner += '                <div style="width:50%;">'
                                    inner += '                    <span style="margin-left:5px">'+data[7]+'</span>'
                                    inner += '                </div>'
                                    inner += '            </div>'
                                    inner += '            <div class="notWeb" style="display:flex;flex-direction:row;width:100%;height:40px;">'
                                    inner += '                <div style="width:50%;;display:flex;justify-content:flex-end;">'
                                    inner += '                    <span>ผลการแข่งขัน :</span>'
                                    inner += '                </div>'
                                    inner += '                <div style="width:50%;">'
                                    inner += '                    <span style="margin-left:5px">'+data[4]+'</span>'
                                    inner += '                </div>'
                                    inner += '            </div>'
                                    inner += '        </div>'
                                    inner += '    </div>'
                                    inner += '</div>'
                                }
                                inner += '             </div>'
                                $('#news6').append(inner);
                            }
                        }

                    })
                }


                function addnew5() {

                    var inner = ""
                    $.ajax({
                        type:'post',
                        data:{},
                        url:'./api/fetchResearch.php',
                        success:function(response){
                            // console.log(response)
                            if(response.indexOf('alladmin_') >= 0){
                                var alldata = response.split('alladmin_')[1]
                                var alldata_ = alldata.split('0000000000')
                                inner += '    <div class="columns is-multiline">'
                                
                                for(var i = 0 ; i < alldata_.length ; i++){
                                    // console.log(alldata_[i].split('^'))
                                    
                                    if(alldata_[i].trim().length > 0){
                                        var result = alldata_[i].split('^')
                                        inner += '    <div class="col-md-3 Ncol">' 
                                        inner += '        <div class="card">' 
                                        inner += '          <div class="card-head" style="background-color:#117FCD;">'
                                        inner += '             <p class=" has-text-centered" style="display:flex;flex-direction:row;justify-content:center;font-weight:bold;"><a style="color:white;margin:10px;font-size:14px;">' + result[1] + '</a></p>'
                                        inner += '          </div>'
                                        inner += '           <div class="card-body">' 
                                        inner += '           <p style="font-size:15">'+result[2].substring(0,80)+'...<a href="news2KKT.php">อ่านต่อ</a></p>' 
                                        inner += '            <span style="font-size:10px">บทความโดย: '+name[i]+'</span>' 
                                        inner += '           </div>' 
                                        inner += '       </div>' 
                                        inner += '   </div>' 
                                    }
                                    
                                }
                                inner += '             </div>'
                                $('#news5').append(inner);
                            }
                            
                        }
                    })
                }
                            
                function addnew() {

                    

                    var inner = ""
                    

                    inner += '    <div class="columns is-multiline aa1">'
                    for (var i = 0; i < 6; i++) {


                        inner += '                 <div class="column">'
                        inner += '                  <div class="card card-equal-height" >' 
                        inner += '                      <img src="images/py.jpg" id="head1" onclick="myFunction()">' 
                        inner += '                      <div class="carousel-caption d-none d-md-block">' 
                        inner += '                          <a href="newsKKT.php"><p style="font-size:15;margin:0;color:#ffffff;font-weight:bold;text-decoration:underline">Liverpool</p></a>' 
                        inner += '                      </div>' 
                        inner += '                  </div>' 
                        inner += '                 </div>'
                        

                    }
                    inner += '             </div>'
                    $('#news').append(inner);


                }

                function addCarousel(){
                    $.ajax({
                        type:'post',
                        url:'./api/fetchImageActivity.php',
                        data:{},
                        success:function(response){
                            // console.log(response.split('alladmin_')[1].split('0000000000'))
                            if( response.indexOf('alladmin_') >= 0 ){
                                var alldata = response.split('alladmin_')[1]
                                var alldata_ = alldata.split('0000000000')
                                var img = []
                                for(var i = 0 ; i < alldata_.length ; i++){
                                    if(alldata_[i].trim().length > 0){
                                        var result = alldata_[i].split('^')
                                        // console.log(result[1].split(','))
                                        var loopPic = result[1].split(',').length
                                        for(var j = 0 ; j < loopPic ; j++){
                                            // console.log(result[1].split(',')[j])
                                            if(result[1].split(',')[j].trim().length > 0){
                                                img.push(result[1].split(',')[j].trim())
                                            }
                                            
                                        }
                                    }
                                }
                                // for(var i = 0 ; i < img.length ; i++){
                                //     if(i < 8){
                                $('#imgfirst1').attr('src','../kkt/myfile/'+img[0])
                                $('#imgfirst2').attr('src','../kkt/myfile/'+img[1])
                                $('#imgfirst3').attr('src','../kkt/myfile/'+img[2])
                                $('#imgfirst4').attr('src','../kkt/myfile/'+img[3])
                                $('#imgsecond1').attr('src','../kkt/myfile/'+img[4])
                                $('#imgsecond2').attr('src','../kkt/myfile/'+img[5])
                                $('#imgsecond3').attr('src','../kkt/myfile/'+img[6])
                                $('#imgsecond4').attr('src','../kkt/myfile/'+img[7])
                                //     }
                                // }
                                // console.log(img)
                            }
                        }
                    })
                }

                function addnew3() {

                var inner = ""

                $.ajax({
                    type:'post',
                    url:'./api/fetchCalendarsIndex.php',
                    data:{},
                    success:function(response){
                        // console.log(response.split('alladmin_')[1].split('0000000000') )
                        if(response.indexOf('alladmin_') >= 0){
                            var alldata = response.split('alladmin_')[1]
                            var alldata_ = alldata.split('0000000000')
                            // console.log(alldata_)
                            inner += '<div class="rows is-multiline">'
                            for(var i = 0 ; i < alldata_.length ; i++){
                                if(alldata_[i].trim().length > 0){
                                    var result = alldata_[i].split('^')
                                    // console.log(result)
                                    inner += '        <table class="table table-secondary dd" style="margin:6;background:#117FCD;">'
                                    inner += '            <tbody>'
                                    inner += '                <tr>'
                                    inner += '                <td style="padding: .7rem;width:30%;color:#ffffff">'+result[4]+'</td>'
                                    inner += '                <td style="padding: .7rem;color:#ffffff">'+result[1]+'</td>'
                                    inner += '                </tr>'
                                    inner += '            </tbody>'
                                    inner += '        </table>'
                                }
                            }
                            inner += '</div>'
                            $('#news3').append(inner);
                        }else{

                        }
                        
                    }
                })

                

                }    

            </script>
            <script>
            function myFunction1() {
                document.getElementById("demo1").value;
                $("#img1").attr('src','images/sunny.jpg');
            }
            </script>

            <script>
            function myFunction() {
                document.getElementById("head1").value;
                $("#imghead").attr('src','images/py.jpg');
            }

            </script>
            <script>
            function myFunction1() {
                    document.getElementById("demo1").value;
                    $("#img1").attr('src','images/sunny.jpg');
                }
            </script>

            <script>
            function myFunction() {
                    document.getElementById("head1").value;
                    $("#imghead").attr('src','images/py.jpg');
                }
            </script>
    
</head>
<body >
   
    <?php include('navKKT.php') ?>
    <div class="hero-body" style="margin-top:130px;background-color:#000;">
        <div style="text-align:center">
            <img src="images/KKT2.png" style="width:100%">
        </div>
    </div>
    <div class="" style="z-index:2;">
    
        <!-- <section class="hero is-medium ee aa1"> -->
            
        <!-- </section> -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    
    <div  style="background:#FFFFFF;padding:0;width:100%;padding-bottom:40px;margin-top:20px;">
    <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    
        <section class="section-edit" style="overflow-y:hidden;">
            <section class="font-face">
                    <div class="columns">
                        <div class="column hide-head1 tt2">
                            <div class="hide-head" style="display:flex;flex-direction:row;justify-content:center;margin:15 0;">
                                <span class="span">ข่าวประชาสัมพันธ์</span>
                            </div>
                            <div> 
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img id="imgInfor1" style="width:645px;height:363px;object-fit:contain;" class="d-block w-100" src="images/chaimp.jpg" alt="First slide" id="imghead">
                                            <div class="carousel-caption d-md-block">
                                                <p id="textInfor1" class="bg-font nn" style="background-color:#117FCD">Liverpool beat Tottenham Hotspur in Champions League final to win sixth European Cup</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img id="imgInfor2" style="width:645px;height:363px;object-fit:contain;" class="d-block w-100" src="images/py.jpg" alt="Second slide">
                                            <div class="carousel-caption  d-md-block">
                                                <p id="textInfor2" class="bg-font nn" style="background-color:#117FCD">Liverpool FC transfer plans leave them with 2018 challenge that Man City faced</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img id="imgInfor3" style="width:645px;height:363px;object-fit:contain;" class="d-block w-100" src="images/py2.jpg" alt="Third slide">
                                            <div class="carousel-caption d-md-block">
                                                <p id="textInfor3" class="bg-font nn" style="background-color:#117FCD">Liverpool lifts the Champions!! You'll never walk alone, We are liverpool!!!!</p>
                                            </div>
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

                        <div class="column aa1">
                            <div style="text-align:center;margin:15 0;">
                                <span class="span">ตารางกิจกรรม</span> 
                            </div>
                            <div id="news3"></div>
                        </div>
                    </div>
            </section>
        </section>
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
                <div class="columns" style="padding:0 24">
                    <div class="textbox aa1"></div>
                </div>
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <section class="font-face">
            <div class="column">
                <div class="tt cc"><span class="span">ข่าวผลการแข่งขัน</span></div>
                <div class="columns">
                    <div class="column" style="display:flex;flex-direction:column;justify-content:center;margin:0 20">
                        <div id="news6">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <section class="section">
            <section class="font-face">
                <div class="aa1 textbox">

                </div>
                <div class="column">
                    <div style="display:flex;flex-direction:row;width:100%">
                        <div style="display:flex;flex-direction:row;width:70%">
                            <span class="span">บทความวิจัย</span>
                        </div>
                        <div style="display:flex;flex-direction:row;width:30%;justify-content:flex-end;align-items:center">
                            <span style="font-size:15px"><a href="research.php">ดูทั้งหมด</a></span>
                        </div>
                    </div>
                <div style="margin:20 0;">
                    <div id="news5"></div>
                </div>

                </div>
            </section>
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <section class="font-face">
                <div class="textbox aa1">

                </div>
                <div class="column">
                    <div style="display:flex;flex-direction:row;width:100%">
                        <div style="display:flex;flex-direction:row;width:70%">
                            <span class="span">ภาพกิจกรรม</span>
                        </div>
                        <div style="display:flex;flex-direction:row;width:30%;justify-content:flex-end;align-items:center">
                            <span style="font-size:15px"><a href="gallery.php">ดูทั้งหมด</a></span>
                        </div>
                    </div>

                    <div class="row blog" style="margin:10 -15">
                        <div class="col-md-12">
                            <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#blogCarousel" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-3 Ncol">
                                                <a href="#" style="width:245px;height:185px;display:flex;justify-content:center;align-items:center;">
                                                    <img style="width:100%;height:100%;object-fit:contain;" id="imgfirst1" src="images/py.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-3 Ncol">
                                                <a href="#" style="width:245px;height:185px;display:flex;justify-content:center;align-items:center;">
                                                    <img style="width:100%;height:100%;object-fit:contain;" id="imgfirst2" src="images/py.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-3 Ncol">
                                                <a href="#" style="width:245px;height:185px;display:flex;justify-content:center;align-items:center;">
                                                    <img style="width:100%;height:100%;object-fit:contain;" id="imgfirst3" src="images/py.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-3 Ncol">
                                                <a href="#" style="width:245px;height:185px;display:flex;justify-content:center;align-items:center;">
                                                    <img style="width:100%;height:100%;object-fit:contain;" id="imgfirst4" src="images/py.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-3 Ncol">
                                                <a href="#" style="width:245px;height:185px;display:flex;justify-content:center;align-items:center;">
                                                    <img style="width:100%;height:100%;object-fit:contain;" id="imgsecond1" src="images/py.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-3 Ncol">
                                                <a href="#" style="width:245px;height:185px;display:flex;justify-content:center;align-items:center;">
                                                    <img style="width:100%;height:100%;object-fit:contain;" id="imgsecond2" src="images/py.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-3 Ncol">
                                                <a href="#" style="width:245px;height:185px;display:flex;justify-content:center;align-items:center;">
                                                    <img style="width:100%;height:100%;object-fit:contain;" id="imgsecond3" src="images/py.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-3 Ncol">
                                                <a href="#" style="width:245px;height:185px;display:flex;justify-content:center;align-items:center;">
                                                    <img style="width:100%;height:100%;object-fit:contain;" id="imgsecond4" src="images/py.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
        </section>
    </div>
    
    <div class="col-sm-1"></div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    </div>
    </div>
    <?php include('footerKKT.php') ?>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>