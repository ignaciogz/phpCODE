<?php
//The function only uses unix time stamp like the result of time();
  //http://www.php.net/manual/en/function.time.php
  function ago($time)
  {
     $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
     $lengths = array("60","60","24","7","4.35","12","10");

     $now = time();

         $difference     = $now - $time;
         $tense         = "ago";

     for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
         $difference /= $lengths[$j];
     }

     $difference = round($difference);

     if($difference != 1) {
         $periods[$j].= "s";
     }

     return "$difference $periods[$j] 'ago' ";
  }
?>


<?php
  function _ago($tm,$rcs = 0)
  {
     $cur_tm = time(); $dif = $cur_tm-$tm;
     $pds = array('second','minute','hour','day','week','month','year','decade');
     $lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);
     for($v = sizeof($lngh)-1; ($v >= 0)&&(($no = $dif/$lngh[$v])<=1); $v--); if($v < 0) $v = 0; $_tm = $cur_tm-($dif%$lngh[$v]);

     $no = floor($no); if($no <> 1) $pds[$v] .='s'; $x=sprintf("%d %s ",$no,$pds[$v]);
     if(($rcs == 1)&&($v >= 1)&&(($cur_tm-$_tm) > 0)) $x .= time_ago($_tm);
     return $x;
  }
?>