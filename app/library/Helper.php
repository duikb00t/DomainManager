<?php

use Carbon\Carbon;

class Helper{

    public static function dateFromMySQL($y){

        return Carbon::createFromFormat('Y-m-d', $y)->format('');

    }


    public static function dateToMySQL($y){

        return Carbon::createFromFormat('m/d/Y', $y)->format('Y-m-d');

    }
}