<html>
<head>
    <?php include('JsKKT.php') ?>
    <?php include('cssKKT.php') ?>
     <style>
            .card-equal-height {
                display: flex;
                flex-direction: column;
                height: 100%;
            }

            .card-equal-height .card-footer {
                margin-top: auto;
            }

            .card {
               
                border-radius: 0.5rem;
                margin:15px;
            }

            .card img {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 30px 0 rgba(0, 0, 0, 0.19);
                border-radius: 0.5rem;
                max-width: 96.5%;
                max-height: 96.5%;
                margin: 0 auto;
                margin-top: -3.5%;
            }

            .card:hover {
                box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
            }

            .dd {
                box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            }
            @media (max-width: 1024px) {
            .nn {
                flex-wrap:unset !important;
                text-align: unset !important;
                font-size:25px;
            }
            .tt {
                margin-left: 25px; 
                height:45px;
            }
            .m-card {
                margin-top: 28px;
            }
            .m-card1{
                margin: 25 0;
            }
        } 
            @media (min-width: 1024px) {
            .span1 {
            font-size:30px;
            font-family: 'Kanit', sans-serif;
            }
        } 
    </style>

    <script>
        function openCity(evt, cityName) {
            
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
               }
            // tablinks = document.getElementsByClassName("tablinks");
            // for (i = 0; i < tablinks.length; i++) {
            // tablinks[i].className = tablinks[i].className.replace(" active", "");
            // }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    <script>

        var totalData = null;
        var page = '<?php echo $page?>';
        console.log(page)
        $(document).ready(function() {
            // addnew()
            renderNews()
            
            // fetchAllPage();
        });
        
        function checksearch(){
            window.location.href = './search.php?type=news&word='+$('#searchInput').val()
        }

        function fetchAllPage(){
            $.ajax({
                type:'post',
                url:'./api/fetchTotalNews.php',
                data:{},
                success:function(response){
                    var alldata = response.split('alladmin_')[1]
                    var alldata_ = alldata.split('0000000000')[0]
                    // console.log(alldata_.split('^')[0])
                    totalData = parseInt(alldata_.split('^')[0]);
                    totalData = ( totalData -1)/9+1;
                    console.log(totalData)
                    var pagination = ''
                    for(var i = 1 ; i <= totalData ; i++){
                        console.log(i)
                        pagination += '<li>'
                        pagination += '    <a class="pagination-link "  aria-label="Page '+i+'" onclick="renderNewsClickButton('+i+')">'+i+'</a>'
                        pagination += '</li>'
                    }
                    $('#pagination').append(pagination)
                }
            })
        }

        function renderNewsClickButton(page){
            var htmlQuery = '';
            $.ajax({
                type:'post',
                url:'./api/fetchNews.php',
                data:{
                    "page":page
                },
                success:function(response){
                    var alldata = response.split('alladmin_')[1]
                    var alldata_ = alldata.split('0000000000')
                    htmlQuery += '    <div class="columns is-multiline">'
                    
                    for( var i = 0 ; i < alldata_.length ; i++ ){
                        
                        if(alldata_[i].trim().length > 0){
                            // console.log(alldata_[i].split('^'))
                            var result = alldata_[i].split('^')
                            var pic = result[6].split(',')
                            if(pic[0].trim().length == 0){
                                // console.log(pic)
                                pic[0] = './images/default_image.jpg'
                            }
                            if(result[9] == 'news'){
                                htmlQuery += '    <div class="col-md-4" style="margin: 10 0;">' 
                                htmlQuery += '        <div class="" >' 
                                htmlQuery += '            <img class="card-img-top" src="'+pic[0]+'" alt="Card image cap" style="width:320px;height:185px;object-fit:contain;">' 
                                htmlQuery += '           <div class="card-body dd" style="display:contents">' 
                                htmlQuery += '             <p class="font-face " style="font-weight:bold;font-size:16px;margin:5 0"><a href="news2KKT.php" style="color:black">' + result[1] + '</a></p>'
                                htmlQuery += '           <p style="margin:5 0">'+result[2].substring(0,50)+'...<a target="_blank" href="news2KKT.php?id='+result[0]+'">อ่านต่อ</a></p>' 
                                htmlQuery += '            <span style="font-size:12px">16 กค 2562 : 11.30 น</span>' 
                                htmlQuery += '           </div>' 
                                htmlQuery += '       </div>' 
                                htmlQuery += '   </div>'
                                
                            }
                        }
                    }
                    htmlQuery += '      </div>'
                    
                    $('#news').empty()
                    $('#news').append(htmlQuery)
                }
            })
        }

        function renderNews(id){
            var inner = ''
            $.ajax({
                type:'post',
                url :'./api/fetchNews.php',
                data : {
                    "page":id
                },
                success:function(response){
                    // console.log(response)    
                    var alldata = response.split('alladmin_')[1]
                    var alldata_ = alldata.split('0000000000')
                    
                    inner += '    <div class="" style="flex-wrap: wrap;flex-direction:row;display:flex;">'
                    
                    for( var i = 0 ; i < alldata_.length ; i++ ){
                        
                        if(alldata_[i].trim().length > 0){
                            console.log(alldata_[i].split('^'))
                            
                            var result = alldata_[i].split('^')
                            var date = result[7]
                            var month = ''
                            var time = result[8]
                            var pic = result[6].split(',')
                            if(date.length > 0){
                                if(date.split('/')[1] == '1'){
                                    month = 'ม.ค.'
                                }else if(date.split('/')[1] == '2'){
                                    month = 'ก.พ.'
                                }else if(date.split('/')[1] == '3'){
                                    month = 'มี.ค.'
                                }else if(date.split('/')[1] == '4'){
                                    month = 'เม.ย.'
                                }else if(date.split('/')[1] == '5'){
                                    month = 'พ.ค.'
                                }else if(date.split('/')[1] == '6'){
                                    month = 'มิ.ย.'
                                }else if(date.split('/')[1] == '7'){
                                    month = 'ก.ค.'
                                }else if(date.split('/')[1] == '8'){
                                    month = 'ส.ค.'
                                }else if(date.split('/')[1] == '9'){
                                    month = 'ก.ย.'
                                }else if(date.split('/')[1] == '10'){
                                    month = 'ต.ค.'
                                }else if(date.split('/')[1] == '11'){
                                    month = 'พ.ย.'
                                }else if(date.split('/')[1] == '12'){
                                    month = 'ธ.ค.'
                                }
                                var realDate = date.split('/')[0]+' '+month+' '+date.split('/')[2]
                            }
                            
                            
                            

                            
                            if(pic[0].trim().length == 0){
                                // console.log(pic)
                                pic[0] = './images/default_image.jpg'
                            }
                            if(result[9] == 'news'){
                                inner += '    <div class="col-md-4" style="margin: 10 0;">' 
                                inner += '        <div class="" >' 
                                inner += '            <img class="card-img-top" src="'+pic[0]+'" alt="Card image cap" style="width:320px;height:185px;object-fit:contain;">' 
                                inner += '           <div class="card-body dd" style="display:contents">' 
                                inner += '             <p class="font-face " style="font-weight:bold;font-size:16px;margin:5 0"><a href="news2KKT.php" style="color:black">' + result[1] + '</a></p>'
                                inner += '           <p style="margin:5 0">'+result[2].substring(0,50)+'...<a target="_blank" href="news2KKT.php?id='+result[0]+'">อ่านต่อ</a></p>' 
                                inner += '            <span style="font-size:12px">'+realDate+' : '+time+' น</span>' 
                                inner += '           </div>' 
                                inner += '       </div>' 
                                inner += '   </div>'
                            }
                        }
                    }
                    inner += '      </div>'
                    $('#news').append(inner)
                    // var buttonPage = (alldata_.length-1)/9+1;
                    // console.log( parseInt(buttonPage) )\
                    
                }
            })
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
        <div class="col-sm-10" style="background:#FFFFFF;padding:0;width:100%;padding-bottom:40px;margin-top:20px;">
            <!-- <section class="hero is-medium ee aa1"> -->
                
            <!-- </section> -->
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <section class="section">
            <section class="font-face">
                <div class="column">
                    <span class="span m-card">ข่าว</span>
                    <div class="textbox"></div>
                </div>
            </section>
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <section class="section" style="padding:20 30">
                <div class="columns tabcontent" id="page1">
                    <div id="news" style="width:100%"></div>
                </div>
                
            </section>
        
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