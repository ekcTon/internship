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
            }
            $('#news1').append(inner);


            }

            function addnew2() {

            var inner = ""

            
            for (var i = 0; i < 1; i++) {

                inner += '        <span class="span">'
                inner += '            ตารางคะแนนการแข่งขันปิงปอง(ซีเกมส์ 2017)'
                inner += '        </span>'

            }
            $('#news2').append(inner);

            }

            function addnew3() {

            var inner = ""


            for (var i = 0; i < 1; i++) {
                
                // inner += '        <span class="span">'
                // inner += '            ตารางคะแนนการแข่งขันปิงปอง(ซีเกมส์ 2017)'
                // inner += '        </span>'

                inner += '<table class="table">'
                inner += '                <thead>'
                inner += '                    <tr>'
                inner += '                    <th><abbr title="Position">ลำดับที่</abbr></th>'
                inner += '                    <th>ประเทศ</th>'
                inner += '                    <th>ชื่อ-นามสกุล</th>'
                inner += '                    <th><abbr title="Played">คะแนน</abbr></th>'
                inner += '                    <th><abbr title="Won">W</abbr></th>'
                inner += '                    <th><abbr title="Drawn">D</abbr></th>'
                inner += '                    </tr>'
                inner += '                </thead>'              
                inner += '                <tbody>'
                inner += '                    <tr>'
                inner += '                    <th>1</th>'
                inner += '                    <td>ไทย</td>'
                inner += '                    <td>สายเมี้ยน จริงใจ</td>'
                inner += '                    <td>38</td>'
                inner += '                    <td>23</td>'
                inner += '                    <td>12</td>'
                inner += '                    </tr>'
                inner += '                    <tr>'
                inner += '                    <th>2</th>'
                inner += '                    <td>ไทย</td>'
                inner += '                    <td>สายเมี้ยน จริงใจ</td>'
                inner += '                    <td>38</td>'
                inner += '                    <td>20</td>'
                inner += '                    <td>11</td>'
                inner += '                    </tr>'
                inner += '                    <tr>'
                inner += '                    <th>3</th>'
                inner += '                    <td>ไทย</td>'
                inner += '                    <td>สายเมี้ยน จริงใจ</td>'
                inner += '                    <td>38</td>'
                inner += '                    <td>19</td>'
                inner += '                    <td>13</td>'
                inner += '                    </tr>'
                inner += '                    <tr>'
                inner += '                    <th>4</th>'
                inner += '                    <td>ไทย</td>'
                inner += '                    <td>สายเมี้ยน จริงใจ</td>'
                inner += '                    <td>38</td>'
                inner += '                    <td>19</td>'
                inner += '                    <td>9</td>'
                inner += '                    </tr>'
                inner += '                    <tr>'
                inner += '                    </tr>'
                inner += '                </tbody>'
                inner += '            </table>'

            }
            $('#news3').append(inner);

            }
    </script>

</head>
<body>
    <?php include('navKKT.php') ?>
    <div class="container">
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="section font-face">
            <div class="columns ">
                <span class="span textbox">งานทะเบียนนักกีฬา</span>
            </div>
    </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="section">
        <div class="columns">
           
                <div class="column is-one-quarter">
                    <div id="news1"></div>
                </div>

                <div class="column">
                    <div class="row" style="display: flex;flex-direction:row;justify-content: center;">
                       <div id="news2"></div>
                    </div>
                    <div class="section">
                        <div class="row" id="news3"> </div>
                    </div>
                </div>
                
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->    
        </div>
    </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <?php include('footerKKT.php') ?>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>