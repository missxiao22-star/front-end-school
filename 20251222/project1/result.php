<?php
//先寫一個debug的方法
function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
//接收發送用GET這個方法
$input = $_GET;
//寫一個假資料，讓初始值沒有東西時帶入0
$data = [
    'num1' => $input['num1'] ?? 0,
    'num2' => $input['num2'] ?? 0,
    'opt' => $input['opt'] ?? '+',
];
//給一個新的變數裝所有資料再全部裝回$data
$num1 = $data['num1'];
$num2 = $data['num2'];
$opt = $data['opt'];
$color =$data['color'];
//呼叫這個方法印出$data裡面的東西，看是否綁好
dd($data);

//先給兩個新的變數賦予型態
$calcResult = 0;
$textResult = '';
//用switch做將值帶入後並計算的動作 (商業邏輯)
switch ($opt) {
    case '+':
        $calcResult = $num1+$num2;
        $textResult = "$num1+$num2=$calcResult";
        break;
    case '-':
        $calcResult = $num1-$num2;
        $textResult = "$num1-$num2=$calcResult";
        break;
    case '*':
        $calcResult = $num1*$num2;
        $textResult = "$num1*$num2=$calcResult";
        break;
    case '/':
        $calcResult = $num1/$num2;
        $textResult = "$num1/$num2=$calcResult";
        break;    
}
$colorResult = "";
switch ($color) {
    case 'bgRed':
        $changColor = "bg-red";
        break;
    case 'bgGreen':
        $changColor = "bg-green";
        break;
    case 'bgYellow':
        $changColor = "bg-yellow";
        break;
}

$data['calcResult'] = $calcResult;
$data['textResult'] = $textResult;
$data['colorResult'] = $colorResult;

// dd($data);
echo json_encode($data);