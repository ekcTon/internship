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
            #row_board{
                flex-direction:column !important;
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
            
           
            
        } 
        @media (min-width: 360px) {
            .Ncol {
                margin: 15 0;
            }
            
            
        } 
    </style>

    <script>
        $(document).ready(function(){
            fetchPosition()
        })

        function fetchPosition(){
            $.ajax({
                type:'post',
                url:'./api/fetchPosition.php',
                data:{},
                success:function(response){
                    // console.log(response)
                    if(response.indexOf('alladmin_') >=0 ){
                        var result = response.split('alladmin_')[1].split('0000000000')
                        for(var i = 0 ; i < result.length - 1 ; i++){
                            var data = result[i].split('^')
                            console.log(data)
                            $('#namePosition'+data[0]).html(data[1])
                            $('#picPosition'+data[0]).attr('src','../kkt/myfile/'+data[2])
                        }
                    }
                }
            })
        }
    </script>
</head>
<body >
   
    <?php include('navKKT.php') ?>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-12" style="z-index:2;paddding:0px;padding-top: 9rem;padding-bottom:40px;background-color:#fff;margin-top:10px;">
            <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                <div style="height:300;display:flex;flex-direction:column;align-items:center;">
                    <img id="picPosition1" style="height:175;width:125px;" />
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                        <h5 id="namePosition1" style="margin-top:10px;"></h5>
                        <span style="text-align:center;">ผู้ว่าการ การกีฬาแห่งประเทศไทย</span>
                    </div>
                </div>
            </div>
            <div id="row_board" style="width:100%;display:flex;flex-direction:row;justify-content:space-evenly;align-items:center;">
                <div style="height:300;display:flex;flex-direction:column;align-items:center;">
                    <img id="picPosition2" style="height:175;width:125px;" />
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                        <h5 id="namePosition2"  style="margin-top:10px;"></h5>
                        <span style="text-align:center;">รองผู้ว่าการ ฝ่ายบริหาร</span>
                    </div>
                </div>
                <div style="height:300;display:flex;flex-direction:column;align-items:center;">
                    <img id="picPosition3" style="height:175;width:125px;" />
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                        <h5 id="namePosition3"  style="margin-top:10px;"></h5>
                        <span style="text-align:center;">รองผู้ว่าการ ฝ่ายกีฬาเป็นเลิศและวิทยาศาสตร์การกีฬา</span>
                    </div>
                </div>
                <div style="height:300;display:flex;flex-direction:column;align-items:center;">
                    <img id="picPosition4" style="height:175;width:125px;" />
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                        <h5 id="namePosition4"  style="margin-top:10px;"></h5>
                        <span style="text-align:center;">รองผู้ว่าการ ฝ่ายส่งเสริมการกีฬา</span>
                    </div>
                </div>
                <div style="height:300;display:flex;flex-direction:column;align-items:center;">
                    <img id="picPosition5" style="height:175;width:125px;" />
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                        <h5 id="namePosition5"  style="margin-top:10px;"></h5>
                        <span style="text-align:center;">รองผู้ว่าการ ฝ่ายกีฬาอาชีพและสิทธิประโยชน์</span>
                    </div>
                </div>
            </div>
            <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                <div style="height:300;display:flex;flex-direction:column;align-items:center;">
                    <img id="picPosition6" style="height:175;width:125px;" />
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                        <h5 id="namePosition6"  style="margin-top:10px;"></h5>
                        <span style="text-align:center;">ผู้อำนวยการฝ่ายวิทยาศาสตร์การกีฬา</span>
                    </div>
                </div>
            </div>
            <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                <!-- <div style="height:300;display:flex;flex-direction:column;align-items:center;"> -->
                    
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                        <!-- <h5 id="namePosition7"  style="margin-top:10px;"></h5> -->
                        <img id="picPosition7" style="object-fit:contain;width:100%;" />
                        <!-- <span >ผู้อำนวยการฝ่ายวิทยาศาสตร์การกีฬา</span> -->
                    </div>
                <!-- </div> -->
            </div>
            <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                <div style="display:flex;flex-direction:column;align-items:center;">
                    
                    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;margin-bottom:20px;">
                        <!-- <h5 id="namePosition8"  style="margin-top:10px;"></h5> -->
                        <img id="picPosition8" style="object-fit:contain;" />
                        <!-- <span >ผู้อำนวยการฝ่ายวิทยาศาสตร์การกีฬา</span> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <?php include('footerKKT.php') ?>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>