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
                padding:0 24;
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
            addnew()
            addnew1()
        });

        function checksearch(){
            console.log($('#searchInput').val())
            window.location.href = './search.php?type=information&word='+$('#searchInput').val()
        }

        function addnew() {

            

            var inner = ""

            var name = ["นายเอกชัย ชัยศักดิ์ศรีสกุล", 
            "นางสายเมี้ยน จริงใจ",
            "นายสมทวย ยงควนคง",
            "นางสาวศศิธร ยอมใจ",
            "นายฌอน หิรัญ"
            ]

            var detial = ["มวย",
                "แบตมินตัน",
                "ปิงปอง",
                "มวยไทย",
                "วอลเล่บอล"
            ]

            inner += '    <div class="columns is-multiline pp">'
            for (var i = 0; i < 5; i++) {

               
                inner += '    <div class="card col-md-11 p-3">'
                inner += '      <div class="row ">'
                inner += '          <div class="col-md-4">'
                inner += '            <img class="w-100" src="images/top10.jpg">'
                inner += '          </div>'
                inner += '          <div class="col-md-8">'
                inner += '              <div class="card-block">'
                inner += '                   <p class="card-text text-justify font-face" style="font-wight:bold;font-size:25px">'+name[i]+'</p>'
                inner += '                  <p class="card-text text-justify font-face">ชนิดกีฬา : '+detial[i]+'</p>'
                inner += '                   <a href="information2KKT.php"><p class="card-text text-justify font-face hole-font" style="font-size:15px">รายละเอียด</p></a>'
                inner += '              </div>'
                inner += '          </div>'
                inner += '      </div>'
                inner += '      </div>'
             




                

            }
            inner += '             </div>'
            $('#news').append(inner);


        }

        function addnew1() {

            var inner = ""
            for (var i = 0; i < 1; i++) {

                inner += '    <div class="control">'
                inner += '      <form>'
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
                inner += '      </form>'
                inner += '    </div>'
            }
            $('#news1').append(inner);


            }

    </script>

</head>
<body>
    <?php include('navKKT.php') ?>
    <div class="container" style="background:#FFFFFF;padding:0;width:100%;padding-bottom:40px;">
        <section class="hero is-medium ee aa1">
            <div class="hero-body" style=" padding-bottom: 5rem !important;padding-top: 9rem !important">
                <div class="container" style="text-align:center">
                    <img src="images/KKT2.png" style="width:100%">
                </div>
            </div>
        </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="section">
    <section class="font-face">
            <div class="column01">
                <span class="span m-card">งานทะเบียนนักกีฬา</span>
                <div class="textbox"></div>
            </div>
        </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="">
        <div class="columns section" style="height:1146px;">
           
                <div class="column is-one-quarter">
                    <div id="news1"></div>
                </div>

                <div class="column">
                    <div style="display:flex;flex-direction:row;">
                        <section class="">
                            <div class="row">
                                <div id="news"></div>
                            </div>
                        </section>
                    </div>
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