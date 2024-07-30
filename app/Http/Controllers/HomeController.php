<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $rooms = [
            [
                'room' => '1 - 5',
                'subscribtion' => 'Rp 1.300.000',
                'trx_admin' => 'Rp 390.000',
                'trx_rate' => 'Call Us',
                'offering' => '',
                'note' => ''
            ],
            [
                'room' => '6 - 10',
                'subscribtion' => 'Rp 1.600.000',
                'trx_admin' => 'Rp 390.000',
                'trx_rate' => 'Rp 12.500',
                'offering' => '',
                'note' => ''
            ],
            [
                'room' => '11 - 15',
                'subscribtion' => 'Rp 1.800.000',
                'trx_admin' => 'Rp 490.000',
                'trx_rate' => 'Rp 10.000',
                'offering' => '',
                'note' => ''
            ],
            [
                'room' => '16 - 20',
                'subscribtion' => 'Rp 2.000.000',
                'trx_admin' => 'Rp 490.000',
                'trx_rate' => 'Rp 10.000',
                'offering' => '',
                'note' => ''
            ],
            [
                'room' => '21 - 30',
                'subscribtion' => 'Rp 2.400.000',
                'trx_admin' => 'Rp 590.000',
                'trx_rate' => 'Rp 7.500',
                'offering' => '',
                'note' => ''
            ],
            [
                'room' => '31 - 40',
                'subscribtion' => 'Rp 2.800.000',
                'trx_admin' => 'Rp 690.000',
                'trx_rate' => 'Rp 7.500',
                'offering' => '',
                'note' => ''
            ],
            [
                'room' => '41 - 50',
                'subscribtion' => 'Rp 3.200.000',
                'trx_admin' => 'Rp 790.000',
                'trx_rate' => 'Rp 5.000',
                'offering' => '',
                'note' => ''
            ],
            [
                'room' => '51 - 75',
                'subscribtion' => 'Rp 4.000.000',
                'trx_admin' => 'Rp 990.000',
                'trx_rate' => 'Rp 5.000',
                'offering' => '',
                'note' => ''
            ],
            [
                'room' => '76 - 100',
                'subscribtion' => 'Rp 4.600.000',
                'trx_admin' => 'Rp 1.090.000',
                'trx_rate' => 'Rp 5.000',
                'offering' => 'Free 1x Training',
                'note' => 'Biaya Training belum termasuk : Biaya Transport & Penginapan'
            ],
            [
                'room' => '101 - 150',
                'subscribtion' => 'Rp 5.250.000',
                'trx_admin' => 'Rp 1.190.000',
                'trx_rate' => 'Rp 5.000',
                'offering' => 'Free Training (1x / Month)',
                'note' => 'Biaya Training belum termasuk : Biaya Transport & Penginapan'
            ],
            [
                'room' => '151 - 200',
                'subscribtion' => 'Rp 5.900.000',
                'trx_admin' => 'Rp 1.390.000',
                'trx_rate' => 'Rp 5.000',
                'offering' => 'Free Training (1x / Month)',
                'note' => 'Biaya Training belum termasuk : Biaya Transport & Penginapan'
            ],
            [
                'room' => '200++',
                'subscribtion' => 'Rp 6.600.000',
                'trx_admin' => 'Rp 1.490.000',
                'trx_rate' => 'Rp 5.000',
                'offering' => 'Free Training (1x / Month)',
                'note' => 'Biaya Training belum termasuk : Biaya Transport & Penginapan'
            ],
        ];
        return view('pages.home', compact('rooms'));
    }

    public function thankYou(Request $request)
    {
        return view('pages.thankyou');
    }

}
