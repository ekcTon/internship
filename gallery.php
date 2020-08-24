<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <?php include('JsKKT.php') ?>
    <?php include('cssKKT.php') ?>
    
     <style>

            .column {
            height: 200px;
            margin: 10px;
            text-align: center;
            font-size: 2em;
             box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            }
            .column:hover {
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            }

            .column p {
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            }

            .brand {
            min-height: 3rem;
            background: #212;
            }

            .brand-title, .brand-title:hover, .brand-title:focus {
            color: #fff;
            font-size: 1.5em;
            text-align: center;
            margin-left: 0.6rem;
            text-transform: uppercase;
            }

            .img1 {
            background: url("images/news6.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            }
            .column01 {
            display: block;
            flex-basis: 0;
            flex-grow: 1;
            flex-shrink: 1;
            padding: 0.75rem;
            }
            @media (min-width: 360px) {
            .mm {
                margin-top: 28px;
            }
        } 

    </style>


    <script>

        var totalData = null;

        

        $(document).ready(function() {
            // addnew()
            fetchGallery(1)
            fetchAllPage()
        });
        function checksearch(){
            console.log($('#searchInput').val())
            window.location.href = './search.php?type=gallery&word='+$('#searchInput').val()
        }

        function openCity(evt, cityName) {
            console.log('cityName',cityName)
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
               }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function fetchAllPage(){
            $.ajax({
                type:'post',
                url:'./api/fetchTotalGallery.php',
                data:{},
                success:function(response){
                    if(response.indexOf('alladmin_') >= 0){
                        var alldata = response.split('alladmin_')[1]
                        var alldata_ = alldata.split('0000000000')[0]
                        // console.log(alldata_.split('^')[0])
                        totalData = parseInt(alldata_.split('^')[0]);
                        totalData = ( totalData -1)/9+1;
                        var pagination = ''
                        for(var i = 1 ; i < totalData ; i++){
                            console.log(i)
                            pagination += '<li>'
                            pagination += '    <a class="pagination-link "  aria-label="Page '+i+'" onclick="openCity(event, `page'+i+'`)">'+i+'</a>'
                            pagination += '</li>'
                        }
                        $('#pagination').append(pagination)
                    }
                    
                }
            })
        }

        function fetchGallery(){
            $.ajax({
                type:'post',
                url:'./api/fetchGallery.php',
                data:{},
                success:function(response){
                    // console.log(response)
                    if(response.indexOf('alladmin_') >= 0){
                        var alldata = response.split('alladmin_')[1]
                        var alldata_ = alldata.split('0000000000')
                        var inner = '';
                        inner += '    <div class="columns is-multiline" style="display:flex">'
                        for(var i = 0 ; i < alldata_.length ; i++){
                            if(alldata_[i].trim().length > 0){
                                // console.log(alldata_[i])
                                var result = alldata_[i].split('^')
                                console.log(result)
                                if(result[1].split(',')[0].trim().length > 0){
                                    var pic = result[1].split(',')[0]
                                    console.log(pic)
                                    inner += '    <div class="col-md-3">'
                                    inner += '      <a href="gallery2KKT.php?id='+result[0]+'">'      
                                    inner += '          <div class="column" style="background: url(../kkt/myfile/'+pic+');background-size: cover;background-repeat: no-repeat;">'
                                    inner += '              <p style="color:white;font-family:kanit;font-size:70%;background-color:#117FCD;">'+result[2]+'</p>'
                                    inner += '          </div>'
                                    inner += '      </a>'
                                    inner += '   </div>'
                                }else{
                                    inner += '    <div class="col-md-3">'
                                    inner += '      <a href="gallery2KKT.php">'      
                                    inner += '          <div class="column" style="background: url("./images/bgathlete.jpg");background-size: cover;background-repeat: no-repeat;">'
                                    inner += '              <p style="color:white;font-family:kanit;background-color:#117FCD;">'+result[2]+'</p>'
                                    inner += '          </div>'
                                    inner += '      </a>'
                                    inner += '   </div>'
                                }
                            }
                        }
                        inner += '             </div>'
                        $('#news').append(inner);
                    }
                    
                }
            })
        }

        function addnew() {
            var inner = ""

            var descrip = [
                "ฟุตบอล",
                "ซีเกมส์",
                "เทควันโด",
                "มวย",
                "ฟแบตมินตัน",
                "ปิงปอง",
                "มวยไทย",
                "วอลเล่บอล",
                "ฟแบตมินตัน",
                "มวยไทย",
                "วอลเล่บอล",
                "ฟแบตมินตัน",
            ]
            inner += '    <div class="columns is-multiline" style="display:contents">'
            for (var i = 0; i < descrip.length; i++) {
                inner += '    <div class="col-md-3">'
                inner += '      <a href="gallary2KKT.php">'      
                inner += '          <div class="column img1 ">'
                inner += '              <p class="span" style="color:white">'+descrip[i]+'</p>'
                inner += '          </div>'
                inner += '      </a>'
                inner += '   </div>' 
            }
            inner += '             </div>'
            $('#news').append(inner);
        }
    </script>

</head>
<body>
    <?php include('navKKT.php') ?>
    <div class="hero-body" style="margin-top:130px;background-color:#000;">
        <div style="text-align:center">
            <img src="images/KKT2.png" style="width:100%">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10" style="background:#FFFFFF;padding:0;width:100%;padding-bottom:40px;">
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <section class="section">
        <section class="font-face">
                <div class="column01">
                    <span class="span m-card">Gallary</span>
                    <div class="textbox"></div>
                </div>
            </section>
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <section class="section" style="padding:20 30;display:flex;flex-direction:row;width:100%">
            <div class="columns tabcontent" style="width:100%" id="page1">
                <div id="news" style="width:100%"></div>
            </div>
        </section>
        <!--   --------------------------------------------------------------------------------------------------------------------------------------------------  -->
        
        </section>
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
        </div>
        <div class="col-sm-1"></div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <?php include('footerKKT.php') ?>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>

</html>