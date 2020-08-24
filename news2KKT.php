<html>

<head>

    <?php include('JsKKT.php') ?>
    <?php include('cssKKT.php') ?>
    <style>
        #share-buttons img { width: 50px; padding: 5px; border: 0; box-shadow: 0; display: inline; }

        @media (min-width: 360px) {
            .m-card1{
                margin: 25 0;
            }
            .m-card2{
                font-size:20px;
                font-family: 'Kanit', sans-serif;
            }
            .m-card3{
                font-size:15px;
                font-family: 'Kanit', sans-serif;
            }
        } 
        @media (min-width: 1024px) {
            .aa {
                font-size:30px;
                font-family: 'Kanit', sans-serif;
            }
            .mm {
                font-size:18px;
                font-family: 'Kanit', sans-serif;
            }
        } 
    </style>
    <script>
        $(document).ready(function(){
            fetchNews()

        })

        function fetchNews(){
            // var url_string = "http://www.example.com/t.html?a=1&b=3&c=m2-m3-m4-m5"; //window.location.href
            // var url = new URL(url_string);
            // var c = url.searchParams.get("c");
            var url_string = window.location.href;
            var url = new URL(url_string);
            var id = parseInt(url.searchParams.get('id'));
            $.ajax({
                type:'post',
                url:'./api/fetchSingleNews.php',
                data:{
                    "id":id
                },
                success:function(response){
                    // console.log(response)
                    var alldata = response.split('alladmin_')[1]
                    var alldata_ = alldata.split('0000000000')
                    var result = alldata_[0].split('^')
                    console.log(result)
                    var pic = result[6].split(',')
                    console.log(pic)
                    if(pic[0].trim().length >= 0){
                        $('#imgNews').attr('src',pic[0])
                    }
                    var pics = ''
                    for(var i = 0 ; i < pic.length ; i++){
                        pics += '<img id="imgNews1" src="'+pic[i]+'" style="min-width:50%;object-fit:contain;margin-bottom:50px;;">'
                
                    }
                    if(result[5].length > 0 && result[5].split(',')[0].length > 0){
                        console.log(result[5])
                        var youtubeLink = result[5]
                        var contentLink = ''
                        if(youtubeLink.length > 0){
                            $('#videoLink').css('display','block')
                            contentLink += '<iframe style="height:100%;width:100%" id="iframe" src="https://www.youtube.com/embed/'+youtubeLink.split('=')[1].split(',')[0]+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>'
                            contentLink += '</iframe>'
                            // </iframe>'
                        }
                        $('#videoLink').append(contentLink)
                    }
                    
                    // <iframe style="height:100%;width:100%" id="iframe" src="https://www.youtube.com/embed/mQigp0dgrmA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    // </iframe>
                    $('#titleNews').html(result[1])
                    $('#timeDate').html(result[7]+' ('+result[8]+'น.)')
                    $('#content').html(result[2])
                    $('#listPicNews').append(pics)
                    // $('#imgNews').attr('src',"images/sunny.jpg")
                }
            })
        }
    </script>
</head>

<body>
    <?php include('navKKT.php') ?>
    <div class="container" style="background:#FFFFFF;padding:0;">
    <section class="hero is-medium ee aa1">
            <div class="hero-body" style=" padding-bottom: 5rem !important;padding-top: 9rem !important">
                <div class="container" style="text-align:center">
                    <img src="images/KKT2.png" style="width:100%">
                </div>
            </div>
        </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="section font-face m-card1">
            <div class="rows ">
                    <span id="titleNews" class="aa m-card2" style="font-weight:bold">ซันนี่ สายล่อฟ้า” อรรคนิธิ์ ส่งเสริมสวัสดิ์ แชมป์เยาวชนเอเชียฟอร์มเฉียบ <br> แทง “จ้าว หยู เป็ง” ดาวโรจน์ของจีนขาดลอย 4-1 เฟรม</span>
                <div style="font-size:17px;color:grey;">
                    <i class="far fa-clock"></i>
                    <span id="timeDate">วันที่ 14 กพ 2562 (12.30 น)</span>
                    
                </div>
                <div class="textbox"></div>
                <br>
                <div id="share-buttons"> <!-- Facebook --> <a href="https://www.facebook.com/sharer.php?u=https://frinmash.blogspot.com" target="_blank"><img src="https://4.bp.blogspot.com/-raFYZvIFUV0/UwNI2ek6i3I/AAAAAAAAGSA/zs-kwq0q58E/s1600/facebook.png" alt="Facebook" /></a> 
                <!-- Twitter --> <a href="https://twitter.com/share?url=https://frinmash.blogspot.com&text=Simple Share Buttons" target="_blank"><img src="https://4.bp.blogspot.com/--ISQEurz3aE/UwNI4hDaQMI/AAAAAAAAGS4/ZAgmPiM9Xpk/s1600/twitter.png" alt="Twitter" /></a> 
                <!-- Google+ --> <a href="https://plus.google.com/share?url=https://frinmash.blogspot.com" target="_blank"><img src="https://2.bp.blogspot.com/-9ijXNtKTaSk/UwNI3ANT4MI/AAAAAAAAGSY/Tu4kE8x9SnI/s1600/google.png" alt="Google" /></a> 
                <!-- Email --> <a href="mailto:?Subject=FrinMash&Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://frinmash.blogspot.com"><img src="https://4.bp.blogspot.com/-njgKtNLrPqI/UwNI2o-9WfI/AAAAAAAAGR4/f8da1gBgyLs/s1600/email.png" alt="Email" /></a> 
                </div>
                <div>
                    
                </div>

            </div>
    </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="">
        <div style="text-align:center">
            <div style="width:100%;display:flex;justify-content:center;padding:20px;">
                <div id="videoLink" style="width:560px;height:560px;display:none">
                    
                </div>
            </div>
            
        
            
            <p id="content" class="m-card3 mm" style="text-indent:50px;text-align:justify;padding:5%;"></p>
            <div id="listPicNews" style="width:100%;display:flex;flex-direction:row;overflow:scroll;padding:10px;">
                
            </div>
            
            <!-- <img src="images/news7.jpg"> -->
        </div>
    </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <?php include('footerKKT.php') ?>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>

</html>