<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            width: 300px;
            height: 100px;
            /* background-color: lightcyan; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 10px;
        }

        .cols {
            width: 300px;
            height: 100px;
            background-color: lightcyan;
        }
    </style>
</head>

<body>
    <form action="">
        <table id="myTable">
            <tr>
                <td class="box"><input type="text" vaule="數量"></td>
                <td class="box"><input type="text" vaule="價格"></td>
                <td class="box"><input type="submit" value="+">
                    <input type="submit" value="-">
                    <input type="submit" value="*">
                    <input type="submit" value="/">
                </td>
            </tr>
            <tr>
                <td class="cols">id</td>
                <td class="cols">name</td>
                <td class="cols">total</td>
            </tr>
        </table>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script>
        //先準備方法
        //綁定
        //宣告連結資料從dataJs撈
        //宣告一個空字串
        //用each跑格式方法
        //將新資料顯示在最後面
        $(document).ready(function(){
           const myTable =$('myTable');
           console.log('myTable',myTable);
           
            let url=(".dataJs.js");

           $.ajax({
            type:"get",
            url:url,
            dataType:"json",
            success:function(res){
                console.log('res',res);

            let tmpText = "";
            
            $.each(dataJs,function($key,vaule){
                tmpText= `
                <tr>
                <td class="cols">${key.id}</td>
                <td class="cols">${key.name}</td>
                <td class="cols">${key.total}</td>
                </tr>`
            });
            myTable.append(tmpText);
            }
           });
        });
    </script>
</body>

</html>