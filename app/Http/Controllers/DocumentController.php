<?php

namespace App\Http\Controllers;

use AnourValar\Office\Format;
use AnourValar\Office\SheetsService;
use DateTime;

class DocumentController extends Controller
{
    public function generate() 
    {
        $data = [
            'vat' => __('No'),
            'total' => [
                'price' => 2004.14,
                'qty' => 3,
            ],

            'products' => [
                [
                    'name' => __('Product') . ' #1',
                    'price' => 989,
                    'qty' => 1,
                    'date' => new DateTime('2022-05-01'),
                ],
                [
                    'name' => __('Product') . ' #2',
                    'price' => 1015.14,
                    'qty' => 2,
                    'date' => new DateTime('2022-05-02'),
                ],
            ],
        ];

        (new SheetsService())->generate(storage_path('data/templates/template1.xlsx'), $data)->saveAs('generated_document.xlsx', Format::Xlsx);
        echo __('Generated successfully.') . PHP_EOL;
    }
}
