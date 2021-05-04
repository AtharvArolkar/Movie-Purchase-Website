$(document).ready(
    function() {
        $(".sidenavbar").hide();
        $("#threelines").click(
            function(){
                $(".sidenavbar").toggle(duration=200);
            }
        );
    }
);