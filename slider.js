var counter = 1;
var counter_auto=1;

    setInterval(function () {
        if(counter_auto==counter){
          counter++;
          counter_auto++;
        }else{
          counter_auto=counter;
        }
        if (counter_auto > 4) {
            counter = 1;
            counter_auto=1;
        }
        document.getElementById('radio' + counter).checked = true;

    }, 5000);

    function prev(){
        counter--;
        if (counter == 0) {
            counter = 4;
        }
        document.getElementById('radio' + counter).checked = true;
    }
    function next(){
        counter++;
        if (counter == 5) {
            counter = 1;
        }
        document.getElementById('radio' + counter).checked = true;
    }
