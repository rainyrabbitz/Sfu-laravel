<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CsrActivity extends Model
{
    protected $table = 'csr_activities';

    function getMonthAttribute($monthNumber){
        $months = array(
            '1' => 'มกราคม',
            '2' => 'กุมภาพันธ์',
            '3' => 'มีนาคม',
            '4' => 'เมษายน',
            '5' => 'พฤษภาคม',
            '6' => 'มิถุนายน',
            '7' => 'กรกฎาคม',
            '8' => 'สิงหาคม',
            '9' => 'กันยายน',
            '10' => 'ตุลาคม',
            '11' => 'พฤศจิกายน',
            '12' => 'ธันวาคม'
        );
        return $months[$monthNumber];
    }
}
