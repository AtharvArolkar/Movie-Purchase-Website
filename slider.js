var counter = 1;
    setInterval(function () {
        counter++;
        if (counter > 4) {
            counter = 1;
        }
        document.getElementById('radio' + counter).checked = true;
        
    }, 5000);

    function prev(){
        counter--;
        if (counter == 0) {
            counter = 4;
        }
        console.log(+counter)
        document.getElementById('radio' + counter).checked = true;
    }
    function next(){
        counter++;
        if (counter == 5) {
            counter = 1;
        }
        console.log(+counter)
        document.getElementById('radio' + counter).checked = true;
    }