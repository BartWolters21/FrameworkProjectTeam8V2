<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index($category)
    {
        $month = $this->month();
        $appointments = Calendar::all();

        $ldate = date('d-m-Y');
        $defaultDate = explode("-", $ldate);
        $defaultDay = $this->RemoveSpecificCharacter($defaultDate[0]);
        $defaultMonth = $this->RemoveSpecificCharacter($defaultDate[1]);
        $defaultYear = $this->RemoveSpecificCharacter($defaultDate[2]);

        $count = true;

        return view('calendar.' . $category, compact('month', 'appointments', 'defaultDay', 'defaultMonth', 'defaultYear', 'count'));
    }

    public function indexMonth($date, $factor ,$year)
    {
        $month = $this->month();
        $appointments = Calendar::all();

        $ldate = date('d-m-Y');
        $defaultDate = explode("-", $ldate);
        $defaultDay = $this->RemoveSpecificCharacter($defaultDate[0]);

        if ($factor == 1) {

            if ($date == 1){
                $defaultMonth = $date + 11;
                $defaultYear = $year - 1;
            }
            else{
                $defaultMonth = $date - 1;
                $defaultYear = $year;
            }

        }
        elseif ($factor == 2) {

            if ($date == 12){
                $defaultMonth = $date - 11;
                $defaultYear = $year + 1;
            }
            else{
                $defaultMonth = $date + 1;
                $defaultYear = $year;
            }

        } else {
            abort(404, 'Page not found');
        }

        if ($this->RemoveSpecificCharacter($defaultDate[1]) == $defaultMonth && $this->RemoveSpecificCharacter($defaultDate[2]) == $defaultYear) {
            $count = true;
        } else {
            $count = false;
        }

        return view('calendar.month', compact('month', 'appointments', 'defaultDay', 'defaultMonth', 'defaultYear', 'count'));

    }


    public function month()
    {
        $months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];

        return array_unique($months);
    }


    public function RemoveSpecificCharacter($string)
    {

        if ($string == '01' || $string == '02' || $string == '03' || $string == '04' || $string == '05' || $string == '06' || $string == '07' || $string == '08' || $string == '09') {
            $title = str_replace('0', '', $string);
            return $title;
        } else {
            return $string;
        }
    }
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }
}

