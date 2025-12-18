<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script>
        $(doucument).ready(function(){
        //先宣告url=從data.php拿的資料(做資料連接)
        let url = ".data.php";
        //用一個叫做ajax的方法
        $.ajax({
            //宣告用get方法
            type:"get",
            //宣告url=從21行的url拿資料近來
            url:url,
            //資料庫型態，使用json
            dataType: "json",
            //建立一個成功的方法
            success: function(res){
                //用console.log檢查res是否綁定成功
                console.log("res",res);
                //用console.log檢查res型態
                console.log("res typeof", typeof res);
                //宣告 將res的資料回傳給data
                let data = res ;

                //用each跑所有data陣列資料
                $.each(data,function($key,$vaule){
                    //用console.log檢查key是否綁定成功
                    console.log('key',key);
                    //用console.log檢查vaule是否綁定成功
                    console.log('vaule',vaule);
                    
                });
            }
        });            
        });
    </script>
</body>

</html>