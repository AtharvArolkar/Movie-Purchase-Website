$(document).ready(
    function(){
        $(".movie #add").click(
            function(){
                var countspan=$(this).prev();
                var count=parseInt(countspan.text());
                var price_span=$(this).parents('.calculate').find(".movieprice");
                var price=parseInt(price_span.text())/count;
                count+=1;
                countspan.text(count);
                price_span.text(price*count).trigger('change');
            }
        )
        $(".movie #sub").click(
            function(){
                var countspan=$(this).next();
                var count=parseInt(countspan.text());
                var price_span=$(this).parents('.calculate').find(".movieprice");
                var price=parseInt(price_span.text())/count;
                count-=1;
                countspan.text(count);
                $(this).next().text(count);
                price_span.text(price*count).trigger('change');
                if(count==0){
                    $(this).parents('.movie').hide(100);
                }
            }
        )
        $(".movieprice").on('change',
            function(){
                var pricearr = [];
                $('.movieprice').each(function(){
                  pricearr.push(parseInt($(this).text()));
                })
                $('.total-price-value').text(pricearr.reduce(
                    function(a,b){
                        return a+b;
                    },0
                ));
            }
        )
    }
);