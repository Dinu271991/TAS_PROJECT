function countDown() {
      sec--;
  if (sec == -01) {
    sec = 59;
    min = min - 1;
    if(min==-01)
        {
            min=59;
            hour=hour-1;
        }else
            {
                hour=hour;
            }
  } else {
   min = min;
  }
if (sec<=9) { sec = "0" + sec; }

  time = (hour<=9 ? "0" + hour : hour) + " : " + (min<=9 ? "0" + min : min) + " : " + sec + "";
if (document.getElementById) { document.getElementById('timer').innerHTML = time; }
  SD=window.setTimeout("countDown();", 1000);
if (hour=='00'&& min == '00' && sec == '00') { sec = "00";min="00"; window.clearTimeout(SD); window.location=document.forms[0].action+"?fs=yes";}
}

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
  countDown();
<?php
if (!isset($_REQUEST['sumbit']) && isset($_SESSION['starttest'])) {
    $elapsed = (time() - $_SESSION['starttime']);

    if (($elapsed / 60) < 2) {
        echo "var hour=1;";
        if ($elapsed == 0)
            $elapsed = 1;
        echo "min=" . (int) (2 - ($elapsed / 60)) . ";";
        if ($elapsed > 60)
            echo "sec=" . (60 - ($elapsed - 60)) . ";";
        else
            echo "sec=" . (60 - $elapsed) . ";";
    }
    else {
        echo "var hour=0;var min=0;sec=01;";
        unset($_SESSION['starttime']);
    }
}
?>