<?php

class Ago{



    public function convertToUnixTimestamp($value){

        list($date,$time) = explode(' ', $value);
        list($year,$month,$day) = explode('-',$date);
        list($hour,$minutes,$seconds) = explode(':',$time);
       // echo $hour ."<br>".$minutes."<br>".$seconds;
       $unit_timestamp= mktime($hour,$minutes,$seconds,$month,$day,$year);
       return $unit_timestamp;
    }


    function convertToAgoFormat($timestamp){
        $diffBtwCurrentTimeAndTimestamp = time() - $timestamp;
        $peroidsString = ["sec","min","hr","day","week","month","year","decade"];
        $peroidsNumber = ["60","60","24","7","4.35","12","10"];
        for($iterator = 0; $diffBtwCurrentTimeAndTimestamp >= $peroidsNumber[$iterator];$iterator++)
        $diffBtwCurrentTimeAndTimestamp /= $peroidsNumber[$iterator];
        $diffBtwCurrentTimeAndTimestamp = round($diffBtwCurrentTimeAndTimestamp);
        if($diffBtwCurrentTimeAndTimestamp !=1)$peroidsString[$iterator].="s";
        $output = "$diffBtwCurrentTimeAndTimestamp $peroidsString[$iterator]";
        
        return "Posted ".$output." ago";
        }


}