<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : Injuries
*/


// copy file content into a string var
$json_file = file_get_contents('https://api.sportradar.us/nba-t3/league/injuries.json?api_key=s2n89799m8hfjkapcvb7qsxk');


// convert the string to a json object
$jfo = json_decode($json_file);



// Team zero name 
$zero_a = $jfo->teams[0]->name;
// Team zero market 
$zero_m = $jfo->teams[0]->market;
// players zero
$zero_p = $jfo->teams[0]->players;


// Team one name 
$one_a = $jfo->teams[1]->name;
// Team one market 
$one_m = $jfo->teams[1]->market;
// players one
$one_p = $jfo->teams[1]->players;


// Team two name
$two_a = $jfo->teams[2]->name;
// Team two market 
$two_m = $jfo->teams[2]->market;
// players two
$two_p = $jfo->teams[2]->players;


// Team three name
$three_a = $jfo->teams[3]->name;
// Team three market 
$three_m = $jfo->teams[3]->market;
// players three
$three_p = $jfo->teams[3]->players;


// Team four name
$four_a = $jfo->teams[4]->name;
// Team four market 
$four_m = $jfo->teams[4]->market;
// players four
$four_p = $jfo->teams[4]->players;


// Team five name
$five_a = $jfo->teams[5]->name;
// Team five market 
$five_m = $jfo->teams[5]->market;
// players five
$five_p = $jfo->teams[5]->players;


// Team six name
$six_a = $jfo->teams[6]->name;
// Team six market 
$six_m = $jfo->teams[6]->market;
// players six
$six_p = $jfo->teams[6]->players;


// Team seven name
$seven_a = $jfo->teams[7]->name;
// Team seven market 
$seven_m = $jfo->teams[7]->market;
// players seven
$seven_p = $jfo->teams[7]->players;


// Team eight name
$eight_a = $jfo->teams[8]->name;
// Team eight market 
$eight_m = $jfo->teams[8]->market;
// players eight
$eight_p = $jfo->teams[8]->players;


// Team nine name
$nine_a = $jfo->teams[9]->name;
// Team nine market 
$nine_m = $jfo->teams[9]->market;
// players nine
$nine_p = $jfo->teams[9]->players;


// Team ten name
$ten_a = $jfo->teams[10]->name;
// Team ten market 
$ten_m = $jfo->teams[10]->market;
// players ten
$ten_p = $jfo->teams[10]->players;


// Team eleven name
$eleven_a = $jfo->teams[11]->name;
// Team eleven market 
$eleven_m = $jfo->teams[11]->market;
// players eleven
$eleven_p = $jfo->teams[11]->players;


// Team twelve name
$twelve_a = $jfo->teams[12]->name;
// Team twelve market 
$twelve_m = $jfo->teams[12]->market;
// players twelve
$twelve_p = $jfo->teams[12]->players;


// Team thirteen name
$thirteen_a = $jfo->teams[13]->name;
// Team thirteen market 
$thirteen_m = $jfo->teams[13]->market;
// players thirteen
$thirteen_p = $jfo->teams[13]->players;


// Team fourteen name
$fourteen_a = $jfo->teams[14]->name;
// Team fourteen market 
$fourteen_m = $jfo->teams[14]->market;
// players fourteen
$fourteen_p = $jfo->teams[14]->players;


// Team fifteen name
$fifteen_a = $jfo->teams[15]->name;
// Team fifteen market 
$fifteen_m = $jfo->teams[15]->market;
// players fifteen
$fifteen_p = $jfo->teams[15]->players;


// Team sixteen name
$sixteen_a = $jfo->teams[16]->name;
// Team sixteen market 
$sixteen_m = $jfo->teams[16]->market;
// players sixteen
$sixteen_p = $jfo->teams[16]->players;


// Team seventeen name
$seventeen_a = $jfo->teams[17]->name;
// Team seventeen market 
$seventeen_m = $jfo->teams[17]->market;
// players seventeen
$seventeen_p = $jfo->teams[17]->players;


// Team eighteen name
$eighteen_a = $jfo->teams[18]->name;
// Team eighteen market 
$eighteen_m = $jfo->teams[18]->market;
// players eighteen
$eighteen_p = $jfo->teams[18]->players;


// Team nineteen name
$nineteen_a = $jfo->teams[19]->name;
// Team nineteen market 
$nineteen_m = $jfo->teams[19]->market;
// players nineteen
$nineteen_p = $jfo->teams[19]->players;


// Team twenty name
$twenty_a = $jfo->teams[20]->name;
// Team twenty market 
$twenty_m = $jfo->teams[20]->market;
// players twenty
$twenty_p = $jfo->teams[20]->players;


// Team twenty_one name
$twenty_one_a = $jfo->teams[21]->name;
// Team twenty_one market 
$twenty_one_m = $jfo->teams[21]->market;
// players twenty_one
$twenty_one_p = $jfo->teams[21]->players;


// Team twenty_two name
$twenty_two_a = $jfo->teams[22]->name;
// Team twenty_two market 
$twenty_two_m = $jfo->teams[22]->market;
// players twenty_two
$twenty_two_p = $jfo->teams[22]->players;


// Team twenty_three name
$twenty_three_a = $jfo->teams[23]->name;
// Team twenty_three market 
$twenty_three_m = $jfo->teams[23]->market;
// players twenty_three
$twenty_three_p = $jfo->teams[23]->players;


// Team twenty_four name
$twenty_four_a = $jfo->teams[24]->name;
// Team twenty_four market 
$twenty_four_m = $jfo->teams[24]->market;
// players twenty_four
$twenty_four_p = $jfo->teams[24]->players;



// Team twenty_five name
$twenty_five_a = $jfo->teams[25]->name;
// Team twenty_five market 
$twenty_five_m = $jfo->teams[25]->market;
// players twenty_five
$twenty_five_p = $jfo->teams[25]->players;



// Team twenty_six name
// $twenty_six_a = $jfo->teams[26]->name;
// // Team twenty_six market 
// $twenty_six_m = $jfo->teams[26]->market;
// // players twenty_six
// $twenty_six_p = $jfo->teams[26]->players;


// // Team twenty_seven name
// $twenty_seven_a = $jfo->teams[27]->name;
// // Team twenty_seven market 
// $twenty_seven_m = $jfo->teams[27]->market;
// // players twenty_seven
// $twenty_seven_p = $jfo->teams[27]->players;



// // Team twenty_eight name
// $twenty_eight_a = $jfo->teams[28]->name;
// // Team twenty_eight market 
// $twenty_eight_m = $jfo->teams[28]->market;
// // players twenty_eight
// $twenty_eight_p = $jfo->teams[28]->players;



// // Team twenty_nine name
// $twenty_nine_a = $jfo->teams[29]->name;
// // Team twenty_nine market 
// $twenty_nine_m = $jfo->teams[29]->market;
// // players twenty_nine
// $twenty_nine_p = $jfo->teams[29]->players;


// // Team thirty name
// $thirty_a = $jfo->teams[30]->name;
// // Team thirty market 
// $thirty_m = $jfo->teams[30]->market;
// // players thirty
// $thirty_p = $jfo->teams[30]->players;


// // Team thirty_one name
// $thirty_one_a = $jfo->teams[31]->name;
// // Team thirty_one market 
// $thirty_one_m = $jfo->teams[31]->market;
// // players thirty_one
// $thirty_one_p = $jfo->teams[31]->players;


if ($zero_a == 'Clippers') {

    $zero_a = 'lac';

}elseif($zero_a == 'Grizzlies') {

    $zero_a = 'mem';

}elseif ($zero_a == 'Trail Blazers') {

    $zero_a = 'por';

}elseif($zero_a == 'Raptors') {

    $zero_a = 'tor';

}elseif ($zero_a == '76ers') {

    $zero_a = 'phi';

}elseif($zero_a == 'Mavericks') {

    $zero_a = 'dal';

}elseif ($zero_a == 'Bucks') {

    $zero_a = 'mlw';

}elseif($zero_a == 'Spurs') {

    $zero_a = 'sa';

}elseif ($zero_a == 'Heat') {

    $zero_a = 'mia';

}elseif($zero_a == 'Lakers') {

    $zero_a = 'lak';

}elseif ($zero_a == 'Nuggets') {

    $zero_a = 'den';

}elseif($zero_a == 'Nets') {

    $zero_a = 'bkn';

}elseif ($zero_a == 'Pistons') {

    $zero_a = 'det';

}elseif($zero_a == 'Hawks') {

    $zero_a = 'atl';

}elseif ($zero_a == 'Cavaliers') {

    $zero_a = 'cle';

}elseif($zero_a == 'Rockets') {

    $zero_a = 'hou';

}elseif ($zero_a == 'Jazz') {

    $zero_a = 'uta';

}elseif($zero_a == 'Celtics') {

    $zero_a = 'bos';

}elseif ($zero_a == 'Hornets') {

    $zero_a = 'cha';

}elseif($zero_a == 'Timberwolves') {

    $zero_a = 'min';

}elseif ($zero_a == 'Wizards') {

    $zero_a = 'was';

}elseif($zero_a == 'Magic') {

    $zero_a = 'orl';

}elseif ($zero_a == 'Pelicans') {

    $zero_a = 'no';

}elseif($zero_a == 'Thunder') {

    $zero_a = 'okc';

}elseif($zero_a == 'Bulls') {

    $zero_a = 'chi';

}elseif ($zero_a == 'Warriors') {

    $zero_a = 'gs';

}elseif($zero_a == 'Suns') {

    $zero_a = 'pho';

}elseif ($zero_a == 'Kings') {

    $zero_a = 'sac';

}elseif($zero_a == 'Pacers') {

    $zero_a = 'ind';

}elseif($zero_a == 'Knicks') {

    $zero_a = 'ny';

}



if ($one_a == 'Clippers') {

    $one_a = 'lac';

}elseif($one_a == 'Grizzlies') {

    $one_a = 'mem';

}elseif ($one_a == 'Trail Blazers') {

    $one_a = 'por';

}elseif($one_a == 'Raptors') {

    $one_a = 'tor';

}elseif ($one_a == '76ers') {

    $one_a = 'phi';

}elseif($one_a == 'Mavericks') {

    $one_a = 'dal';

}elseif ($one_a == 'Bucks') {

    $one_a = 'mlw';

}elseif($one_a == 'Spurs') {

    $one_a = 'sa';

}elseif ($one_a == 'Heat') {

    $one_a = 'mia';

}elseif($one_a == 'Lakers') {

    $one_a = 'lak';

}elseif ($one_a == 'Nuggets') {

    $one_a = 'den';

}elseif($one_a == 'Nets') {

    $one_a = 'bkn';

}elseif ($one_a == 'Pistons') {

    $one_a = 'det';

}elseif($one_a == 'Hawks') {

    $one_a = 'atl';

}elseif ($one_a == 'Cavaliers') {

    $one_a = 'cle';

}elseif($one_a == 'Rockets') {

    $one_a = 'hou';

}elseif ($one_a == 'Jazz') {

    $one_a = 'uta';

}elseif($one_a == 'Celtics') {

    $one_a = 'bos';

}elseif ($one_a == 'Hornets') {

    $one_a = 'cha';

}elseif($one_a == 'Timberwolves') {

    $one_a = 'min';

}elseif ($one_a == 'Wizards') {

    $one_a = 'was';

}elseif($one_a == 'Magic') {

    $one_a = 'orl';

}elseif ($one_a == 'Pelicans') {

    $one_a = 'no';

}elseif($one_a == 'Thunder') {

    $one_a = 'okc';

}elseif($one_a == 'Bulls') {

    $one_a = 'chi';

}elseif ($one_a == 'Warriors') {

    $one_a = 'gs';

}elseif($one_a == 'Suns') {

    $one_a = 'pho';

}elseif ($one_a == 'Kings') {

    $one_a = 'sac';

}elseif($one_a == 'Pacers') {

    $one_a = 'ind';

}elseif($one_a == 'Knicks') {

    $one_a = 'ny';

}




if ($two_a == 'Clippers') {

    $two_a = 'lac';

}elseif($two_a == 'Grizzlies') {

    $two_a = 'mem';

}elseif ($two_a == 'Trail Blazers') {

    $two_a = 'por';

}elseif($two_a == 'Raptors') {

    $two_a = 'tor';

}elseif ($two_a == '76ers') {

    $two_a = 'phi';

}elseif($two_a == 'Mavericks') {

    $two_a = 'dal';

}elseif ($two_a == 'Bucks') {

    $two_a = 'mlw';

}elseif($two_a == 'Spurs') {

    $two_a = 'sa';

}elseif ($two_a == 'Heat') {

    $two_a = 'mia';

}elseif($two_a == 'Lakers') {

    $two_a = 'lak';

}elseif ($two_a == 'Nuggets') {

    $two_a = 'den';

}elseif($two_a == 'Nets') {

    $two_a = 'bkn';

}elseif ($two_a == 'Pistons') {

    $two_a = 'det';

}elseif($two_a == 'Hawks') {

    $two_a = 'atl';

}elseif ($two_a == 'Cavaliers') {

    $two_a = 'cle';

}elseif($two_a == 'Rockets') {

    $two_a = 'hou';

}elseif ($two_a == 'Jazz') {

    $two_a = 'uta';

}elseif($two_a == 'Celtics') {

    $two_a = 'bos';

}elseif ($two_a == 'Hornets') {

    $two_a = 'cha';

}elseif($two_a == 'Timberwolves') {

    $two_a = 'min';

}elseif ($two_a == 'Wizards') {

    $two_a = 'was';

}elseif($two_a == 'Magic') {

    $two_a = 'orl';

}elseif ($two_a == 'Pelicans') {

    $two_a = 'no';

}elseif($two_a == 'Thunder') {

    $two_a = 'okc';

}elseif($two_a == 'Bulls') {

    $two_a = 'chi';

}elseif ($two_a == 'Warriors') {

    $two_a = 'gs';

}elseif($two_a == 'Suns') {

    $two_a = 'pho';

}elseif ($two_a == 'Kings') {

    $two_a = 'sac';

}elseif($two_a == 'Pacers') {

    $two_a = 'ind';

}elseif($two_a == 'Knicks') {

    $two_a = 'ny';

}



if ($three_a == 'Clippers') {

    $three_a = 'lac';

}elseif($three_a == 'Grizzlies') {

    $three_a = 'mem';

}elseif ($three_a == 'Trail Blazers') {

    $three_a = 'por';

}elseif($three_a == 'Raptors') {

    $three_a = 'tor';

}elseif ($three_a == '76ers') {

    $three_a = 'phi';

}elseif($three_a == 'Mavericks') {

    $three_a = 'dal';

}elseif ($three_a == 'Bucks') {

    $three_a = 'mlw';

}elseif($three_a == 'Spurs') {

    $three_a = 'sa';

}elseif ($three_a == 'Heat') {

    $three_a = 'mia';

}elseif($three_a == 'Lakers') {

    $three_a = 'lak';

}elseif ($three_a == 'Nuggets') {

    $three_a = 'den';

}elseif($three_a == 'Nets') {

    $three_a = 'bkn';

}elseif ($three_a == 'Pistons') {

    $three_a = 'det';

}elseif($three_a == 'Hawks') {

    $three_a = 'atl';

}elseif ($three_a == 'Cavaliers') {

    $three_a = 'cle';

}elseif($three_a == 'Rockets') {

    $three_a = 'hou';

}elseif ($three_a == 'Jazz') {

    $three_a = 'uta';

}elseif($three_a == 'Celtics') {

    $three_a = 'bos';

}elseif ($three_a == 'Hornets') {

    $three_a = 'cha';

}elseif($three_a == 'Timberwolves') {

    $three_a = 'min';

}elseif ($three_a == 'Wizards') {

    $three_a = 'was';

}elseif($three_a == 'Magic') {

    $three_a = 'orl';

}elseif ($three_a == 'Pelicans') {

    $three_a = 'no';

}elseif($three_a == 'Thunder') {

    $three_a = 'okc';

}elseif($three_a == 'Bulls') {

    $three_a = 'chi';

}elseif ($three_a == 'Warriors') {

    $three_a = 'gs';

}elseif($three_a == 'Suns') {

    $three_a = 'pho';

}elseif ($three_a == 'Kings') {

    $three_a = 'sac';

}elseif($three_a == 'Pacers') {

    $three_a = 'ind';

}elseif($three_a == 'Knicks') {

    $three_a = 'ny';

}


if ($four_a == 'Clippers') {

    $four_a = 'lac';

}elseif($four_a == 'Grizzlies') {

    $four_a = 'mem';

}elseif ($four_a == 'Trail Blazers') {

    $four_a = 'por';

}elseif($four_a == 'Raptors') {

    $four_a = 'tor';

}elseif ($four_a == '76ers') {

    $four_a = 'phi';

}elseif($four_a == 'Mavericks') {

    $four_a = 'dal';

}elseif ($four_a == 'Bucks') {

    $four_a = 'mlw';

}elseif($four_a == 'Spurs') {

    $four_a = 'sa';

}elseif ($four_a == 'Heat') {

    $four_a = 'mia';

}elseif($four_a == 'Lakers') {

    $four_a = 'lak';

}elseif ($four_a == 'Nuggets') {

    $four_a = 'den';

}elseif($four_a == 'Nets') {

    $four_a = 'bkn';

}elseif ($four_a == 'Pistons') {

    $four_a = 'det';

}elseif($four_a == 'Hawks') {

    $four_a = 'atl';

}elseif ($four_a == 'Cavaliers') {

    $four_a = 'cle';

}elseif($four_a == 'Rockets') {

    $four_a = 'hou';

}elseif ($four_a == 'Jazz') {

    $four_a = 'uta';

}elseif($four_a == 'Celtics') {

    $four_a = 'bos';

}elseif ($four_a == 'Hornets') {

    $four_a = 'cha';

}elseif($four_a == 'Timberwolves') {

    $four_a = 'min';

}elseif ($four_a == 'Wizards') {

    $four_a = 'was';

}elseif($four_a == 'Magic') {

    $four_a = 'orl';

}elseif ($four_a == 'Pelicans') {

    $four_a = 'no';

}elseif($four_a == 'Thunder') {

    $four_a = 'okc';

}elseif($four_a == 'Bulls') {

    $four_a = 'chi';

}elseif ($four_a == 'Warriors') {

    $four_a = 'gs';

}elseif($four_a == 'Suns') {

    $four_a = 'pho';

}elseif ($four_a == 'Kings') {

    $four_a = 'sac';

}elseif($four_a == 'Pacers') {

    $four_a = 'ind';

}elseif($four_a == 'Knicks') {

    $four_a = 'ny';

}


if ($five_a == 'Clippers') {

    $five_a = 'lac';

}elseif($five_a == 'Grizzlies') {

    $five_a = 'mem';

}elseif ($five_a == 'Trail Blazers') {

    $five_a = 'por';

}elseif($five_a == 'Raptors') {

    $five_a = 'tor';

}elseif ($five_a == '76ers') {

    $five_a = 'phi';

}elseif($five_a == 'Mavericks') {

    $five_a = 'dal';

}elseif ($five_a == 'Bucks') {

    $five_a = 'mlw';

}elseif($five_a == 'Spurs') {

    $five_a = 'sa';

}elseif ($five_a == 'Heat') {

    $five_a = 'mia';

}elseif($five_a == 'Lakers') {

    $five_a = 'lak';

}elseif ($five_a == 'Nuggets') {

    $five_a = 'den';

}elseif($five_a == 'Nets') {

    $five_a = 'bkn';

}elseif ($five_a == 'Pistons') {

    $five_a = 'det';

}elseif($five_a == 'Hawks') {

    $five_a = 'atl';

}elseif ($five_a == 'Cavaliers') {

    $five_a = 'cle';

}elseif($five_a == 'Rockets') {

    $five_a = 'hou';

}elseif ($five_a == 'Jazz') {

    $five_a = 'uta';

}elseif($five_a == 'Celtics') {

    $five_a = 'bos';

}elseif ($five_a == 'Hornets') {

    $five_a = 'cha';

}elseif($five_a == 'Timberwolves') {

    $five_a = 'min';

}elseif ($five_a == 'Wizards') {

    $five_a = 'was';

}elseif($five_a == 'Magic') {

    $five_a = 'orl';

}elseif ($five_a == 'Pelicans') {

    $five_a = 'no';

}elseif($five_a == 'Thunder') {

    $five_a = 'okc';

}elseif($five_a == 'Bulls') {

    $five_a = 'chi';

}elseif ($five_a == 'Warriors') {

    $five_a = 'gs';

}elseif($five_a == 'Suns') {

    $five_a = 'pho';

}elseif ($five_a == 'Kings') {

    $five_a = 'sac';

}elseif($five_a == 'Pacers') {

    $five_a = 'ind';

}elseif($five_a == 'Knicks') {

    $five_a = 'ny';

}


if ($six_a == 'Clippers') {

    $six_a = 'lac';

}elseif($six_a == 'Grizzlies') {

    $six_a = 'mem';

}elseif ($six_a == 'Trail Blazers') {

    $six_a = 'por';

}elseif($six_a == 'Raptors') {

    $six_a = 'tor';

}elseif ($six_a == '76ers') {

    $six_a = 'phi';

}elseif($six_a == 'Mavericks') {

    $six_a = 'dal';

}elseif ($six_a == 'Bucks') {

    $six_a = 'mlw';

}elseif($six_a == 'Spurs') {

    $six_a = 'sa';

}elseif ($six_a == 'Heat') {

    $six_a = 'mia';

}elseif($six_a == 'Lakers') {

    $six_a = 'lak';

}elseif ($six_a == 'Nuggets') {

    $six_a = 'den';

}elseif($six_a == 'Nets') {

    $six_a = 'bkn';

}elseif ($six_a == 'Pistons') {

    $six_a = 'det';

}elseif($six_a == 'Hawks') {

    $six_a = 'atl';

}elseif ($six_a == 'Cavaliers') {

    $six_a = 'cle';

}elseif($six_a == 'Rockets') {

    $six_a = 'hou';

}elseif ($six_a == 'Jazz') {

    $six_a = 'uta';

}elseif($six_a == 'Celtics') {

    $six_a = 'bos';

}elseif ($six_a == 'Hornets') {

    $six_a = 'cha';

}elseif($six_a == 'Timberwolves') {

    $six_a = 'min';

}elseif ($six_a == 'Wizards') {

    $six_a = 'was';

}elseif($six_a == 'Magic') {

    $six_a = 'orl';

}elseif ($six_a == 'Pelicans') {

    $six_a = 'no';

}elseif($six_a == 'Thunder') {

    $six_a = 'okc';

}elseif($six_a == 'Bulls') {

    $six_a = 'chi';

}elseif ($six_a == 'Warriors') {

    $six_a = 'gs';

}elseif($six_a == 'Suns') {

    $six_a = 'pho';

}elseif ($six_a == 'Kings') {

    $six_a = 'sac';

}elseif($six_a == 'Pacers') {

    $six_a = 'ind';

}elseif($six_a == 'Knicks') {

    $six_a = 'ny';

}


if ($seven_a == 'Clippers') {

    $seven_a = 'lac';

}elseif($seven_a == 'Grizzlies') {

    $seven_a = 'mem';

}elseif ($seven_a == 'Trail Blazers') {

    $seven_a = 'por';

}elseif($seven_a == 'Raptors') {

    $seven_a = 'tor';

}elseif ($seven_a == '76ers') {

    $seven_a = 'phi';

}elseif($seven_a == 'Mavericks') {

    $seven_a = 'dal';

}elseif ($seven_a == 'Bucks') {

    $seven_a = 'mlw';

}elseif($seven_a == 'Spurs') {

    $seven_a = 'sa';

}elseif ($seven_a == 'Heat') {

    $seven_a = 'mia';

}elseif($seven_a == 'Lakers') {

    $seven_a = 'lak';

}elseif ($seven_a == 'Nuggets') {

    $seven_a = 'den';

}elseif($seven_a == 'Nets') {

    $seven_a = 'bkn';

}elseif ($seven_a == 'Pistons') {

    $seven_a = 'det';

}elseif($seven_a == 'Hawks') {

    $seven_a = 'atl';

}elseif ($seven_a == 'Cavaliers') {

    $seven_a = 'cle';

}elseif($seven_a == 'Rockets') {

    $seven_a = 'hou';

}elseif ($seven_a == 'Jazz') {

    $seven_a = 'uta';

}elseif($seven_a == 'Celtics') {

    $seven_a = 'bos';

}elseif ($seven_a == 'Hornets') {

    $seven_a = 'cha';

}elseif($seven_a == 'Timberwolves') {

    $seven_a = 'min';

}elseif ($seven_a == 'Wizards') {

    $seven_a = 'was';

}elseif($seven_a == 'Magic') {

    $seven_a = 'orl';

}elseif ($seven_a == 'Pelicans') {

    $seven_a = 'no';

}elseif($seven_a == 'Thunder') {

    $seven_a = 'okc';

}elseif($seven_a == 'Bulls') {

    $seven_a = 'chi';

}elseif ($seven_a == 'Warriors') {

    $seven_a = 'gs';

}elseif($seven_a == 'Suns') {

    $seven_a = 'pho';

}elseif ($seven_a == 'Kings') {

    $seven_a = 'sac';

}elseif($seven_a == 'Pacers') {

    $seven_a = 'ind';

}elseif($seven_a == 'Knicks') {

    $seven_a = 'ny';

}




if ($eight_a == 'Clippers') {

    $eight_a = 'lac';

}elseif($eight_a == 'Grizzlies') {

    $eight_a = 'mem';

}elseif ($eight_a == 'Trail Blazers') {

    $eight_a = 'por';

}elseif($eight_a == 'Raptors') {

    $eight_a = 'tor';

}elseif ($eight_a == '76ers') {

    $eight_a = 'phi';

}elseif($eight_a == 'Mavericks') {

    $eight_a = 'dal';

}elseif ($eight_a == 'Bucks') {

    $eight_a = 'mlw';

}elseif($eight_a == 'Spurs') {

    $eight_a = 'sa';

}elseif ($eight_a == 'Heat') {

    $eight_a = 'mia';

}elseif($eight_a == 'Lakers') {

    $eight_a = 'lak';

}elseif ($eight_a == 'Nuggets') {

    $eight_a = 'den';

}elseif($eight_a == 'Nets') {

    $eight_a = 'bkn';

}elseif ($eight_a == 'Pistons') {

    $eight_a = 'det';

}elseif($eight_a == 'Hawks') {

    $eight_a = 'atl';

}elseif ($eight_a == 'Cavaliers') {

    $eight_a = 'cle';

}elseif($eight_a == 'Rockets') {

    $eight_a = 'hou';

}elseif ($eight_a == 'Jazz') {

    $eight_a = 'uta';

}elseif($eight_a == 'Celtics') {

    $eight_a = 'bos';

}elseif ($eight_a == 'Hornets') {

    $eight_a = 'cha';

}elseif($eight_a == 'Timberwolves') {

    $eight_a = 'min';

}elseif ($eight_a == 'Wizards') {

    $eight_a = 'was';

}elseif($eight_a == 'Magic') {

    $eight_a = 'orl';

}elseif ($eight_a == 'Pelicans') {

    $eight_a = 'no';

}elseif($eight_a == 'Thunder') {

    $eight_a = 'okc';

}elseif($eight_a == 'Bulls') {

    $eight_a = 'chi';

}elseif ($eight_a == 'Warriors') {

    $eight_a = 'gs';

}elseif($eight_a == 'Suns') {

    $eight_a = 'pho';

}elseif ($eight_a == 'Kings') {

    $eight_a = 'sac';

}elseif($eight_a == 'Pacers') {

    $eight_a = 'ind';

}elseif($eight_a == 'Knicks') {

    $eight_a = 'ny';

}






if ($nine_a == 'Clippers') {

    $nine_a = 'lac';

}elseif($nine_a == 'Grizzlies') {

    $nine_a = 'mem';

}elseif ($nine_a == 'Trail Blazers') {

    $nine_a = 'por';

}elseif($nine_a == 'Raptors') {

    $nine_a = 'tor';

}elseif ($nine_a == '76ers') {

    $nine_a = 'phi';

}elseif($nine_a == 'Mavericks') {

    $nine_a = 'dal';

}elseif ($nine_a == 'Bucks') {

    $nine_a = 'mlw';

}elseif($nine_a == 'Spurs') {

    $nine_a = 'sa';

}elseif ($nine_a == 'Heat') {

    $nine_a = 'mia';

}elseif($nine_a == 'Lakers') {

    $nine_a = 'lak';

}elseif ($nine_a == 'Nuggets') {

    $nine_a = 'den';

}elseif($nine_a == 'Nets') {

    $nine_a = 'bkn';

}elseif ($nine_a == 'Pistons') {

    $nine_a = 'det';

}elseif($nine_a == 'Hawks') {

    $nine_a = 'atl';

}elseif ($nine_a == 'Cavaliers') {

    $nine_a = 'cle';

}elseif($nine_a == 'Rockets') {

    $nine_a = 'hou';

}elseif ($nine_a == 'Jazz') {

    $nine_a = 'uta';

}elseif($nine_a == 'Celtics') {

    $nine_a = 'bos';

}elseif ($nine_a == 'Hornets') {

    $nine_a = 'cha';

}elseif($nine_a == 'Timberwolves') {

    $nine_a = 'min';

}elseif ($nine_a == 'Wizards') {

    $nine_a = 'was';

}elseif($nine_a == 'Magic') {

    $nine_a = 'orl';

}elseif ($nine_a == 'Pelicans') {

    $nine_a = 'no';

}elseif($nine_a == 'Thunder') {

    $nine_a = 'okc';

}elseif($nine_a == 'Bulls') {

    $nine_a = 'chi';

}elseif ($nine_a == 'Warriors') {

    $nine_a = 'gs';

}elseif($nine_a == 'Suns') {

    $nine_a = 'pho';

}elseif ($nine_a == 'Kings') {

    $nine_a = 'sac';

}elseif($nine_a == 'Pacers') {

    $nine_a = 'ind';

}elseif($nine_a == 'Knicks') {

    $nine_a = 'ny';

}






if ($ten_a == 'Clippers') {

    $ten_a = 'lac';

}elseif($ten_a == 'Grizzlies') {

    $ten_a = 'mem';

}elseif ($ten_a == 'Trail Blazers') {

    $ten_a = 'por';

}elseif($ten_a == 'Raptors') {

    $ten_a = 'tor';

}elseif ($ten_a == '76ers') {

    $ten_a = 'phi';

}elseif($ten_a == 'Mavericks') {

    $ten_a = 'dal';

}elseif ($ten_a == 'Bucks') {

    $ten_a = 'mlw';

}elseif($ten_a == 'Spurs') {

    $ten_a = 'sa';

}elseif ($ten_a == 'Heat') {

    $ten_a = 'mia';

}elseif($ten_a == 'Lakers') {

    $ten_a = 'lak';

}elseif ($ten_a == 'Nuggets') {

    $ten_a = 'den';

}elseif($ten_a == 'Nets') {

    $ten_a = 'bkn';

}elseif ($ten_a == 'Pistons') {

    $ten_a = 'det';

}elseif($ten_a == 'Hawks') {

    $ten_a = 'atl';

}elseif ($ten_a == 'Cavaliers') {

    $ten_a = 'cle';

}elseif($ten_a == 'Rockets') {

    $ten_a = 'hou';

}elseif ($ten_a == 'Jazz') {

    $ten_a = 'uta';

}elseif($ten_a == 'Celtics') {

    $ten_a = 'bos';

}elseif ($ten_a == 'Hornets') {

    $ten_a = 'cha';

}elseif($ten_a == 'Timberwolves') {

    $ten_a = 'min';

}elseif ($ten_a == 'Wizards') {

    $ten_a = 'was';

}elseif($ten_a == 'Magic') {

    $ten_a = 'orl';

}elseif ($ten_a == 'Pelicans') {

    $ten_a = 'no';

}elseif($ten_a == 'Thunder') {

    $ten_a = 'okc';

}elseif($ten_a == 'Bulls') {

    $ten_a = 'chi';

}elseif ($ten_a == 'Warriors') {

    $ten_a = 'gs';

}elseif($ten_a == 'Suns') {

    $ten_a = 'pho';

}elseif ($ten_a == 'Kings') {

    $ten_a = 'sac';

}elseif($ten_a == 'Pacers') {

    $ten_a = 'ind';

}elseif($ten_a == 'Knicks') {

    $ten_a = 'ny';

}





if ($eleven_a == 'Clippers') {

    $eleven_a = 'lac';

}elseif($eleven_a == 'Grizzlies') {

    $eleven_a = 'mem';

}elseif ($eleven_a == 'Trail Blazers') {

    $eleven_a = 'por';

}elseif($eleven_a == 'Raptors') {

    $eleven_a = 'tor';

}elseif ($eleven_a == '76ers') {

    $eleven_a = 'phi';

}elseif($eleven_a == 'Mavericks') {

    $eleven_a = 'dal';

}elseif ($eleven_a == 'Bucks') {

    $eleven_a = 'mlw';

}elseif($eleven_a == 'Spurs') {

    $eleven_a = 'sa';

}elseif ($eleven_a == 'Heat') {

    $eleven_a = 'mia';

}elseif($eleven_a == 'Lakers') {

    $eleven_a = 'lak';

}elseif ($eleven_a == 'Nuggets') {

    $eleven_a = 'den';

}elseif($eleven_a == 'Nets') {

    $eleven_a = 'bkn';

}elseif ($eleven_a == 'Pistons') {

    $eleven_a = 'det';

}elseif($eleven_a == 'Hawks') {

    $eleven_a = 'atl';

}elseif ($eleven_a == 'Cavaliers') {

    $eleven_a = 'cle';

}elseif($eleven_a == 'Rockets') {

    $eleven_a = 'hou';

}elseif ($eleven_a == 'Jazz') {

    $eleven_a = 'uta';

}elseif($eleven_a == 'Celtics') {

    $eleven_a = 'bos';

}elseif ($eleven_a == 'Hornets') {

    $eleven_a = 'cha';

}elseif($eleven_a == 'Timberwolves') {

    $eleven_a = 'min';

}elseif ($eleven_a == 'Wizards') {

    $eleven_a = 'was';

}elseif($eleven_a == 'Magic') {

    $eleven_a = 'orl';

}elseif ($eleven_a == 'Pelicans') {

    $eleven_a = 'no';

}elseif($eleven_a == 'Thunder') {

    $eleven_a = 'okc';

}elseif($eleven_a == 'Bulls') {

    $eleven_a = 'chi';

}elseif ($eleven_a == 'Warriors') {

    $eleven_a = 'gs';

}elseif($eleven_a == 'Suns') {

    $eleven_a = 'pho';

}elseif ($eleven_a == 'Kings') {

    $eleven_a = 'sac';

}elseif($eleven_a == 'Pacers') {

    $eleven_a = 'ind';

}elseif($eleven_a == 'Knicks') {

    $eleven_a = 'ny';

}




if ($twelve_a == 'Clippers') {

    $twelve_a = 'lac';

}elseif($twelve_a == 'Grizzlies') {

    $twelve_a = 'mem';

}elseif ($twelve_a == 'Trail Blazers') {

    $twelve_a = 'por';

}elseif($twelve_a == 'Raptors') {

    $twelve_a = 'tor';

}elseif ($twelve_a == '76ers') {

    $twelve_a = 'phi';

}elseif($twelve_a == 'Mavericks') {

    $twelve_a = 'dal';

}elseif ($twelve_a == 'Bucks') {

    $twelve_a = 'mlw';

}elseif($twelve_a == 'Spurs') {

    $twelve_a = 'sa';

}elseif ($twelve_a == 'Heat') {

    $twelve_a = 'mia';

}elseif($twelve_a == 'Lakers') {

    $twelve_a = 'lak';

}elseif ($twelve_a == 'Nuggets') {

    $twelve_a = 'den';

}elseif($twelve_a == 'Nets') {

    $twelve_a = 'bkn';

}elseif ($twelve_a == 'Pistons') {

    $twelve_a = 'det';

}elseif($twelve_a == 'Hawks') {

    $twelve_a = 'atl';

}elseif ($twelve_a == 'Cavaliers') {

    $twelve_a = 'cle';

}elseif($twelve_a == 'Rockets') {

    $twelve_a = 'hou';

}elseif ($twelve_a == 'Jazz') {

    $twelve_a = 'uta';

}elseif($twelve_a == 'Celtics') {

    $twelve_a = 'bos';

}elseif ($twelve_a == 'Hornets') {

    $twelve_a = 'cha';

}elseif($twelve_a == 'Timberwolves') {

    $twelve_a = 'min';

}elseif ($twelve_a == 'Wizards') {

    $twelve_a = 'was';

}elseif($twelve_a == 'Magic') {

    $twelve_a = 'orl';

}elseif ($twelve_a == 'Pelicans') {

    $twelve_a = 'no';

}elseif($twelve_a == 'Thunder') {

    $twelve_a = 'okc';

}elseif($twelve_a == 'Bulls') {

    $twelve_a = 'chi';

}elseif ($twelve_a == 'Warriors') {

    $twelve_a = 'gs';

}elseif($twelve_a == 'Suns') {

    $twelve_a = 'pho';

}elseif ($twelve_a == 'Kings') {

    $twelve_a = 'sac';

}elseif($twelve_a == 'Pacers') {

    $twelve_a = 'ind';

}elseif($twelve_a == 'Knicks') {

    $twelve_a = 'ny';

}





if ($thirteen_a == 'Clippers') {

    $thirteen_a = 'lac';

}elseif($thirteen_a == 'Grizzlies') {

    $thirteen_a = 'mem';

}elseif ($thirteen_a == 'Trail Blazers') {

    $thirteen_a = 'por';

}elseif($thirteen_a == 'Raptors') {

    $thirteen_a = 'tor';

}elseif ($thirteen_a == '76ers') {

    $thirteen_a = 'phi';

}elseif($thirteen_a == 'Mavericks') {

    $thirteen_a = 'dal';

}elseif ($thirteen_a == 'Bucks') {

    $thirteen_a = 'mlw';

}elseif($thirteen_a == 'Spurs') {

    $thirteen_a = 'sa';

}elseif ($thirteen_a == 'Heat') {

    $thirteen_a = 'mia';

}elseif($thirteen_a == 'Lakers') {

    $thirteen_a = 'lak';

}elseif ($thirteen_a == 'Nuggets') {

    $thirteen_a = 'den';

}elseif($thirteen_a == 'Nets') {

    $thirteen_a = 'bkn';

}elseif ($thirteen_a == 'Pistons') {

    $thirteen_a = 'det';

}elseif($thirteen_a == 'Hawks') {

    $thirteen_a = 'atl';

}elseif ($thirteen_a == 'Cavaliers') {

    $thirteen_a = 'cle';

}elseif($thirteen_a == 'Rockets') {

    $thirteen_a = 'hou';

}elseif ($thirteen_a == 'Jazz') {

    $thirteen_a = 'uta';

}elseif($thirteen_a == 'Celtics') {

    $thirteen_a = 'bos';

}elseif ($thirteen_a == 'Hornets') {

    $thirteen_a = 'cha';

}elseif($thirteen_a == 'Timberwolves') {

    $thirteen_a = 'min';

}elseif ($thirteen_a == 'Wizards') {

    $thirteen_a = 'was';

}elseif($thirteen_a == 'Magic') {

    $thirteen_a = 'orl';

}elseif ($thirteen_a == 'Pelicans') {

    $thirteen_a = 'no';

}elseif($thirteen_a == 'Thunder') {

    $thirteen_a = 'okc';

}elseif($thirteen_a == 'Bulls') {

    $thirteen_a = 'chi';

}elseif ($thirteen_a == 'Warriors') {

    $thirteen_a = 'gs';

}elseif($thirteen_a == 'Suns') {

    $thirteen_a = 'pho';

}elseif ($thirteen_a == 'Kings') {

    $thirteen_a = 'sac';

}elseif($thirteen_a == 'Pacers') {

    $thirteen_a = 'ind';

}elseif($thirteen_a == 'Knicks') {

    $thirteen_a = 'ny';

}





if ($fourteen_a == 'Clippers') {

    $fourteen_a = 'lac';

}elseif($fourteen_a == 'Grizzlies') {

    $fourteen_a = 'mem';

}elseif ($fourteen_a == 'Trail Blazers') {

    $fourteen_a = 'por';

}elseif($fourteen_a == 'Raptors') {

    $fourteen_a = 'tor';

}elseif ($fourteen_a == '76ers') {

    $fourteen_a = 'phi';

}elseif($fourteen_a == 'Mavericks') {

    $fourteen_a = 'dal';

}elseif ($fourteen_a == 'Bucks') {

    $fourteen_a = 'mlw';

}elseif($fourteen_a == 'Spurs') {

    $fourteen_a = 'sa';

}elseif ($fourteen_a == 'Heat') {

    $fourteen_a = 'mia';

}elseif($fourteen_a == 'Lakers') {

    $fourteen_a = 'lak';

}elseif ($fourteen_a == 'Nuggets') {

    $fourteen_a = 'den';

}elseif($fourteen_a == 'Nets') {

    $fourteen_a = 'bkn';

}elseif ($fourteen_a == 'Pistons') {

    $fourteen_a = 'det';

}elseif($fourteen_a == 'Hawks') {

    $fourteen_a = 'atl';

}elseif ($fourteen_a == 'Cavaliers') {

    $fourteen_a = 'cle';

}elseif($fourteen_a == 'Rockets') {

    $fourteen_a = 'hou';

}elseif ($fourteen_a == 'Jazz') {

    $fourteen_a = 'uta';

}elseif($fourteen_a == 'Celtics') {

    $fourteen_a = 'bos';

}elseif ($fourteen_a == 'Hornets') {

    $fourteen_a = 'cha';

}elseif($fourteen_a == 'Timberwolves') {

    $fourteen_a = 'min';

}elseif ($fourteen_a == 'Wizards') {

    $fourteen_a = 'was';

}elseif($fourteen_a == 'Magic') {

    $fourteen_a = 'orl';

}elseif ($fourteen_a == 'Pelicans') {

    $fourteen_a = 'no';

}elseif($fourteen_a == 'Thunder') {

    $fourteen_a = 'okc';

}elseif($fourteen_a == 'Bulls') {

    $fourteen_a = 'chi';

}elseif ($fourteen_a == 'Warriors') {

    $fourteen_a = 'gs';

}elseif($fourteen_a == 'Suns') {

    $fourteen_a = 'pho';

}elseif ($fourteen_a == 'Kings') {

    $fourteen_a = 'sac';

}elseif($fourteen_a == 'Pacers') {

    $fourteen_a = 'ind';

}elseif($fourteen_a == 'Knicks') {

    $fourteen_a = 'ny';

}




if ($fifteen_a == 'Clippers') {

    $fifteen_a = 'lac';

}elseif($fifteen_a == 'Grizzlies') {

    $fifteen_a = 'mem';

}elseif ($fifteen_a == 'Trail Blazers') {

    $fifteen_a = 'por';

}elseif($fifteen_a == 'Raptors') {

    $fifteen_a = 'tor';

}elseif ($fifteen_a == '76ers') {

    $fifteen_a = 'phi';

}elseif($fifteen_a == 'Mavericks') {

    $fifteen_a = 'dal';

}elseif ($fifteen_a == 'Bucks') {

    $fifteen_a = 'mlw';

}elseif($fifteen_a == 'Spurs') {

    $fifteen_a = 'sa';

}elseif ($fifteen_a == 'Heat') {

    $fifteen_a = 'mia';

}elseif($fifteen_a == 'Lakers') {

    $fifteen_a = 'lak';

}elseif ($fifteen_a == 'Nuggets') {

    $fifteen_a = 'den';

}elseif($fifteen_a == 'Nets') {

    $fifteen_a = 'bkn';

}elseif ($fifteen_a == 'Pistons') {

    $fifteen_a = 'det';

}elseif($fifteen_a == 'Hawks') {

    $fifteen_a = 'atl';

}elseif ($fifteen_a == 'Cavaliers') {

    $fifteen_a = 'cle';

}elseif($fifteen_a == 'Rockets') {

    $fifteen_a = 'hou';

}elseif ($fifteen_a == 'Jazz') {

    $fifteen_a = 'uta';

}elseif($fifteen_a == 'Celtics') {

    $fifteen_a = 'bos';

}elseif ($fifteen_a == 'Hornets') {

    $fifteen_a = 'cha';

}elseif($fifteen_a == 'Timberwolves') {

    $fifteen_a = 'min';

}elseif ($fifteen_a == 'Wizards') {

    $fifteen_a = 'was';

}elseif($fifteen_a == 'Magic') {

    $fifteen_a = 'orl';

}elseif ($fifteen_a == 'Pelicans') {

    $fifteen_a = 'no';

}elseif($fifteen_a == 'Thunder') {

    $fifteen_a = 'okc';

}elseif($fifteen_a == 'Bulls') {

    $fifteen_a = 'chi';

}elseif ($fifteen_a == 'Warriors') {

    $fifteen_a = 'gs';

}elseif($fifteen_a == 'Suns') {

    $fifteen_a = 'pho';

}elseif ($fifteen_a == 'Kings') {

    $fifteen_a = 'sac';

}elseif($fifteen_a == 'Pacers') {

    $fifteen_a = 'ind';

}elseif($fifteen_a == 'Knicks') {

    $fifteen_a = 'ny';

}




if ($sixteen_a == 'Clippers') {

    $sixteen_a = 'lac';

}elseif($sixteen_a == 'Grizzlies') {

    $sixteen_a = 'mem';

}elseif ($sixteen_a == 'Trail Blazers') {

    $sixteen_a = 'por';

}elseif($sixteen_a == 'Raptors') {

    $sixteen_a = 'tor';

}elseif ($sixteen_a == '76ers') {

    $sixteen_a = 'phi';

}elseif($sixteen_a == 'Mavericks') {

    $sixteen_a = 'dal';

}elseif ($sixteen_a == 'Bucks') {

    $sixteen_a = 'mlw';

}elseif($sixteen_a == 'Spurs') {

    $sixteen_a = 'sa';

}elseif ($sixteen_a == 'Heat') {

    $sixteen_a = 'mia';

}elseif($sixteen_a == 'Lakers') {

    $sixteen_a = 'lak';

}elseif ($sixteen_a == 'Nuggets') {

    $sixteen_a = 'den';

}elseif($sixteen_a == 'Nets') {

    $sixteen_a = 'bkn';

}elseif ($sixteen_a == 'Pistons') {

    $sixteen_a = 'det';

}elseif($sixteen_a == 'Hawks') {

    $sixteen_a = 'atl';

}elseif ($sixteen_a == 'Cavaliers') {

    $sixteen_a = 'cle';

}elseif($sixteen_a == 'Rockets') {

    $sixteen_a = 'hou';

}elseif ($sixteen_a == 'Jazz') {

    $sixteen_a = 'uta';

}elseif($sixteen_a == 'Celtics') {

    $sixteen_a = 'bos';

}elseif ($sixteen_a == 'Hornets') {

    $sixteen_a = 'cha';

}elseif($sixteen_a == 'Timberwolves') {

    $sixteen_a = 'min';

}elseif ($sixteen_a == 'Wizards') {

    $sixteen_a = 'was';

}elseif($sixteen_a == 'Magic') {

    $sixteen_a = 'orl';

}elseif ($sixteen_a == 'Pelicans') {

    $sixteen_a = 'no';

}elseif($sixteen_a == 'Thunder') {

    $sixteen_a = 'okc';

}elseif($sixteen_a == 'Bulls') {

    $sixteen_a = 'chi';

}elseif ($sixteen_a == 'Warriors') {

    $sixteen_a = 'gs';

}elseif($sixteen_a == 'Suns') {

    $sixteen_a = 'pho';

}elseif ($sixteen_a == 'Kings') {

    $sixteen_a = 'sac';

}elseif($sixteen_a == 'Pacers') {

    $sixteen_a = 'ind';

}elseif($sixteen_a == 'Knicks') {

    $sixteen_a = 'ny';

}





if ($seventeen_a == 'Clippers') {

    $seventeen_a = 'lac';

}elseif($seventeen_a == 'Grizzlies') {

    $seventeen_a = 'mem';

}elseif ($seventeen_a == 'Trail Blazers') {

    $seventeen_a = 'por';

}elseif($seventeen_a == 'Raptors') {

    $seventeen_a = 'tor';

}elseif ($seventeen_a == '76ers') {

    $seventeen_a = 'phi';

}elseif($seventeen_a == 'Mavericks') {

    $seventeen_a = 'dal';

}elseif ($seventeen_a == 'Bucks') {

    $seventeen_a = 'mlw';

}elseif($seventeen_a == 'Spurs') {

    $seventeen_a = 'sa';

}elseif ($seventeen_a == 'Heat') {

    $seventeen_a = 'mia';

}elseif($seventeen_a == 'Lakers') {

    $seventeen_a = 'lak';

}elseif ($seventeen_a == 'Nuggets') {

    $seventeen_a = 'den';

}elseif($seventeen_a == 'Nets') {

    $seventeen_a = 'bkn';

}elseif ($seventeen_a == 'Pistons') {

    $seventeen_a = 'det';

}elseif($seventeen_a == 'Hawks') {

    $seventeen_a = 'atl';

}elseif ($seventeen_a == 'Cavaliers') {

    $seventeen_a = 'cle';

}elseif($seventeen_a == 'Rockets') {

    $seventeen_a = 'hou';

}elseif ($seventeen_a == 'Jazz') {

    $seventeen_a = 'uta';

}elseif($seventeen_a == 'Celtics') {

    $seventeen_a = 'bos';

}elseif ($seventeen_a == 'Hornets') {

    $seventeen_a = 'cha';

}elseif($seventeen_a == 'Timberwolves') {

    $seventeen_a = 'min';

}elseif ($seventeen_a == 'Wizards') {

    $seventeen_a = 'was';

}elseif($seventeen_a == 'Magic') {

    $seventeen_a = 'orl';

}elseif ($seventeen_a == 'Pelicans') {

    $seventeen_a = 'no';

}elseif($seventeen_a == 'Thunder') {

    $seventeen_a = 'okc';

}elseif($seventeen_a == 'Bulls') {

    $seventeen_a = 'chi';

}elseif ($seventeen_a == 'Warriors') {

    $seventeen_a = 'gs';

}elseif($seventeen_a == 'Suns') {

    $seventeen_a = 'pho';

}elseif ($seventeen_a == 'Kings') {

    $seventeen_a = 'sac';

}elseif($seventeen_a == 'Pacers') {

    $seventeen_a = 'ind';

}elseif($seventeen_a == 'Knicks') {

    $seventeen_a = 'ny';

}





if ($eighteen_a == 'Clippers') {

    $eighteen_a = 'lac';

}elseif($eighteen_a == 'Grizzlies') {

    $eighteen_a = 'mem';

}elseif ($eighteen_a == 'Trail Blazers') {

    $eighteen_a = 'por';

}elseif($eighteen_a == 'Raptors') {

    $eighteen_a = 'tor';

}elseif ($eighteen_a == '76ers') {

    $eighteen_a = 'phi';

}elseif($eighteen_a == 'Mavericks') {

    $eighteen_a = 'dal';

}elseif ($eighteen_a == 'Bucks') {

    $eighteen_a = 'mlw';

}elseif($eighteen_a == 'Spurs') {

    $eighteen_a = 'sa';

}elseif ($eighteen_a == 'Heat') {

    $eighteen_a = 'mia';

}elseif($eighteen_a == 'Lakers') {

    $eighteen_a = 'lak';

}elseif ($eighteen_a == 'Nuggets') {

    $eighteen_a = 'den';

}elseif($eighteen_a == 'Nets') {

    $eighteen_a = 'bkn';

}elseif ($eighteen_a == 'Pistons') {

    $eighteen_a = 'det';

}elseif($eighteen_a == 'Hawks') {

    $eighteen_a = 'atl';

}elseif ($eighteen_a == 'Cavaliers') {

    $eighteen_a = 'cle';

}elseif($eighteen_a == 'Rockets') {

    $eighteen_a = 'hou';

}elseif ($eighteen_a == 'Jazz') {

    $eighteen_a = 'uta';

}elseif($eighteen_a == 'Celtics') {

    $eighteen_a = 'bos';

}elseif ($eighteen_a == 'Hornets') {

    $eighteen_a = 'cha';

}elseif($eighteen_a == 'Timberwolves') {

    $eighteen_a = 'min';

}elseif ($eighteen_a == 'Wizards') {

    $eighteen_a = 'was';

}elseif($eighteen_a == 'Magic') {

    $eighteen_a = 'orl';

}elseif ($eighteen_a == 'Pelicans') {

    $eighteen_a = 'no';

}elseif($eighteen_a == 'Thunder') {

    $eighteen_a = 'okc';

}elseif($eighteen_a == 'Bulls') {

    $eighteen_a = 'chi';

}elseif ($eighteen_a == 'Warriors') {

    $eighteen_a = 'gs';

}elseif($eighteen_a == 'Suns') {

    $eighteen_a = 'pho';

}elseif ($eighteen_a == 'Kings') {

    $eighteen_a = 'sac';

}elseif($eighteen_a == 'Pacers') {

    $eighteen_a = 'ind';

}elseif($eighteen_a == 'Knicks') {

    $eighteen_a = 'ny';

}





if ($nineteen_a == 'Clippers') {

    $nineteen_a = 'lac';

}elseif($nineteen_a == 'Grizzlies') {

    $nineteen_a = 'mem';

}elseif ($nineteen_a == 'Trail Blazers') {

    $nineteen_a = 'por';

}elseif($nineteen_a == 'Raptors') {

    $nineteen_a = 'tor';

}elseif ($nineteen_a == '76ers') {

    $nineteen_a = 'phi';

}elseif($nineteen_a == 'Mavericks') {

    $nineteen_a = 'dal';

}elseif ($nineteen_a == 'Bucks') {

    $nineteen_a = 'mlw';

}elseif($nineteen_a == 'Spurs') {

    $nineteen_a = 'sa';

}elseif ($nineteen_a == 'Heat') {

    $nineteen_a = 'mia';

}elseif($nineteen_a == 'Lakers') {

    $nineteen_a = 'lak';

}elseif ($nineteen_a == 'Nuggets') {

    $nineteen_a = 'den';

}elseif($nineteen_a == 'Nets') {

    $nineteen_a = 'bkn';

}elseif ($nineteen_a == 'Pistons') {

    $nineteen_a = 'det';

}elseif($nineteen_a == 'Hawks') {

    $nineteen_a = 'atl';

}elseif ($nineteen_a == 'Cavaliers') {

    $nineteen_a = 'cle';

}elseif($nineteen_a == 'Rockets') {

    $nineteen_a = 'hou';

}elseif ($nineteen_a == 'Jazz') {

    $nineteen_a = 'uta';

}elseif($nineteen_a == 'Celtics') {

    $nineteen_a = 'bos';

}elseif ($nineteen_a == 'Hornets') {

    $nineteen_a = 'cha';

}elseif($nineteen_a == 'Timberwolves') {

    $nineteen_a = 'min';

}elseif ($nineteen_a == 'Wizards') {

    $nineteen_a = 'was';

}elseif($nineteen_a == 'Magic') {

    $nineteen_a = 'orl';

}elseif ($nineteen_a == 'Pelicans') {

    $nineteen_a = 'no';

}elseif($nineteen_a == 'Thunder') {

    $nineteen_a = 'okc';

}elseif($nineteen_a == 'Bulls') {

    $nineteen_a = 'chi';

}elseif ($nineteen_a == 'Warriors') {

    $nineteen_a = 'gs';

}elseif($nineteen_a == 'Suns') {

    $nineteen_a = 'pho';

}elseif ($nineteen_a == 'Kings') {

    $nineteen_a = 'sac';

}elseif($nineteen_a == 'Pacers') {

    $nineteen_a = 'ind';

}elseif($nineteen_a == 'Knicks') {

    $nineteen_a = 'ny';

}





if ($twenty_a == 'Clippers') {

    $twenty_a = 'lac';

}elseif($twenty_a == 'Grizzlies') {

    $twenty_a = 'mem';

}elseif ($twenty_a == 'Trail Blazers') {

    $twenty_a = 'por';

}elseif($twenty_a == 'Raptors') {

    $twenty_a = 'tor';

}elseif ($twenty_a == '76ers') {

    $twenty_a = 'phi';

}elseif($twenty_a == 'Mavericks') {

    $twenty_a = 'dal';

}elseif ($twenty_a == 'Bucks') {

    $twenty_a = 'mlw';

}elseif($twenty_a == 'Spurs') {

    $twenty_a = 'sa';

}elseif ($twenty_a == 'Heat') {

    $twenty_a = 'mia';

}elseif($twenty_a == 'Lakers') {

    $twenty_a = 'lak';

}elseif ($twenty_a == 'Nuggets') {

    $twenty_a = 'den';

}elseif($twenty_a == 'Nets') {

    $twenty_a = 'bkn';

}elseif ($twenty_a == 'Pistons') {

    $twenty_a = 'det';

}elseif($twenty_a == 'Hawks') {

    $twenty_a = 'atl';

}elseif ($twenty_a == 'Cavaliers') {

    $twenty_a = 'cle';

}elseif($twenty_a == 'Rockets') {

    $twenty_a = 'hou';

}elseif ($twenty_a == 'Jazz') {

    $twenty_a = 'uta';

}elseif($twenty_a == 'Celtics') {

    $twenty_a = 'bos';

}elseif ($twenty_a == 'Hornets') {

    $twenty_a = 'cha';

}elseif($twenty_a == 'Timberwolves') {

    $twenty_a = 'min';

}elseif ($twenty_a == 'Wizards') {

    $twenty_a = 'was';

}elseif($twenty_a == 'Magic') {

    $twenty_a = 'orl';

}elseif ($twenty_a == 'Pelicans') {

    $twenty_a = 'no';

}elseif($twenty_a == 'Thunder') {

    $twenty_a = 'okc';

}elseif($twenty_a == 'Bulls') {

    $twenty_a = 'chi';

}elseif ($twenty_a == 'Warriors') {

    $twenty_a = 'gs';

}elseif($twenty_a == 'Suns') {

    $twenty_a = 'pho';

}elseif ($twenty_a == 'Kings') {

    $twenty_a = 'sac';

}elseif($twenty_a == 'Pacers') {

    $twenty_a = 'ind';

}elseif($twenty_a == 'Knicks') {

    $twenty_a = 'ny';

}






if ($twenty_one_a == 'Clippers') {

    $twenty_one_a = 'lac';

}elseif($twenty_one_a == 'Grizzlies') {

    $twenty_one_a = 'mem';

}elseif ($twenty_one_a == 'Trail Blazers') {

    $twenty_one_a = 'por';

}elseif($twenty_one_a == 'Raptors') {

    $twenty_one_a = 'tor';

}elseif ($twenty_one_a == '76ers') {

    $twenty_one_a = 'phi';

}elseif($twenty_one_a == 'Mavericks') {

    $twenty_one_a = 'dal';

}elseif ($twenty_one_a == 'Bucks') {

    $twenty_one_a = 'mlw';

}elseif($twenty_one_a == 'Spurs') {

    $twenty_one_a = 'sa';

}elseif ($twenty_one_a == 'Heat') {

    $twenty_one_a = 'mia';

}elseif($twenty_one_a == 'Lakers') {

    $twenty_one_a = 'lak';

}elseif ($twenty_one_a == 'Nuggets') {

    $twenty_one_a = 'den';

}elseif($twenty_one_a == 'Nets') {

    $twenty_one_a = 'bkn';

}elseif ($twenty_one_a == 'Pistons') {

    $twenty_one_a = 'det';

}elseif($twenty_one_a == 'Hawks') {

    $twenty_one_a = 'atl';

}elseif ($twenty_one_a == 'Cavaliers') {

    $twenty_one_a = 'cle';

}elseif($twenty_one_a == 'Rockets') {

    $twenty_one_a = 'hou';

}elseif ($twenty_one_a == 'Jazz') {

    $twenty_one_a = 'uta';

}elseif($twenty_one_a == 'Celtics') {

    $twenty_one_a = 'bos';

}elseif ($twenty_one_a == 'Hornets') {

    $twenty_one_a = 'cha';

}elseif($twenty_one_a == 'Timberwolves') {

    $twenty_one_a = 'min';

}elseif ($twenty_one_a == 'Wizards') {

    $twenty_one_a = 'was';

}elseif($twenty_one_a == 'Magic') {

    $twenty_one_a = 'orl';

}elseif ($twenty_one_a == 'Pelicans') {

    $twenty_one_a = 'no';

}elseif($twenty_one_a == 'Thunder') {

    $twenty_one_a = 'okc';

}elseif($twenty_one_a == 'Bulls') {

    $twenty_one_a = 'chi';

}elseif ($twenty_one_a == 'Warriors') {

    $twenty_one_a = 'gs';

}elseif($twenty_one_a == 'Suns') {

    $twenty_one_a = 'pho';

}elseif ($twenty_one_a == 'Kings') {

    $twenty_one_a = 'sac';

}elseif($twenty_one_a == 'Pacers') {

    $twenty_one_a = 'ind';

}elseif($twenty_one_a == 'Knicks') {

    $twenty_one_a = 'ny';

}




if ($twenty_two_a == 'Clippers') {

    $twenty_two_a = 'lac';

}elseif($twenty_two_a == 'Grizzlies') {

    $twenty_two_a = 'mem';

}elseif ($twenty_two_a == 'Trail Blazers') {

    $twenty_two_a = 'por';

}elseif($twenty_two_a == 'Raptors') {

    $twenty_two_a = 'tor';

}elseif ($twenty_two_a == '76ers') {

    $twenty_two_a = 'phi';

}elseif($twenty_two_a == 'Mavericks') {

    $twenty_two_a = 'dal';

}elseif ($twenty_two_a == 'Bucks') {

    $twenty_two_a = 'mlw';

}elseif($twenty_two_a == 'Spurs') {

    $twenty_two_a = 'sa';

}elseif ($twenty_two_a == 'Heat') {

    $twenty_two_a = 'mia';

}elseif($twenty_two_a == 'Lakers') {

    $twenty_two_a = 'lak';

}elseif ($twenty_two_a == 'Nuggets') {

    $twenty_two_a = 'den';

}elseif($twenty_two_a == 'Nets') {

    $twenty_two_a = 'bkn';

}elseif ($twenty_two_a == 'Pistons') {

    $twenty_two_a = 'det';

}elseif($twenty_two_a == 'Hawks') {

    $twenty_two_a = 'atl';

}elseif ($twenty_two_a == 'Cavaliers') {

    $twenty_two_a = 'cle';

}elseif($twenty_two_a == 'Rockets') {

    $twenty_two_a = 'hou';

}elseif ($twenty_two_a == 'Jazz') {

    $twenty_two_a = 'uta';

}elseif($twenty_two_a == 'Celtics') {

    $twenty_two_a = 'bos';

}elseif ($twenty_two_a == 'Hornets') {

    $twenty_two_a = 'cha';

}elseif($twenty_two_a == 'Timberwolves') {

    $twenty_two_a = 'min';

}elseif ($twenty_two_a == 'Wizards') {

    $twenty_two_a = 'was';

}elseif($twenty_two_a == 'Magic') {

    $twenty_two_a = 'orl';

}elseif ($twenty_two_a == 'Pelicans') {

    $twenty_two_a = 'no';

}elseif($twenty_two_a == 'Thunder') {

    $twenty_two_a = 'okc';

}elseif($twenty_two_a == 'Bulls') {

    $twenty_two_a = 'chi';

}elseif ($twenty_two_a == 'Warriors') {

    $twenty_two_a = 'gs';

}elseif($twenty_two_a == 'Suns') {

    $twenty_two_a = 'pho';

}elseif ($twenty_two_a == 'Kings') {

    $twenty_two_a = 'sac';

}elseif($twenty_two_a == 'Pacers') {

    $twenty_two_a = 'ind';

}elseif($twenty_two_a == 'Knicks') {

    $twenty_two_a = 'ny';

}





if ($twenty_three_a == 'Clippers') {

    $twenty_three_a = 'lac';

}elseif($twenty_three_a == 'Grizzlies') {

    $twenty_three_a = 'mem';

}elseif ($twenty_three_a == 'Trail Blazers') {

    $twenty_three_a = 'por';

}elseif($twenty_three_a == 'Raptors') {

    $twenty_three_a = 'tor';

}elseif ($twenty_three_a == '76ers') {

    $twenty_three_a = 'phi';

}elseif($twenty_three_a == 'Mavericks') {

    $twenty_three_a = 'dal';

}elseif ($twenty_three_a == 'Bucks') {

    $twenty_three_a = 'mlw';

}elseif($twenty_three_a == 'Spurs') {

    $twenty_three_a = 'sa';

}elseif ($twenty_three_a == 'Heat') {

    $twenty_three_a = 'mia';

}elseif($twenty_three_a == 'Lakers') {

    $twenty_three_a = 'lak';

}elseif ($twenty_three_a == 'Nuggets') {

    $twenty_three_a = 'den';

}elseif($twenty_three_a == 'Nets') {

    $twenty_three_a = 'bkn';

}elseif ($twenty_three_a == 'Pistons') {

    $twenty_three_a = 'det';

}elseif($twenty_three_a == 'Hawks') {

    $twenty_three_a = 'atl';

}elseif ($twenty_three_a == 'Cavaliers') {

    $twenty_three_a = 'cle';

}elseif($twenty_three_a == 'Rockets') {

    $twenty_three_a = 'hou';

}elseif ($twenty_three_a == 'Jazz') {

    $twenty_three_a = 'uta';

}elseif($twenty_three_a == 'Celtics') {

    $twenty_three_a = 'bos';

}elseif ($twenty_three_a == 'Hornets') {

    $twenty_three_a = 'cha';

}elseif($twenty_three_a == 'Timberwolves') {

    $twenty_three_a = 'min';

}elseif ($twenty_three_a == 'Wizards') {

    $twenty_three_a = 'was';

}elseif($twenty_three_a == 'Magic') {

    $twenty_three_a = 'orl';

}elseif ($twenty_three_a == 'Pelicans') {

    $twenty_three_a = 'no';

}elseif($twenty_three_a == 'Thunder') {

    $twenty_three_a = 'okc';

}elseif($twenty_three_a == 'Bulls') {

    $twenty_three_a = 'chi';

}elseif ($twenty_three_a == 'Warriors') {

    $twenty_three_a = 'gs';

}elseif($twenty_three_a == 'Suns') {

    $twenty_three_a = 'pho';

}elseif ($twenty_three_a == 'Kings') {

    $twenty_three_a = 'sac';

}elseif($twenty_three_a == 'Pacers') {

    $twenty_three_a = 'ind';

}elseif($twenty_three_a == 'Knicks') {

    $twenty_three_a = 'ny';

}



if ($twenty_four_a == 'Clippers') {

    $twenty_four_a = 'lac';

}elseif($twenty_four_a == 'Grizzlies') {

    $twenty_four_a = 'mem';

}elseif ($twenty_four_a == 'Trail Blazers') {

    $twenty_four_a = 'por';

}elseif($twenty_four_a == 'Raptors') {

    $twenty_four_a = 'tor';

}elseif ($twenty_four_a == '76ers') {

    $twenty_four_a = 'phi';

}elseif($twenty_four_a == 'Mavericks') {

    $twenty_four_a = 'dal';

}elseif ($twenty_four_a == 'Bucks') {

    $twenty_four_a = 'mlw';

}elseif($twenty_four_a == 'Spurs') {

    $twenty_four_a = 'sa';

}elseif ($twenty_four_a == 'Heat') {

    $twenty_four_a = 'mia';

}elseif($twenty_four_a == 'Lakers') {

    $twenty_four_a = 'lak';

}elseif ($twenty_four_a == 'Nuggets') {

    $twenty_four_a = 'den';

}elseif($twenty_four_a == 'Nets') {

    $twenty_four_a = 'bkn';

}elseif ($twenty_four_a == 'Pistons') {

    $twenty_four_a = 'det';

}elseif($twenty_four_a == 'Hawks') {

    $twenty_four_a = 'atl';

}elseif ($twenty_four_a == 'Cavaliers') {

    $twenty_four_a = 'cle';

}elseif($twenty_four_a == 'Rockets') {

    $twenty_four_a = 'hou';

}elseif ($twenty_four_a == 'Jazz') {

    $twenty_four_a = 'uta';

}elseif($twenty_four_a == 'Celtics') {

    $twenty_four_a = 'bos';

}elseif ($twenty_four_a == 'Hornets') {

    $twenty_four_a = 'cha';

}elseif($twenty_four_a == 'Timberwolves') {

    $twenty_four_a = 'min';

}elseif ($twenty_four_a == 'Wizards') {

    $twenty_four_a = 'was';

}elseif($twenty_four_a == 'Magic') {

    $twenty_four_a = 'orl';

}elseif ($twenty_four_a == 'Pelicans') {

    $twenty_four_a = 'no';

}elseif($twenty_four_a == 'Thunder') {

    $twenty_four_a = 'okc';

}elseif($twenty_four_a == 'Bulls') {

    $twenty_four_a = 'chi';

}elseif ($twenty_four_a == 'Warriors') {

    $twenty_four_a = 'gs';

}elseif($twenty_four_a == 'Suns') {

    $twenty_four_a = 'pho';

}elseif ($twenty_four_a == 'Kings') {

    $twenty_four_a = 'sac';

}elseif($twenty_four_a == 'Pacers') {

    $twenty_four_a = 'ind';

}elseif($twenty_four_a == 'Knicks') {

    $twenty_four_a = 'ny';

}



if ($twenty_five_a == 'Clippers') {

    $twenty_five_a = 'lac';

}elseif($twenty_five_a == 'Grizzlies') {

    $twenty_five_a = 'mem';

}elseif ($twenty_five_a == 'Trail Blazers') {

    $twenty_five_a = 'por';

}elseif($twenty_five_a == 'Raptors') {

    $twenty_five_a = 'tor';

}elseif ($twenty_five_a == '76ers') {

    $twenty_five_a = 'phi';

}elseif($twenty_five_a == 'Mavericks') {

    $twenty_five_a = 'dal';

}elseif ($twenty_five_a == 'Bucks') {

    $twenty_five_a = 'mlw';

}elseif($twenty_five_a == 'Spurs') {

    $twenty_five_a = 'sa';

}elseif ($twenty_five_a == 'Heat') {

    $twenty_five_a = 'mia';

}elseif($twenty_five_a == 'Lakers') {

    $twenty_five_a = 'lak';

}elseif ($twenty_five_a == 'Nuggets') {

    $twenty_five_a = 'den';

}elseif($twenty_five_a == 'Nets') {

    $twenty_five_a = 'bkn';

}elseif ($twenty_five_a == 'Pistons') {

    $twenty_five_a = 'det';

}elseif($twenty_five_a == 'Hawks') {

    $twenty_five_a = 'atl';

}elseif ($twenty_five_a == 'Cavaliers') {

    $twenty_five_a = 'cle';

}elseif($twenty_five_a == 'Rockets') {

    $twenty_five_a = 'hou';

}elseif ($twenty_five_a == 'Jazz') {

    $twenty_five_a = 'uta';

}elseif($twenty_five_a == 'Celtics') {

    $twenty_five_a = 'bos';

}elseif ($twenty_five_a == 'Hornets') {

    $twenty_five_a = 'cha';

}elseif($twenty_five_a == 'Timberwolves') {

    $twenty_five_a = 'min';

}elseif ($twenty_five_a == 'Wizards') {

    $twenty_five_a = 'was';

}elseif($twenty_five_a == 'Magic') {

    $twenty_five_a = 'orl';

}elseif ($twenty_five_a == 'Pelicans') {

    $twenty_five_a = 'no';

}elseif($twenty_five_a == 'Thunder') {

    $twenty_five_a = 'okc';

}elseif($twenty_five_a == 'Bulls') {

    $twenty_five_a = 'chi';

}elseif ($twenty_five_a == 'Warriors') {

    $twenty_five_a = 'gs';

}elseif($twenty_five_a == 'Suns') {

    $twenty_five_a = 'pho';

}elseif ($twenty_five_a == 'Kings') {

    $twenty_five_a = 'sac';

}elseif($twenty_five_a == 'Pacers') {

    $twenty_five_a = 'ind';

}elseif($twenty_five_a == 'Knicks') {

    $twenty_five_a = 'ny';

}



// if ($twenty_six_a == 'Clippers') {

//     $twenty_six_a = 'lac';

// }elseif($twenty_six_a == 'Grizzlies') {

//     $twenty_six_a = 'mem';

// }elseif ($twenty_six_a == 'Trail Blazers') {

//     $twenty_six_a = 'por';

// }elseif($twenty_six_a == 'Raptors') {

//     $twenty_six_a = 'tor';

// }elseif ($twenty_six_a == '76ers') {

//     $twenty_six_a = 'phi';

// }elseif($twenty_six_a == 'Mavericks') {

//     $twenty_six_a = 'dal';

// }elseif ($twenty_six_a == 'Bucks') {

//     $twenty_six_a = 'mlw';

// }elseif($twenty_six_a == 'Spurs') {

//     $twenty_six_a = 'sa';

// }elseif ($twenty_six_a == 'Heat') {

//     $twenty_six_a = 'mia';

// }elseif($twenty_six_a == 'Lakers') {

//     $twenty_six_a = 'lak';

// }elseif ($twenty_six_a == 'Nuggets') {

//     $twenty_six_a = 'den';

// }elseif($twenty_six_a == 'Nets') {

//     $twenty_six_a = 'bkn';

// }elseif ($twenty_six_a == 'Pistons') {

//     $twenty_six_a = 'det';

// }elseif($twenty_six_a == 'Hawks') {

//     $twenty_six_a = 'atl';

// }elseif ($twenty_six_a == 'Cavaliers') {

//     $twenty_six_a = 'cle';

// }elseif($twenty_six_a == 'Rockets') {

//     $twenty_six_a = 'hou';

// }elseif ($twenty_six_a == 'Jazz') {

//     $twenty_six_a = 'uta';

// }elseif($twenty_six_a == 'Celtics') {

//     $twenty_six_a = 'bos';

// }elseif ($twenty_six_a == 'Hornets') {

//     $twenty_six_a = 'cha';

// }elseif($twenty_six_a == 'Timberwolves') {

//     $twenty_six_a = 'min';

// }elseif ($twenty_six_a == 'Wizards') {

//     $twenty_six_a = 'was';

// }elseif($twenty_six_a == 'Magic') {

//     $twenty_six_a = 'orl';

// }elseif ($twenty_six_a == 'Pelicans') {

//     $twenty_six_a = 'no';

// }elseif($twenty_six_a == 'Thunder') {

//     $twenty_six_a = 'okc';

// }elseif($twenty_six_a == 'Bulls') {

//     $twenty_six_a = 'chi';

// }elseif ($twenty_six_a == 'Warriors') {

//     $twenty_six_a = 'gs';

// }elseif($twenty_six_a == 'Suns') {

//     $twenty_six_a = 'pho';

// }elseif ($twenty_six_a == 'Kings') {

//     $twenty_six_a = 'sac';

// }elseif($twenty_six_a == 'Pacers') {

//     $twenty_six_a = 'ind';

// }elseif($twenty_six_a == 'Knicks') {

//     $twenty_six_a = 'ny';

// }



// if ($twenty_seven_a == 'Clippers') {

//     $twenty_seven_a = 'lac';

// }elseif($twenty_seven_a == 'Grizzlies') {

//     $twenty_seven_a = 'mem';

// }elseif ($twenty_seven_a == 'Trail Blazers') {

//     $twenty_seven_a = 'por';

// }elseif($twenty_seven_a == 'Raptors') {

//     $twenty_seven_a = 'tor';

// }elseif ($twenty_seven_a == '76ers') {

//     $twenty_seven_a = 'phi';

// }elseif($twenty_seven_a == 'Mavericks') {

//     $twenty_seven_a = 'dal';

// }elseif ($twenty_seven_a == 'Bucks') {

//     $twenty_seven_a = 'mlw';

// }elseif($twenty_seven_a == 'Spurs') {

//     $twenty_seven_a = 'sa';

// }elseif ($twenty_seven_a == 'Heat') {

//     $twenty_seven_a = 'mia';

// }elseif($twenty_seven_a == 'Lakers') {

//     $twenty_seven_a = 'lak';

// }elseif ($twenty_seven_a == 'Nuggets') {

//     $twenty_seven_a = 'den';

// }elseif($twenty_seven_a == 'Nets') {

//     $twenty_seven_a = 'bkn';

// }elseif ($twenty_seven_a == 'Pistons') {

//     $twenty_seven_a = 'det';

// }elseif($twenty_seven_a == 'Hawks') {

//     $twenty_seven_a = 'atl';

// }elseif ($twenty_seven_a == 'Cavaliers') {

//     $twenty_seven_a = 'cle';

// }elseif($twenty_seven_a == 'Rockets') {

//     $twenty_seven_a = 'hou';

// }elseif ($twenty_seven_a == 'Jazz') {

//     $twenty_seven_a = 'uta';

// }elseif($twenty_seven_a == 'Celtics') {

//     $twenty_seven_a = 'bos';

// }elseif ($twenty_seven_a == 'Hornets') {

//     $twenty_seven_a = 'cha';

// }elseif($twenty_seven_a == 'Timberwolves') {

//     $twenty_seven_a = 'min';

// }elseif ($twenty_seven_a == 'Wizards') {

//     $twenty_seven_a = 'was';

// }elseif($twenty_seven_a == 'Magic') {

//     $twenty_seven_a = 'orl';

// }elseif ($twenty_seven_a == 'Pelicans') {

//     $twenty_seven_a = 'no';

// }elseif($twenty_seven_a == 'Thunder') {

//     $twenty_seven_a = 'okc';

// }elseif($twenty_seven_a == 'Bulls') {

//     $twenty_seven_a = 'chi';

// }elseif ($twenty_seven_a == 'Warriors') {

//     $twenty_seven_a = 'gs';

// }elseif($twenty_seven_a == 'Suns') {

//     $twenty_seven_a = 'pho';

// }elseif ($twenty_seven_a == 'Kings') {

//     $twenty_seven_a = 'sac';

// }elseif($twenty_seven_a == 'Pacers') {

//     $twenty_seven_a = 'ind';

// }elseif($twenty_seven_a == 'Knicks') {

//     $twenty_seven_a = 'ny';

// }



// if ($twenty_eight_a == 'Clippers') {

//     $twenty_eight_a = 'lac';

// }elseif($twenty_eight_a == 'Grizzlies') {

//     $twenty_eight_a = 'mem';

// }elseif ($twenty_eight_a == 'Trail Blazers') {

//     $twenty_eight_a = 'por';

// }elseif($twenty_eight_a == 'Raptors') {

//     $twenty_eight_a = 'tor';

// }elseif ($twenty_eight_a == '76ers') {

//     $twenty_eight_a = 'phi';

// }elseif($twenty_eight_a == 'Mavericks') {

//     $twenty_eight_a = 'dal';

// }elseif ($twenty_eight_a == 'Bucks') {

//     $twenty_eight_a = 'mlw';

// }elseif($twenty_eight_a == 'Spurs') {

//     $twenty_eight_a = 'sa';

// }elseif ($twenty_eight_a == 'Heat') {

//     $twenty_eight_a = 'mia';

// }elseif($twenty_eight_a == 'Lakers') {

//     $twenty_eight_a = 'lak';

// }elseif ($twenty_eight_a == 'Nuggets') {

//     $twenty_eight_a = 'den';

// }elseif($twenty_eight_a == 'Nets') {

//     $twenty_eight_a = 'bkn';

// }elseif ($twenty_eight_a == 'Pistons') {

//     $twenty_eight_a = 'det';

// }elseif($twenty_eight_a == 'Hawks') {

//     $twenty_eight_a = 'atl';

// }elseif ($twenty_eight_a == 'Cavaliers') {

//     $twenty_eight_a = 'cle';

// }elseif($twenty_eight_a == 'Rockets') {

//     $twenty_eight_a = 'hou';

// }elseif ($twenty_eight_a == 'Jazz') {

//     $twenty_eight_a = 'uta';

// }elseif($twenty_eight_a == 'Celtics') {

//     $twenty_eight_a = 'bos';

// }elseif ($twenty_eight_a == 'Hornets') {

//     $twenty_eight_a = 'cha';

// }elseif($twenty_eight_a == 'Timberwolves') {

//     $twenty_eight_a = 'min';

// }elseif ($twenty_eight_a == 'Wizards') {

//     $twenty_eight_a = 'was';

// }elseif($twenty_eight_a == 'Magic') {

//     $twenty_eight_a = 'orl';

// }elseif ($twenty_eight_a == 'Pelicans') {

//     $twenty_eight_a = 'no';

// }elseif($twenty_eight_a == 'Thunder') {

//     $twenty_eight_a = 'okc';

// }elseif($twenty_eight_a == 'Bulls') {

//     $twenty_eight_a = 'chi';

// }elseif ($twenty_eight_a == 'Warriors') {

//     $twenty_eight_a = 'gs';

// }elseif($twenty_eight_a == 'Suns') {

//     $twenty_eight_a = 'pho';

// }elseif ($twenty_eight_a == 'Kings') {

//     $twenty_eight_a = 'sac';

// }elseif($twenty_eight_a == 'Pacers') {

//     $twenty_eight_a = 'ind';

// }elseif($twenty_eight_a == 'Knicks') {

//     $twenty_eight_a = 'ny';

// }



// if ($twenty_nine_a == 'Clippers') {

//     $twenty_nine_a = 'lac';

// }elseif($twenty_nine_a == 'Grizzlies') {

//     $twenty_nine_a = 'mem';

// }elseif ($twenty_nine_a == 'Trail Blazers') {

//     $twenty_nine_a = 'por';

// }elseif($twenty_nine_a == 'Raptors') {

//     $twenty_nine_a = 'tor';

// }elseif ($twenty_nine_a == '76ers') {

//     $twenty_nine_a = 'phi';

// }elseif($twenty_nine_a == 'Mavericks') {

//     $twenty_nine_a = 'dal';

// }elseif ($twenty_nine_a == 'Bucks') {

//     $twenty_nine_a = 'mlw';

// }elseif($twenty_nine_a == 'Spurs') {

//     $twenty_nine_a = 'sa';

// }elseif ($twenty_nine_a == 'Heat') {

//     $twenty_nine_a = 'mia';

// }elseif($twenty_nine_a == 'Lakers') {

//     $twenty_nine_a = 'lak';

// }elseif ($twenty_nine_a == 'Nuggets') {

//     $twenty_nine_a = 'den';

// }elseif($twenty_nine_a == 'Nets') {

//     $twenty_nine_a = 'bkn';

// }elseif ($twenty_nine_a == 'Pistons') {

//     $twenty_nine_a = 'det';

// }elseif($twenty_nine_a == 'Hawks') {

//     $twenty_nine_a = 'atl';

// }elseif ($twenty_nine_a == 'Cavaliers') {

//     $twenty_nine_a = 'cle';

// }elseif($twenty_nine_a == 'Rockets') {

//     $twenty_nine_a = 'hou';

// }elseif ($twenty_nine_a == 'Jazz') {

//     $twenty_nine_a = 'uta';

// }elseif($twenty_nine_a == 'Celtics') {

//     $twenty_nine_a = 'bos';

// }elseif ($twenty_nine_a == 'Hornets') {

//     $twenty_nine_a = 'cha';

// }elseif($twenty_nine_a == 'Timberwolves') {

//     $twenty_nine_a = 'min';

// }elseif ($twenty_nine_a == 'Wizards') {

//     $twenty_nine_a = 'was';

// }elseif($twenty_nine_a == 'Magic') {

//     $twenty_nine_a = 'orl';

// }elseif ($twenty_nine_a == 'Pelicans') {

//     $twenty_nine_a = 'no';

// }elseif($twenty_nine_a == 'Thunder') {

//     $twenty_nine_a = 'okc';

// }elseif($twenty_nine_a == 'Bulls') {

//     $twenty_nine_a = 'chi';

// }elseif ($twenty_nine_a == 'Warriors') {

//     $twenty_nine_a = 'gs';

// }elseif($twenty_nine_a == 'Suns') {

//     $twenty_nine_a = 'pho';

// }elseif ($twenty_nine_a == 'Kings') {

//     $twenty_nine_a = 'sac';

// }elseif($twenty_nine_a == 'Pacers') {

//     $twenty_nine_a = 'ind';

// }elseif($twenty_nine_a == 'Knicks') {

//     $twenty_nine_a = 'ny';

// }





?> 



  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Manton Horton</p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>NFL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/nfl_depthchart'); ?>"><i class="fa fa-circle-o"></i>Depth Chart</a></li>
            <li><a href="<?php echo site_url('sports/nfl_injuries'); ?>"><i class="fa fa-circle-o"></i>Injuries</a></li>
            <li><a href="<?php echo site_url('sports/nfl_standings'); ?>"><i class="fa fa-circle-o"></i>Standings</a></li>
            <li><a href="<?php echo site_url('sports/nfl_weekly_schedule'); ?>"><i class="fa fa-circle-o"></i>Weekly Schedule</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>NBA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/nba_daily_schedule'); ?>"><i class="fa fa-circle-o"></i>Daily Schedule</a></li>
            <li><a href="<?php echo site_url('sports/nba_daily_transfers'); ?>"><i class="fa fa-circle-o"></i>Daily Transfers</a></li>
            <li class="active"><a href="<?php echo site_url('sports/nba_injuries'); ?>"><i class="fa fa-circle-o"></i>Injuries</a></li>
            <li><a href="<?php echo site_url('sports/nba_league_leaders'); ?>"><i class="fa fa-circle-o"></i>League Leaders</a></li>
            <li><a href="<?php echo site_url('sports/nba_standings'); ?>"><i class="fa fa-circle-o"></i>Standings</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>NCAAFB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/ncaafb_associated_press'); ?>"><i class="fa fa-circle-o"></i>Associated Press Top 25</a></li>
            <li><a href="<?php echo site_url('sports/ncaafb_amway_coaches_poll'); ?>"><i class="fa fa-circle-o"></i>Amway Coaches Poll</a></li>
            <li><a href="<?php echo site_url('sports/ncaafb_college_playoff_rankings'); ?>"><i class="fa fa-circle-o"></i>College Playoff Rankings</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> 
            <span>NCAAMBB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/ncaambb_associated_press'); ?>"><i class="fa fa-circle-o"></i>Associated Press Top 25</a></li>
            <li><a href="<?php echo site_url('sports/ncaambb_coaches_poll'); ?>"><i class="fa fa-circle-o"></i>Coaches poll</a></li>
          </ul>
        </li>
        
        <!-- <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>NBA - Injuries
        <small></small>
      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo site_url('admin/user/profile');?>"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="#">NBA</a></li>

        <li class="active">Injuries</li>

      </ol>

    </section>

        

        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$zero_a.".png alt='".$zero_m."' style='width:90px;height:75px;'> ";?><?php echo $zero_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($zero_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player Name</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>


            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$one_a.".png alt='".$one_m."' style='width:90px;height:75px;'> ";?><?php echo $one_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($one_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    

            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$two_a.".png alt='".$two_m."' style='width:90px;height:75px;'> ";?><?php echo $two_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($two_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$three_a.".png alt='".$three_a."' style='width:90px;height:75px;'> ";?><?php echo $three_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($three_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$four_a.".png alt='".$four_a."' style='width:90px;height:75px;'> ";?><?php echo $four_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($four_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$five_a.".png alt='".$five_a."' style='width:90px;height:75px;'> ";?><?php echo $five_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($five_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>


            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$six_a.".png alt='".$six_a."' style='width:90px;height:75px;'> ";?><?php echo $six_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($six_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$seven_a.".png alt='".$seven_a."' style='width:90px;height:75px;'> ";?><?php echo $seven_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($seven_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    

            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$eight_a.".png alt='".$eight_a."' style='width:90px;height:75px;'> ";?><?php echo $eight_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($eight_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$nine_a.".png alt='".$nine_a."' style='width:90px;height:75px;'> ";?><?php echo $nine_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($nine_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$ten_a.".png alt='".$ten_a."' style='width:90px;height:75px;'> ";?><?php echo $ten_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($ten_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$eleven_a.".png alt='".$eleven_a."' style='width:90px;height:75px;'> ";?><?php echo $eleven_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($eleven_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twelve_a.".png alt='".$twelve_a."' style='width:90px;height:75px;'> ";?><?php echo $twelve_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twelve_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>


            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$thirteen_a.".png alt='".$thirteen_a."' style='width:90px;height:75px;'> ";?><?php echo $thirteen_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($thirteen_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$fourteen_a.".png alt='".$fourteen_a."' style='width:90px;height:75px;'> ";?><?php echo $fourteen_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($fourteen_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$fifteen_a.".png alt='".$fifteen_a."' style='width:90px;height:75px;'> ";?><?php echo $fifteen_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($fifteen_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$sixteen_a.".png alt='".$sixteen_a."' style='width:90px;height:75px;'> ";?><?php echo $sixteen_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($sixteen_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$seventeen_a.".png alt='".$seventeen_a."' style='width:90px;height:75px;'> ";?><?php echo $seventeen_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($seventeen_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$eighteen_a.".png alt='".$eighteen_a."' style='width:90px;height:75px;'> ";?><?php echo $eighteen_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($eighteen_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$nineteen_a.".png alt='".$nineteen_a."' style='width:90px;height:75px;'> ";?><?php echo $nineteen_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($nineteen_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twenty_a.".png alt='".$twenty_a."' style='width:90px;height:75px;'> ";?><?php echo $twenty_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twenty_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twenty_one_a.".png alt='".$twenty_one_a."' style='width:90px;height:75px;'> ";?><?php echo $twenty_one_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twenty_one_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twenty_two_a.".png alt='".$twenty_two_a."' style='width:90px;height:75px;'> ";?><?php echo $twenty_two_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twenty_two_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    

            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twenty_three_a.".png alt='".$twenty_three_a."' style='width:90px;height:75px;'> ";?><?php echo $twenty_three_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twenty_three_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twenty_four_a.".png alt='".$twenty_four_a."' style='width:90px;height:75px;'> ";?><?php echo $twenty_four_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twenty_four_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twenty_five_a.".png alt='".$twenty_five_a."' style='width:90px;height:75px;'> ";?><?php echo $twenty_five_m; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twenty_five_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

     

            <!-- <h4><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twenty_six_a.".png alt='".$twenty_six_a."' style='width:90px;height:75px;'> ";?><?php echo $twenty_six_m; ?></h4>

            <div class="col-md-12">
              <div class="box"> -->
                <!-- <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $afc_east; ?></h3>
                </div> -->
                <!-- /.box-header -->
                <!-- <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twenty_six_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div> 
 -->
     

           <!--  <h4><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twenty_seven_a.".png alt='".$twenty_seven_a."' style='width:90px;height:75px;'> ";?><?php echo $twenty_seven_m; ?></h4>

            <div class="col-md-12">
              <div class="box"> -->
                <!-- <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $afc_east; ?></h3>
                </div> -->
                <!-- /.box-header -->
                <!-- <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twenty_seven_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div> --> 

    <!-- 

            <h4><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twenty_eight_a.".png alt='".$twenty_eight_a."' style='width:90px;height:75px;'> ";?><?php echo $twenty_eight_m; ?></h4>

            <div class="col-md-12">
              <div class="box">
                <!-- <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $afc_east; ?></h3>
                </div> -->
                <!-- /.box-header -->
                <!-- <div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twenty_eight_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>  -->

  <!--   

            <h4><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$twenty_nine_a.".png alt='".$twenty_nine_a."' style='width:90px;height:75px;'> ";?><?php echo $twenty_nine_m; ?></h4>

            <div class="col-md-12">
              <div class="box">
                <!-- <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $afc_east; ?></h3>
                </div> -->
                <!-- /.box-header -->
                <!-- div class="box-body">
                  <table class="table table-bordered table-striped">
            <?php
            foreach ($twenty_nine_p as $post) {
            ?>
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Jersey#</th>
                        <th>Position</th>
                        <th>Injury Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->jersey_number; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->injuries[0]->comment; ?><br/><?php echo $post->injuries[0]->desc; ?><br/></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>  -->

 </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2017 <a href="#">Fantasy Application</a>.</strong> All rights
        reserved.
      </footer>