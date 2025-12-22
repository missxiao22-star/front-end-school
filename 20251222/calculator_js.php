<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .containner-input{
            width: 50%;
            margin: auto;
            text-align:center;
        }
        .containner-output{
            width: 50%;
            margin: auto;
            text-align:center;
        }
        input,select,button{
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container-input">
        <form action="" id="myform">
            <p><input type="number" name="num1" id="num1"></p>
            <p>
                <select name="opt" id="opt">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <script>
        $(document).ready(function(){
            //bind
            const num1 = $('#num1');
            const num2 = $('#num2');
            const opt = $('#opt');
            const btnCalc = $('#btnCalc');
            const result = $('#result');

            //action
            result.text('150');
        });
    </script>
</body>
</html>