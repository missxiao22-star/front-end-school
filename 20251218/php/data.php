<?php
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$data=[
    ['id' => 1,
     'name' => 'Amy',
     'mobile' => '0911'
    ],
    ['id' => 2,
     'name' => 'Bob',
     'mobile' => '0922'
    ],
    ['id' => 3,
     'name' => 'allen',
     'mobile' => '0933'
    ],
];
// dd($data);
echo json_encode($data);
?>