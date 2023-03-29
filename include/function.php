<?php
    function get_sensor () {
        global $conn;
        $sql = "SELECT * FROM sensor";
        $result = mysqli_query($conn, $sql);

        $sensor = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $sensor;
    }

    function clock($time) {
	$timep= date("j M Y  H:i", $time);
	$time_p[0]=date("j n Y", $time);
	$time_p[1]=date("H:i", $time);
	if ($time_p[0]==date("j n Y", time()))$timep='Today in '.$time_p['1'];
	if ($time_p[0]==date("j n Y", time()-86400))$timep='Yesterday in '.$time_p['1'];
	$months_eng = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
	$months_rus = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
	$timep = str_replace($months_eng,$months_rus,$timep);
	return $timep;
}
function datediff($date1, $date2)
{
	$diff = $date2 - $date1;
	$d=floor($diff/3600/24);
	$h=floor($diff/3600)%24;
	$m=floor(($diff%3600)/60);
	$s=($diff%3600)%60;

	if($d>0) {
		return $d.' д. '.$h.' ч. '.$m.' мин.';
	} elseif ($h>0) {
		return $h.' ч. '.$m.' мин.';
	} else
		return $m.' мин. '.$s.' сек.';
	
	
}
?>