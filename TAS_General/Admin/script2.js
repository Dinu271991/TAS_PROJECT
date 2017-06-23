/*
Author: Pradeep Khodke
*/


$(document).ready(function(){
  $('#submit_button').click(function() {
    if (!$("input[name='ans1']:checked").val()) {
       alert('Nothing is checked!');
        return false;
    }
    else {
      alert('One of the radio buttons is checked!');
    }
  });
});



