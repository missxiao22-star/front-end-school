<?php
function dd($data2){
    echo '<pre>';
    print_r($data2);
    echo '</pre>';
}

$data1= [1,2,3,4,5];
dd($date1);
$date2= [
    ['id'     => 1,
     'name'   => 'Amy',
     'mobile' => '0911'
    ],
    ['id'     => 2,
     'name'   => 'allen',
     'mobile' => '0922'
    ],
    ['id'     => 3,
     'name'   => 'Bob',
     'mobile' => '0933'
    ],
];
//記得印出
dd($data2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cols{
            width: 50%;
            height: 100px;
        }
    </style>
</head>

            <?php
            //先建立一個萬用欄位
            //再建立一個假資料data1/data2
            //為甚麼要建立一個data1跑一遍資料????
            //建立一個方法跑資料，名為dd
            //使用foreach遍歷所有資料
            //給他一個格式在印出的時候帶入
            ?>

<body>
    <form action="">
        <table>
            <tr>
                <td class="cols">id</td>
                <td class="cols">name</td>
                <td class="cols">mobile</td>
            </tr>
        </table>
    </form>
    <?php foreach($data2 as $cols => $vaules):?>
        <tr>
        <td> <?= ${$cols['id']} ?> </td>
        <td> <?= ${$cols['name']} ?> </td>
        <td> <?= ${$cols['mobile']} ?> </td>
        </tr>
    <?php endforeach;?>  
    
</body>
</html>