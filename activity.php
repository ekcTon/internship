<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include('JsKKT.php') ?>
    <?php include('cssKKT.php') ?>


    <style>
      :root {
    
        }
        body {
            background-color: #FFFFFF;
        }
        .card {
            border-radius:0;
            margin:10px auto;
        }
        .card-title {
            text-transform: uppercase;
            color: #E44424;
        }

        .card-text {
            margin-top:10px;
            margin-bottom: 10px;
            background-color:#FFFFFF;
            color:#000000;
        }
        a.btn, a.btn:visited {
            color:#333333;
        }
        hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 1024px) {
            .nn {
                flex-wrap:unset !important;
                text-align: unset !important;
                font-size:15px;
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
            .aa1 {
                display:none !important;
            }
            .pp {
                margin:0;
            }
            .m1 {
                margin:10;
            }
        } 
            @media (min-width: 1024px) {
            .span1 {
            font-size:30px;
            font-family: 'Kanit', sans-serif;
            }
            .nn1 {
                font-size:25px;
            }
            .pp {
                margin:0;
            }
            .ff {
                font-size:20px;
            }
            
        }
        /* @media (min-width: 360px) {
            .Ncol {
                font-size:13px ;
            }
        }  */
    </style>


    <script>
        $(document).ready(function() {
            // addnew()
            // addnew1()
            getMonth()
            
            
        });

        function getMonth(){
            
            var day = new Date().getDate()
            var month = parseInt(new Date().getMonth())+1
            var year = parseInt(new Date().getFullYear())+543
            var date = 01+'/'+month+'/'+year
            var endDate = new Date(new Date().getFullYear(),new Date().getMonth()+1,0).getDate()+'/'+month+'/'+year
            var realMonth = ''
            if(month == 1){
                realMonth = 'ม.ค.'
            }else if(month == 2){
                realMonth = 'ก.พ.'
            }else if(month == 3){
                realMonth = 'มี.ค.'
            }else if(month == 4){
                realMonth = 'เม.ย.'
            }else if(month == 5){
                realMonth = 'พ.ค.'
            }else if(month == 6){
                realMonth = 'มิ.ย.'
            }else if(month == 7){
                realMonth = 'ก.ค.'
            }else if(month == 8){
                realMonth = 'ส.ค.'
            }else if(month == 9){
                realMonth = 'ก.ย.'
            }else if(month == 10){
                realMonth = 'ต.ค.'
            }else if(month == 11){
                realMonth = 'พ.ย.'
            }else if(month == 12){
                realMonth = 'ธ.ค.'
            }
            addnew3(date,endDate)
            $('#month').html(realMonth)
        }

        function checksearch(){
            window.location.href = './search.php?type=activity&word='+$('#searchInput').val()
        }

        function addnew3(start,end) {
            var inner = ''
            $.ajax({
                type:'post',
                url:'./api/fetchCalendars.php',
                data:{
                    start_date:start,
                    end_date : end
                },
                success:function(response){
                    // console.log(response)
                    if(response.indexOf('alladmin_') >= 0){
                        var alldata = response.split('alladmin_')[1];
                        var alldata_ = alldata.split('0000000000')
                        inner += '    <div class="rows is-multiline">'
                        for(var i = 0 ; i < alldata_.length ; i++ ){
                            if(alldata_[i].trim().length > 0){
                                var result = alldata_[i].split('^')
                                console.log(result)
                                inner += '        <table class="table table-secondary dd" style="margin:6;background:#117FCD;">'
                                inner += '            <tbody>'
                                inner += '                <tr>'
                                inner += '                <td style="padding: .7rem;width:30%;color:#ffffff"><span class="nn ff">'+result[4]+'</span></td>'
                                inner += '                <td style="padding: .7rem;color:#ffffff"><span class="nn ff">'+result[2]+'</span></td>'
                                inner += '                </tr>'
                                inner += '            </tbody>'
                                inner += '        </table>'
                            }
                        }
                        inner += '    </div>'
                        $('#news0').append(inner);
                    }
                    
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
        <div class="col-sm-10" style="background:#FFFFFF;padding:0;width:100%;padding-bottom:40px;">
                
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <section class="section ">
            <section class="font-face">
                <div class="column">
                    <span class="span m-card">ปฏิทินกิจกรรม เดือน <span id="month"></span></span>
                    <div class="textbox"></div>
                </div>
            </section>
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <section class="m1" >
            <section class="font-face">
                    <div class="columns">
                        <div class="column">
                            <!-- <iframe src="https://calendar.google.com/calendar/htmlembed?src=addressbook%23contacts%40group.v.calendar.google.com&ctz=Asia%2FBangkok" style="border: 0;height:67%" width="100%" frameborder="0" scrolling="yes"></iframe> -->
                                <!-- <div id="news1"></div> -->
                                <div id="news0"></div>
                        </div>
                    </div>
            </section>
        </section>
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <section class="" >
            <div class="row">
                <!-- <div id="news"></div> -->
            </div>
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