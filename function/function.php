<?php 

    function getTimeAgo($param){
        date_default_timezone_set("Asia/Jakarta");
        $time_ago = strtotime($param);
        $current_time = time();
        $time_difference = $current_time - $time_ago;
        $seconds  = $time_difference;
													
            $minutes = round($seconds / 60); // value 60 is seconds  
            $hours   = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec  
            $days    = round($seconds / 86400); //86400 = 24 * 60 * 60;  
            $weeks   = round($seconds / 604800); // 7*24*60*60;  
            $months  = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60  
            $years   = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60

            if ($seconds <= 60){

                        echo "Baru saja";

            }elseif ($minutes <= 60){

                if ($minutes == 1){

                                    echo " 1 menit yang lalu";
                }else{

                    echo "$minutes menit yang lalu";
                }

            }elseif ($hours <= 24){
                    if ($hours == 1){
                        echo "1 jam yang lalu";
                    } else {
                        echo "$hours jam yang lalu";
                    }

            }elseif($days <= 7){

                if ($days == 1){
                        echo "kemarin";
            }else{
            echo "$days hari yang lalu";
            }
        }												 
    }