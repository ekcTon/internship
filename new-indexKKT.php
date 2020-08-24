<html>
<head>
    <?php include('JsKKT.php') ?>
    <?php include('cssKKT.php') ?>
    
    <style>
        .aa {
            font-size: 50px;
        }
       @media only screen and (max-width: 1000px) {
                .aa {
                    font-size: 12px;
                }

            }
    </style>

    <script>
        $(document).ready(function() {
            addnew()
        });

        function addnew() {

            var inner = ""

            var headernew = ["John Smith",
                "aaa",
                "bbb",
                "ccc",
                "ddd",
                "eee",
                "fff",
                "gggg"
            ]

            var descrip = [
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi cumque dolor accusamus rem in officia nisi ad blanditiis quos iste quasi, ullam ea non eveniet quod dolorem sunt odit!",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi cumque dolor accusamus rem in officia nisi ad blanditiis quos iste quasi, ullam ea non eveniet quod dolorem sunt odit!",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi cumque dolor accusamus rem in officia nisi ad blanditiis quos iste quasi, ullam ea non eveniet quod dolorem sunt odit!",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi cumque dolor accusamus rem in officia nisi ad blanditiis quos iste quasi, ullam ea non eveniet quod dolorem sunt odit!",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi cumque dolor accusamus rem in officia nisi ad blanditiis quos iste quasi, ullam ea non eveniet quod dolorem sunt odit!",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi cumque dolor accusamus rem in officia nisi ad blanditiis quos iste quasi, ullam ea non eveniet quod dolorem sunt odit!",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi cumque dolor accusamus rem in officia nisi ad blanditiis quos iste quasi, ullam ea non eveniet quod dolorem sunt odit!",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi cumque dolor accusamus rem in officia nisi ad blanditiis quos iste quasi, ullam ea non eveniet quod dolorem sunt odit!",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi cumque dolor accusamus rem in officia nisi ad blanditiis quos iste quasi, ullam ea non eveniet quod dolorem sunt odit!"
            ]

            inner += '    <div class="columns is-multiline">'
            for (var i = 0; i < 9; i++) {

                inner += '    <div class="col-md-4">' 
                inner += '        <div class="card">' 
                inner += '            <img class="card-img-top" src="//placeimg.com/280/180/tech" alt="Card image cap">' 
                inner += '           <div class="card-body dd">' 
                inner += '             <p class=" has-text-centered" style="font-weight:bold"><a href="news2KKT.php" style="color:black">' + headernew[i] + '</a></p>'
                inner += '           <p>'+descrip[i].substring(0,40)+'...<a href="news2KKT.php">อ่านต่อ</a></p>' 
                inner += '            <span style="font-size:12px">16 กค 2562 : 11.30 น</span>' 
                inner += '           </div>' 
                inner += '       </div>' 
                inner += '   </div>' 

            }
            inner += '             </div>'
            $('#news').append(inner);

        }
    </script>
   
</head>
<body>
    <?php include('navKKT.php') ?>
    <div class="container">
        <section class="section">
            <div class="columns">
                <div class="column is-three-fifths" style="text-align:center">
                        <p class="aa">ข่าวประชาสัมพันธ์</p>
                        <br>
                        <img src="images/Athlete.jpg" width="90%" >
                </div>
                <div class="column">Auto</div>
            </div>
        </section>
    </div>
    <?php include('footerKKT.php') ?>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>