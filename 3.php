<?php

$box = [
    0 => 'Тетрадь',
    1 => 'Книга',
    2 => 'Настольная игра',
    // 3 => [
    //     'Настольная игра',
    //     'Настольная игра',
    // ],
    4 => [
        // [
        //     'Ноутбук',
        //     'Зарядное устройство'
        // ],
        // [
        //     'Компьютерная мышь',
        //     'Набор проводов',
        //     [
        //         'Фотография',
        //         'Картина'
        //     ]
        // ],
        [
            'Инструкция',
            [
                'Ключ'
            ]
        ]
    ]
]; 

function getItem($searhItem, $array) {
    if (in_array($searhItem, $array)) {
        return "TRUE\n";
    } else {
        foreach ($array as $key => $item) {
            if (is_array($item)) {
                // print_r ($item);
                // echo "Первый вложенный\n";

                getItem($searhItem, $item);
                // echo $searhItem;
            } else {
                echo "FALSE\n"; 
                // return "FALSE\n"; 
            }
        }
    }
};

echo(getItem('Ключ', $box));