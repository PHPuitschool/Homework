<?php
echo "<h1>";
echo "Мой день рождения ". date("M-d-Y", mktime(0, 0, 0, 10, 5, 1981))."<br>";


$data = new DateTime('1981-05-10');

echo "Мой день рождения ". $data->format('Y-m-d D')."<br>" ;
echo "Мой день рождения ". $data->format('d-F-Y') ;
