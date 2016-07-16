<?php
// This script creates arrays of strings
// representing 1-hour intervals of studio-time that are then imploded
// into a single string and stored in a second array. That second array's
// elements will later be used as attributes of records in a database.

$year = 2016;
$months = array("January", "February", "March", "April", "May", "June", "July",
                "August", "September", "October", "November", "December");
$monthNum = array("January"=>"01", "February"=>"02", "March"=>"03", "April"=>"04", "May"=>"05", "June"=>"06", "July"=>"07",
                "August"=>"08", "September"=>"09", "October"=>"10", "November"=>"11", "December"=>"12");
$daysInMonths = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

// $counter is used to index into $afterJoin
$counter = 0;
// $string is an array that holds data until it's concatenated into one string
$string = array();
// $afterJoin will hold an array of imploded $string arrays
$afterJoin = array();

$currentMonth = date("m");
// create an array of strings representing every hour in a year
for ($month=0; $month <= 11 ; $month++) {
  for ($dateNum=1; $dateNum <= $daysInMonths[$month]; $dateNum++) {
    for ($tiempo=1; $tiempo <=24; $tiempo++) {
      // Associative arrays are weird. They are indexed into using a 'key' rather than an int
      if ($currentMonth == $monthNum[$months[$month]]) {
        $string[0] = " " . $months[$month];
        $string[1] = $dateNum;
        // Watch the 'else': it should produce '-$tiempo', but the sign is stripped...?
        if ($tiempo <= 12) {
          $string[3] = "- " . $tiempo . " AM" ;
        }
        else {
          $string[3] = "- " . ($tiempo - 12) . " PM";
        }
        $string[2] = "- " . $year;
        $afterJoin[$counter] = join(" ", $string);
        $counter++;
      }

    }
  }
}

//IN CASE OF NEED FOR VISUAL DEBUG, BREAK COMMENT
// foreach ($afterJoin as $element ) {
//   echo $element . "\n";
// }

?>
