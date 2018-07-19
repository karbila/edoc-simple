<?php 
	/*
	1 kilobyte = 1024 bytes
	1 megabyte = 1024 kilobytes = 1,048,576 bytes
	1 gigabyte = 1024 megabytes = 1,048,576 kilobytes = 1,073,741,824 bytes
	1 terabyte = 1024 gigabytes = 1,048,576 megabytes = 1,073,741,824 kilobytes = 1,099,511,627,776 bytes
	*/
	function bytesToSize($bytes, $precision = 2){  
    $kilobyte = 1024;
    $megabyte = $kilobyte * 1024;
    $gigabyte = $megabyte * 1024;
    $terabyte = $gigabyte * 1024;
   
    if (($bytes >= 0) && ($bytes < $kilobyte)) {
        return $bytes . ' B';
 
    } elseif (($bytes >= $kilobyte) && ($bytes < $megabyte)) {
        return round($bytes / $kilobyte, $precision) . ' KB';
 
    } elseif (($bytes >= $megabyte) && ($bytes < $gigabyte)) {
        return round($bytes / $megabyte, $precision) . ' MB';
 
    } elseif (($bytes >= $gigabyte) && ($bytes < $terabyte)) {
        return round($bytes / $gigabyte, $precision) . ' GB';
 
    } elseif ($bytes >= $terabyte) {
        return round($bytes / $terabyte, $precision) . ' TB';
    } else {
        return $bytes . ' B';
    }
}
?>