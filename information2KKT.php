<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
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

        .hole-font:hover {
        color:blue;
        }

        body{padding-top:30px;}

        .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

        small {
        display: block;
        line-height: 1.428571429;
        color: #999;
        }

        .column01 {
            display: block;
            flex-basis: 0;
            flex-grow: 1;
            flex-shrink: 1;
            padding: 0.75rem;
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

        @media (min-width: 360px) {
            .mm {
                margin-top: 28px;
            }
        } 
    </style>


<script>
        $(document).ready(function() {
            addnew1()
            addnew2()
            addnew3()
        });

        function addnew1() {

            var inner = ""
            for (var i = 0; i < 1; i++) {
            
                inner += '    <div class="control">'
                inner += '        <div>'
                inner += '            <input class="input" type="text" placeholder="Normal input" style="width:80%">'
                inner += '        </div>'
                inner += '        <br>'
                inner += '        <div>'
                inner += '            <span class="font-face">เพศ</span>'
                inner += '        </div>'
                inner += '        <br>'
                inner += '        <div>'
                inner += '            <div class="control">'
                inner += '                <label class="radio">'
                inner += '                    <input type="radio" name="answer">'
                inner += '                    <span class="font-face">ชาย</span>'
                inner += '                </label>'
                inner += '                <label class="radio">'
                inner += '                    <input type="radio" name="answer">'
                inner += '                    <span class="font-face">หญิง</span>'
                inner += '                </label>'
                inner += '            </div>'
                inner += '        </div>'
                inner += '        <br>'
                inner += '        <div>'
                inner += '            <div class="control">'
                inner += '                <div class="select font-face">'
                inner += '                    <select>'
                inner += '                        <option>จังหวัด</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                        <option>กรุงเทพมหานคร</option>'
                inner += '                    </select>'
                inner += '                </div>'
                inner += '            </div>'
                inner += '            <br>'
                inner += '            <div class="control">'
                inner += '                <div class="select font-face">'
                inner += '                    <select>'
                inner += '                        <option>ชนิดกีฬา</option>'
                inner += '                        <option>ปิงปอง</option>'
                inner += '                        <option>มวย</option>'
                inner += '                        <option>เทนนิส</option>'
                inner += '                        <option>เทควันโด</option>'
                inner += '                        <option>วอลเล่บอล</option>'
                inner += '                    </select>'
                inner += '                </div>'
                inner += '            </div>'
                inner += '            <br>'
                inner += '            <div class="control">'
                inner += '                <div class="select font-face">'
                inner += '                    <select>'
                inner += '                        <option>ประเภทกีฬา</option>'
                inner += '                        <option>ปิงปอง</option>'
                inner += '                        <option>มวย</option>'
                inner += '                        <option>เทนนิส</option>'
                inner += '                        <option>เทควันโด</option>'
                inner += '                        <option>วอลเล่บอล</option>'
                inner += '                    </select>'
                inner += '                </div>'
                inner += '            </div>'
                inner += '        </div>'
                inner += '    </div>'
                // inner += '</div>'
            }
            $('#news1').append(inner);


            }

            function addnew2() {

            var inner = ""
            for (var i = 0; i < 1; i++) {

                inner += '<img src="images/top10.jpg" style="object-fit:contain;width:100%">'
            }
            $('#news2').append(inner);


            }

            function addnew3() {

            var inner = ""
            var name = ["สุธาสินี เสวตรบุตร"]
            var birthday = ["วันเกิด : 14 สิงหาคม 2540"]
            var height = ["169"]
            var nation = ["ไทย"]
            var relation = ["โสด"]
            var sportType = ["ปิงปอง"]

            var weight = ["58"]
            var religion = ["โสด"]
            var under = ["ทีมชาติไทย"]
            var skill = ["ตั้งรับ,มือขวา"]

            var history = ["แชมป์ประเทศไทย ปี 2556"]
            var history1 = ["แชมป์ประเทศไทย ปี 2557"]
            var history2 = ["แชมป์ประเทศไทย ปี 2558"]
            var history3 = ["แชมป์ประเทศไทย ปี 2559"]

            for (var i = 0; i < 1; i++) {

                // inner += '<img src="images/top10.jpg" style="object-fit:contain;width:100%">'

                inner += '<div class="row" style="margin:5px 0px">'
                inner += '        <span class="span">'+name[i]+'</span>'
                inner += '        <span class="font-face">'+birthday[i]+'</span>'
                inner += '    </div>'
                inner += '    <div class="row">'
                inner += '      <div class="col-md-5">'
                inner += '        <span class="font-face" style="font-size:15px">'
                inner += '        ส่วนสูง : '+height[i]+' ซม.'
                inner += '        <br/>'
                inner += '        สัญชาติ : '+nation[i]+''
                inner += '        <br/>'
                inner += '        สถานะ : '+relation[i]+''
                inner += '        <br/>'
                inner += '        กีฬา : '+sportType[i]+''
                inner += '        </span>'             
                        
                inner += '      </div>'
                inner += '      <div class="col-md-7">'
                inner += '      <span class="font-face" style="font-size:15px">'
                inner += '        น้ำหนัก : '+weight[i]+' กก.'
                inner += '        <br/>'
                inner += '        ศาสนา : '+religion[i]+''
                inner += '        <br/>'
                inner += '        สังกัด : '+under[i]+''
                inner += '        <br/>'
                inner += '        รูปแบบการเล่น : '+skill[i]+' '
                inner += '        </span>'      
                inner += '      </div>'
                inner += '    </div>'
                inner += '    <div class="row" style="margin:5px 0px">'
                inner += '        <span class="span">ประวัติการแข่งขัน</span>'
                inner += '    </div>'
                inner += '    <div class="row">'
                inner += '      <div class="col-md-7">'
                inner += '        <li class="font-face" style="font-size:15px"><a href="victoryKKT.php" style="color:black">'+history[i]+'</a></li>'            
                inner += '        <li class="font-face" style="font-size:15px"><a href="#" style="color:black">'+history1[i]+'</a></li>'                        
                inner += '        <li class="font-face" style="font-size:15px"><a href="#" style="color:black">'+history2[i]+'</a></li>'               
                inner += '        <li class="font-face" style="font-size:15px"><a href="#" style="color:black">'+history3[i]+'</a></li>'                
                inner += '      </div>'
                inner += '    </div>'
            }
            $('#news3').append(inner);


            }
    </script>

<!-- <script>
        $(document).ready(function() {
            addnew()
        });

  
    </script> -->

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
    <section class="section ">
    <section class="font-face">
            <div class="column01">
                <span class="span m-card">งานทะเบียนนักกีฬา</span>
                <div class="textbox"></div>
            </div>
        </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="section">
        <div class="columns">
            <div class="column is-one-quarter">
                <div id="news1"></div>
            </div>
            <div class="column" style="display: flex;flex-direction: column;justify-content: center;">
                <div id="news2"></div>
            </div>
            <div class="column" style="display: flex;flex-direction: column;justify-content: center;">
                <div id="news3"></div>
            </div>
        </div>
    </section>
    </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <?php include('footerKKT.php') ?>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>