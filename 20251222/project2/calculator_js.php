<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .containner-input {
            width: 50%;
            margin: auto;
            text-align: center;
        }

        .containner-output {
            width: 50%;
            margin: auto;
            text-align: center;
        }

        input,
        select,
        button {
            width: 100px;
        }

        .bg-red {
            background-color: red;
        }

        .bg-green {
            background-color: green;
        }

        .bg-yellow {
            background-color: yellow;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-input">
        <form action="" id="myform" method="get">
            <p><input type="number" name="num1" id="num1"></p>
            <p>
                <select name="opt" id="opt">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </p>
            <p>
                <select name="color" id="color">
                    <option value="bg-red">red</option>
                    <option value="bg-green">green</option>
                    <option value="bg-yellow">yellow</option>
                </select>
            </p>
            <p><input type="number" name="num2" id="num2"></p>
            <p><button type="submit" id="btnCalc">計算</button></p>
        </form>
    </div>
    <div class="container-output">
        <h2>結果: <span id="result"></span></h2>
    </div>

    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js"
        integrity="sha512-nKXmKvJyiGQy343jatQlzDprflyB5c+tKCzGP3Uq67v+lmzfnZUi/ZT+fc6ITZfSC5HhaBKUIvr/nTLCV+7F+Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <script>
        $(document).ready(function() {
            //bind
            const num1 = $('#num1');
            const num2 = $('#num2');
            const opt = $('#opt');
            const btnCalc = $('#btnCalc');
            const result = $('#result');
            const myForm = $('myForm');

            //action
            //在第一步驟的時候驗證用的
            // result.text('150');
            //攔截表單自動送出的動作，改用非同步的方法將資料傳給後端
            $(myForm).submit(function(event) {
                //當event完成時，.preventDefult()使用攔截表單這方法
                event.preventDefault();
                //綁定網址從哪裡抓取資料
                //綁定表單從哪裡抓取資料
                //，並將抓取到的資料用.serialize()這方法
                // 打包抓取的資料並轉換成URL字串，方便隨時傳送
                let url = './result.php';
                let formData = myForm.serialize();
                //用ajax這個方法來跑與後台串接的動作
                $.ajax({
                    //綁定型態，用GET這個型態抓取資料
                    //綁定連結，用68行這個連結地址來抓取資料
                    //抓取資料完，用json這個方法呈現資料
                    type: "GET",
                    url: url,
                    data: formData,
                    dataType: "json",
                    //如果資料傳送成功，用此方法，將成功的資料存進res變數
                    success: function(res) {
                        console.log('res', res);
                        //印出時讓資料從textResult這邊抓資料
                        result.text(res.textResult);
                        //
                        console.log('res.colorResult', res.colorResult);
                        result.attr('class', res.colorResult);

                    }
                });
            });
        });
    </script>
</body>

</html>