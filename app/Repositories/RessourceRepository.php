<?php
namespace App\Repositories;

class RessourceRepository {
    protected $model;

    public function getPaginate($n)
    {
        return $this->model->paginate($n);
    }
    public  function getAll(){
        return $this->model->get();
    }

    public function store(Array $inputs)
    {
        return $this->model->create($inputs);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        $this->getById($id)->update($inputs);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }
    public function diffBetweenTwoDateMin($datedepart, $datearrive){


// Declare and define two dates
        $date1 = strtotime($datedepart);
        $date2 = strtotime($datearrive);

// Formulate the Difference between two dates
        $diff = abs($date2 - $date1);


// To get the year divide the resultant date into
// total seconds in a year (365*60*60*24)
        $years = floor($diff / (365*60*60*24));


// To get the month, subtract it with years and
// divide the resultant date into
// total seconds in a month (30*60*60*24)
        $months = floor(($diff - $years * 365*60*60*24)
            / (30*60*60*24));


// To get the day, subtract it with years and
// months and divide the resultant date into
// total seconds in a days (60*60*24)
        $days = floor(($diff - $years * 365*60*60*24 -
                $months*30*60*60*24)/ (60*60*24));


// To get the hour, subtract it with years,
// months & seconds and divide the resultant
// date into total seconds in a hours (60*60)
        $hours = floor(($diff - $years * 365*60*60*24
                - $months*30*60*60*24 - $days*60*60*24)
            / (60*60));


// To get the minutes, subtract it with years,
// months, seconds and hours and divide the
// resultant date into total seconds i.e. 60
        $minutes = floor(($diff - $years * 365*60*60*24
                - $months*30*60*60*24 - $days*60*60*24
                - $hours*60*60)/ 60);


// To get the minutes, subtract it with years,
// months, seconds, hours and minutes
        $seconds = floor(($diff - $years * 365*60*60*24
            - $months*30*60*60*24 - $days*60*60*24
            - $hours*60*60 - $minutes*60));
        return $seconds;

    }

public function convertNumberToWords($number) {
    $units = [
        0 => "zéro", 1 => "un", 2 => "deux", 3 => "trois", 4 => "quatre", 5 => "cinq",
        6 => "six", 7 => "sept", 8 => "huit", 9 => "neuf", 10 => "dix",
        11 => "onze", 12 => "douze", 13 => "treize", 14 => "quatorze", 15 => "quinze",
        16 => "seize", 17 => "dix-sept", 18 => "dix-huit", 19 => "dix-neuf"
    ];

    $tens = [
        2 => "vingt", 3 => "trente", 4 => "quarante", 5 => "cinquante",
        6 => "soixante", 7 => "soixante-dix", 8 => "quatre-vingt", 9 => "quatre-vingt-dix"
    ];

    if (!is_numeric($number)) {
        return "Entrée invalide";
    }

    if ($number < 0) {
        return "moins " . convertNumberToWords(abs($number));
    }

    if ($number <= 19) {
        return $units[$number];
    }

    if ($number < 100) {
        $tensValue = intdiv($number, 10);
        $unitValue = $number % 10;

        $text = $tens[$tensValue];
        if ($tensValue == 7 || $tensValue == 9) {
            $text = $tens[$tensValue - 1] . "-" . $units[$unitValue + 10];
        } elseif ($unitValue > 0) {
            $text .= "-" . $units[$unitValue];
        }
        return $text;
    }

    if ($number < 1000) {
        $hundredsValue = intdiv($number, 100);
        $remainder = $number % 100;

        $text = ($hundredsValue > 1 ? $units[$hundredsValue] . " cent" : "cent");
        if ($remainder > 0) {
            $text .= " " . convertNumberToWords($remainder);
        }
        return $text;
    }

    if ($number < 1000000) {
        $thousandsValue = intdiv($number, 1000);
        $remainder = $number % 1000;

        $text = ($thousandsValue > 1 ? convertNumberToWords($thousandsValue) . " mille" : "mille");
        if ($remainder > 0) {
            $text .= " " . convertNumberToWords($remainder);
        }
        return $text;
    }

    if ($number < 1000000000) {
        $millionsValue = intdiv($number, 1000000);
        $remainder = $number % 1000000;

        $text = convertNumberToWords($millionsValue) . " million" . ($millionsValue > 1 ? "s" : "");
        if ($remainder > 0) {
            $text .= " " . convertNumberToWords($remainder);
        }
        return $text;
    }

    return "Nombre trop grand";
}



}
