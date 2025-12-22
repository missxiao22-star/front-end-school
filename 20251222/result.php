<?php
//先寫一個debug的方法
function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
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
        $calcResult = $num1+$num2;
        $textResult = "$num1-$num2=$calcResult";
        break;
    case '*':
        $calcResult = $num1+$num2;
        $textResult = "$num1*$num2=$calcResult";
        break;
    case '/':
        $calcResult = $num1+$num2;
        $textResult = "$num1/$num2=$calcResult";
        break;    
}

$data['calcResult'] = $calcResult;
$data['textResult'] = $textResult;

dd($data);