var counter = 1;
var counter_auto=1;
var images = document.getElementsByClassName('slide')

 $(document).ready(
   function(){
     var i=0;
     for (let image of images){
       i++;
       $(".slide.first").before('<input type="radio" name="radio-btn" id="radio'+i+'" value="'+i+'">');
       $(".slider-nav").append('<label for="radio'+i+'" class="slider-nav-btn'+i+'"></label>');
       $('<style>#radio'+i+':checked ~ .first{margin-left:'+(i-1)*(-10)+'%;</style>}').appendTo("head");
       $('<style>#radio'+i+':checked ~ .slider-nav .slider-nav-btn'+i+'{background:#ffffff;</style>}').appendTo("head");

     }
   }
 )
setInterval(function () {
    console.log(counter);
    if(counter_auto==counter){
      counter++;
      counter_auto++;
    }else{
      counter_auto=counter;
    }
    if (counter_auto > images.length) {
        counter = 1;
        counter_auto = 1;
    }
    document.getElementById('radio' + counter).checked = true;
}, 5000);

function prev(){
    counter--;
    if (counter == 0) {
        counter = images.length;
    }
    document.getElementById('radio' + counter).checked = true;
}
function next(){
    counter++;
    if (counter > images.length) {
        counter = 1;
    }
    document.getElementById('radio' + counter).checked = true;
}
function logout(){
  console.log("log Out");
}