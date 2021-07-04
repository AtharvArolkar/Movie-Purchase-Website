var dict = {};
var ordercount = 0;
var movielist = [];
function ajaxFunction(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    //   queryString +=  "&name=" + name;
    xmlhttp.open("GET", "search.php?q=" + str, true);
    xmlhttp.send();
  }
}
$(document).ready(function () {
  $(".sidenavbar").hide();
  $("#threelines").click(function () {
    $(".sidenavbar").slideToggle((duration = 200));
  });
});
$(document).ready(function () {
  $(".cart").hide();
  $("#cart-button").click(function () {
    $(".cart").slideToggle();
  });
});
$(document).ready(function () {
  $(document).on("click", "#add", function () {
    var countspan = $(this).prev();
    var count = parseInt(countspan.text());
    var price_span = $(this).parents(".calculate").find(".movieprice");
    var price = parseInt(price_span.text()) / count;
    count += 1;
    countspan.text(count);
    price_span.text(price * count).trigger("change");

    var pricearr = [];
    $(".movieprice").each(function () {
      pricearr.push(parseInt($(this).text()));
    });
    $(".total-price-value").text(
      pricearr.reduce(function (a, b) {
        return a + b;
      }, 0)
    );
  });
  $(document).on("click", "#sub", function () {
    var countspan = $(this).next();
    var count = parseInt(countspan.text());
    var price_span = $(this).parents(".calculate").find(".movieprice");
    console.log("price-span", price_span);
    var price = parseInt(price_span.text()) / count;
    console.log("price", price);
    count -= 1;
    countspan.text(count);
    console.log("countspan", countspan.text(count));
    $(this).next().text(count);
    price_span.text(price * count).trigger("change");
    if (count == 0) {
      $(this).parents(".movie").hide(100);
      $(this).parents(".movie").remove();
    }

    var pricearr = [];
    $(".movieprice").each(function () {
      pricearr.push(parseInt($(this).text()));
    });
    $(".total-price-value").text(
      pricearr.reduce(function (a, b) {
        return a + b;
      }, 0)
    );
  });
});

function submitorder(username) {
  if (!username) {
    window.alert("PLZ LOGIN TO YOUR ACCOUNT FIRST");
  } else {
    var time = + new Date();
    if (ordercount > 0) {
      var orders = [];
      $(".movie").each(function () {
        var order = {
          'username': username,
          'price': $(this).find(".movieprice").text(),
          'moviename': $(this).find(".moviename").text(),
          'ticketcount': $(this).find("#count").text(),
          'time': time,
        };
        orders.push(order);
      });
      console.log(orders);
      var url = "http://localhost:8080/bookmymovie/save_cart.jsp";
      var success = true;
      orders.forEach(function (order, index) {
        console.log(order);
        $.post(url, order).done(function(response){
          alert("OK");
          ordercount = 0;
          $("#cart-item-total").html(0);
          $(".movie").remove();
          count = 0;
          $(".total-price-value").html(0);
          movielist = [];
          ordercount = 0;
       });
      });
    }
  }
}

function addmov(movie_name, price) {
  var div1 = document.createElement("div");
  div1.className += "movie"; //div1
  var div2 = document.createElement("div");
  div2.className += "moviename";
  div1.append(div2); //div2
  var p1 = document.createElement("p");
  p1.innerHTML = movie_name;
  div2.append(p1);
  var div3 = document.createElement("div");
  div3.className += "calculate";
  div1.append(div3); //div3
  var div4 = document.createElement("div");
  div4.setAttribute("id", "numbercal");
  div3.append(div4); //div4
  var but1 = document.createElement("button");
  but1.setAttribute("id", "sub"); //but1
  but1.innerHTML = "-";
  div4.append(but1);
  var span1 = document.createElement("SPAN");
  span1.id = "count";
  span1.innerHTML = "1";
  div4.append(span1);
  var but2 = document.createElement("button");
  but2.setAttribute("id", "add"); //but2
  but2.innerHTML = "+";
  div4.append(but2);
  div5 = document.createElement("div");
  div5.id = "movietot";
  div3.append(div5); //div5
  var span2 = document.createElement("SPAN");
  span2.innerHTML = "Rs."; //span2
  div5.append(span2);
  var span3 = document.createElement("span");
  span3.className += "movieprice"; //span3
  span3.innerHTML = price;
  div5.append(span3);

  if (movielist.includes(movie_name)) {
    //                 dict[movie_name]+=1;
    // var gettt="."+movie_name.substring(0, 2)+"id #count";
    // console.log(gettt);
    // $(gettt).innerHTML=dict[movie_name];
    // add();
    window.alert("Item Already Added to Cart");
  } else {
    ordercount++;
    $(".cart-list").append(div1);

    movielist.push(movie_name);
    dict[movie_name] = 1;
    var pricearr = [];
    $(".movieprice").each(function () {
      pricearr.push(parseInt($(this).text()));
    });
    $(".total-price-value").text(
      pricearr.reduce(function (a, b) {
        return a + b;
      }, 0)
    );
    $("#cart-item-total").html(ordercount);
  }
  console.log(dict);
}
