
$(function(){

    //------------------------------------------------------------------------//
    //                                                                        //
    // THIS FUNCTION BUILDS THE HEXAGONAL ELEMENTS ON THE WEBSITE BACKGROUND  //
    //                                                                        //
    //------------------------------------------------------------------------//

    buildHexagonalElements = function(){
        $("#hex<?php echo $i ?>").css("position", "relative");

        $("#hex<?php echo $i ?>").css("width", "<?php echo $size ?>px");

        $("#hex<?php echo $i ?>").css("height", "<?php echo $height ?>px");

        $("#hex<?php echo $i ?>").css("background-color", "<?php echo $colors[$color] ?>");

        $("#hex<?php echo $i ?>").css("margin", "<?php echo $margin ?>px 0");

        $("#hex<?php echo $i ?>").parent().css("opacity", "<?php echo $opacity ?>");

        if("<?php echo $i ?>" <= 5){
            $("#hex<?php echo $i ?>").parent().css("top", "<?php echo mt_rand($top[$i % 5][0], $top[$i % 5][1]) ?>%");
            $("#hex<?php echo $i ?>").parent().css("left", "<?php echo mt_rand($left[0][0], $left[0][1]) ?>%");
        }

        else if ("<?php echo $i ?>" <= 10) {
            $("#hex<?php echo $i ?>").parent().css("top", "<?php echo mt_rand($top[$i % 5][0], $top[$i % 5][1]) ?>%");
            $("#hex<?php echo $i ?>").parent().css("left", "<?php echo mt_rand($left[1][0], $left[1][1]) ?>%");
        }

        else if ("<?php echo $i ?>" <= 15) {
            $("#hex<?php echo $i ?>").parent().css("top", "<?php echo mt_rand($top[$i % 5][0], $top[$i % 5][1]) ?>%");
            $("#hex<?php echo $i ?>").parent().css("left", "<?php echo mt_rand($left[2][0], $left[2][1]) ?>%");
        }

        else if ('<?php echo $i ?>' <= 20) {
            $("#hex<?php echo $i ?>").parent().css("top", "<?php echo mt_rand($top[$i % 5][0], $top[$i % 5][1]) ?>%");
            $("#hex<?php echo $i ?>").parent().css("left", "<?php echo mt_rand($left[3][0], $left[3][1]) ?>%");
        }

        $("head").append("<style>#hex<?php echo $i ?>.hexagon:before{bottom: 100%; border-bottom: <?php echo $margin ?>px solid <?php echo $colors[$color] ?>;}</style>");

        $("head").append("<style>#hex<?php echo $i ?>.hexagon:after{top: 100%; width: 0; border-top: <?php echo $margin ?>px solid <?php echo $colors[$color] ?>;}</style>");

        $("head").append("<style>#hex<?php echo $i ?>.hexagon:before, #hex<?php echo $i ?>.hexagon:after {border-left: <?php echo $border ?>px solid transparent;border-right: <?php echo $border ?>px solid transparent;}</style>");

    };

});
