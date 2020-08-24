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
        $(document).ready(function() {
            // var web = window.location.href;
            var url_string = window.location.href;
            var url = new URL(url_string);
            var type = url.searchParams.get('type');
            var word = url.searchParams.get('word');
            if(type == 'gallery'){
                $('#typeSearch').html('Gallery')
            }else if(type == 'news'){
                $('#typeSearch').html('ข่าว')
            }else if(type == 'activity'){
                $('#typeSearch').html('ปฏิทินกิจกรรม')
            }else if(type == 'research'){
                $('#typeSearch').html('บทความงานวิจัย')
            }else if(type == 'information'){
                $('#typeSearch').html('นักกีฬา')
            }
            // console.log(type,word)
            if(type == 'gallery'){
                $.ajax({
                    type:'post',
                    url:'./api/fetchSearchGallery.php',
                    data:{
                        'word':word
                    },
                    success:function(response){
                        // console.log(response)
                        if(response.indexOf('alladmin_') >= 0){
                            var alldata = response.split('alladmin_')[1];
                            var alldata_ = alldata.split('0000000000');
                            var htmlQuery = ''
                            // console.log(alldata_)
                            for(var i = 0 ; i < alldata_.length ; i++){
                                if(alldata_[i].trim().length > 0){
                                    var result = alldata_[i].split('^');
                                    // console.log(result)
                                    htmlQuery += '<div onclick="singleGallery(`'+result[0]+'`)" style="cursor:pointer;width:100%;display:flex;flex-direction:column;box-shadow:1px 1px 10px #999;padding:10px;border-radius:5px;margin-bottom:20px">'
                                    htmlQuery += '    <span style="font-size:20px;font-weight:bold;">'+result[2]+'</span>'
                                    htmlQuery += '    <div style="display:flex;flex-direction:row;text-indent:1em;margin-top:10px;">'
                                    htmlQuery += '        <span>'+result[3]+'</span>'
                                    htmlQuery += '   </div>'
                                    htmlQuery += '</div>'
                                }
                            }
                            $('#listSearch').empty()
                            $('#listSearch').append(htmlQuery)
                        }
                    }
                })
            }else if(type == 'news'){
                $.ajax({
                    type:'post',
                    url:'./api/fetchSearchNews.php',
                    data:{
                        'word':word
                    },
                    success:function(response){
                        // console.log(response)
                        if(response.indexOf('alladmin_') >= 0){
                            var alldata = response.split('alladmin_')[1];
                            var alldata_ = alldata.split('0000000000');
                            var htmlQuery = ''
                            // console.log(alldata_)
                            for(var i = 0 ; i < alldata_.length ; i++){
                                if(alldata_[i].trim().length > 0){
                                    var result = alldata_[i].split('^');
                                    console.log(result)
                                    htmlQuery += '<div onclick="singleNews(`'+result[0]+'`)" style="cursor:pointer;width:100%;display:flex;flex-direction:column;box-shadow:1px 1px 10px #999;padding:10px;border-radius:5px;margin-bottom:20px">'
                                    htmlQuery += '    <span style="font-size:20px;font-weight:bold;">'+result[1]+'</span>'
                                    htmlQuery += '    <div style="display:flex;flex-direction:row;text-indent:1em;margin-top:10px;">'
                                    htmlQuery += '        <span>'+result[3]+'</span>'
                                    htmlQuery += '   </div>'
                                    htmlQuery += '</div>'
                                }
                            }
                            $('#listSearch').empty()
                            $('#listSearch').append(htmlQuery)
                        }
                    }
                })
            }else if(type == 'activity'){
                $.ajax({
                    type:'post',
                    url:'./api/fetchSearchCalendar.php',
                    data:{
                        'word':word
                    },
                    success:function(response){
                        // console.log(response)
                        if(response.indexOf('alladmin_') >= 0){
                            var alldata = response.split('alladmin_')[1];
                            var alldata_ = alldata.split('0000000000');
                            var htmlQuery = ''
                            // console.log(alldata_)
                            for(var i = 0 ; i < alldata_.length ; i++){
                                if(alldata_[i].trim().length > 0){
                                    var result = alldata_[i].split('^');
                                    // console.log(result)
                                    htmlQuery += '<div style="cursor:pointer;width:100%;display:flex;flex-direction:column;box-shadow:1px 1px 10px #999;padding:10px;border-radius:5px;margin-bottom:20px">'
                                    htmlQuery += '    <span style="font-size:20px;font-weight:bold;">'+result[1]+'</span>'
                                    htmlQuery += '    <div style="display:flex;flex-direction:row;text-indent:1em;margin-top:10px;">'
                                    htmlQuery += '        <span>'+result[3]+'</span>'
                                    htmlQuery += '   </div>'
                                    htmlQuery += '</div>'
                                }
                            }
                            $('#listSearch').empty()
                            $('#listSearch').append(htmlQuery)
                        }
                    }
                })
            }else if(type == 'research'){
                $.ajax({
                    type:'post',
                    url:'./api/fetchSearchResearch.php',
                    data:{
                        'word':word
                    },
                    success:function(response){
                        console.log(response)
                        if(response.indexOf('alladmin_') >= 0){
                            var alldata = response.split('alladmin_')[1];
                            var alldata_ = alldata.split('0000000000');
                            var htmlQuery = ''
                            // console.log(alldata_)
                            for(var i = 0 ; i < alldata_.length ; i++){
                                if(alldata_[i].trim().length > 0){
                                    var result = alldata_[i].split('^');
                                    console.log(result)
                                    htmlQuery += '<div onclick="singleResearch(`'+result[0]+'`)" style="cursor:pointer;width:100%;display:flex;flex-direction:column;box-shadow:1px 1px 10px #999;padding:10px;border-radius:5px;margin-bottom:20px">'
                                    htmlQuery += '    <span style="font-size:20px;font-weight:bold;">'+result[1]+'</span>'
                                    htmlQuery += '    <div style="display:flex;flex-direction:row;text-indent:1em;margin-top:10px;">'
                                    htmlQuery += '        <span>'+result[3]+'</span>'
                                    htmlQuery += '   </div>'
                                    htmlQuery += '</div>'
                                }
                            }
                            $('#listSearch').empty()
                            $('#listSearch').append(htmlQuery)
                        }
                    }
                })
            }else if(type == 'information'){

            }
        });
        function checksearch(){
            var url_string = window.location.href;
            var url = new URL(url_string);
            var type = url.searchParams.get('type');
            var word = $('#searchInput').val()
            window.location.href = './search.php?type='+type+'&word='+word
        }

        function singleResearch(id){
            window.location.href = './research2.php?id='+id;
        }

        function singleNews(id){
            window.location.href = './news2KKT.php?id='+id;
        }

        function singleGallery(id){
            window.location.href = './gallery2KKT.php?id='+id;
        }
    </script>
</head>
<body >
   
    <?php include('navKKT.php') ?>
   
    <div class="container" style="z-index:2;paddding:0px;padding-top: 9rem;padding-bottom:40px;">
        <div  style="width:100%;height:50px;background-color:#fff;display:flex;flex-direction:row;justify-content:space-evenly;">
            <div style="display:flex;flex-direction:row;height:100%;align-items:center;border:1px solid #999;border-radius:5px;padding:10px;width:80%">
                <i style="cursor:pointer;" class="material-icons">
                    search
                </i>
                <input type="text" style="border:0px;border-bottom:1px solid #ccc;background-color:transparent;width:95%;">
            </div>
            <div style="cursor:pointer;width:120px;height:100%;background-color:#999;box-shadow:1px 1px 10px #999;display:flex;flex-direction:row;justify-content:center;align-items:center;border-radius:5px;">
                <span style="color:#fff;">ค้นหา</span>
            </div>
        </div>
        <div  style="width:100%;margin-top:20px;background-color:#fff;padding:20px;">
            <span id="typeSearch" style="font-size:20px;font-weight:bold;">Gallery</span>

            <div id="listSearch" style="margin-top:20px;"></div>
        
        </div>
    </div>
    <?php include('footerKKT.php') ?>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>