<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Projects by Coulton</title>
    <link rel="stylesheet" href="semantic/dist/styles.css">
    <link rel="stylesheet" href="semantic/dist/semantic.min.css">


    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

</script>
</head>
<body class="backgroundContainer">
    <header>

    </header>
    <div class="hex-container">


        <?php

        $colors = array('#4f94b7' , '#4986a5', '#62add4', '#66a6c6', '#5fabd2');
        $top = [
            [3,20],
            [21,39],
            [40,59],
            [60,79],
            [80,95]
        ];
        $left = [
            [0,24],
            [25,49],
            [50,75],
            [76,100]
        ];
        $total =0;
        $count = mt_rand(20,25);
        $opacity = 1;

        for ($i=0; $i < $count; $i++) {
            if($total < 4000){

                $size = mt_rand(50,200);

                $height = round($size/sqrt(3),2);

                $margin = round($height/2,2);

                $border = round($size/2,2);

                $color = mt_rand(0,count($colors)-1);

                $opacity = mt_rand(5, 10) / 10;

                ?>

                <div class="hex-item"><div class="hexagon" id="hex<?php echo $i ?>"></div></div>

                <script>

                //DYNAMICALLY SET THE HEXAGONAL CSS VALUES
                $(function(){

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

                });

                </script>

                <?php $total += $size;}} ?>
                <div class="container-abs">
                    <div class="fixed-container">

                        <div class="segment ui">

                            <h1 class="ui center aligned header">Meet Coulton</h1>
                            <div class="ui grid">
                                <div class="three column row">
                                    <div class="column">
                                        <a class="ui black large ribbon label"><i class="github icon"></i>GitHub</a><br><br>
                                        <a class="ui blue large ribbon label"><i class="linkedin icon"></i>LinkedIn</a><br><br>
                                        <a class="ui teal large ribbon label"><i class="mail icon"></i>Email</a><br><br>
                                    </div>

                                    <div class="column">
                                        <div class="image-abs">
                                            <div class="hexagonPic">
                                                <div class="hexTop"></div>
                                                <div class="hexBottom"></div>
                                            </div>

                                        </div>
                                        <div class="image-abs">
                                            <div class="hexagon-mini-1 hex-left-small"></div>
                                            <div class="hexagon-mini-2 hex-right-med"></div>
                                            <div class="hexagon-mini-3 hex-left-large"></div>
                                        </div>

                                    </div>

                                    <div class="column"></div>
                                </div>
                            </div>

                        </div>
                        <div class="segment ui">
                            <h2 class="ui centered aligned header">Projects</h2>
                            <a href="http://www.art-store.coultonfraser.com" class="ui red right ribbon label">Visit</a><br><br>

                            <div class="ui items">

  <div class="item">
    <div class="image">
      <img src="images/art-store-image.png">
    </div>
    <div class="content">
      <a class="header" href="http://www.art-store.coultonfraser.com">Art Store - Web Dev II Assignment</a>
      <div class="meta">
        <span>This website <em>asynchronously</em> uses cookies, sessions, and query strings to create an experience that is seamless for the user. Developed using PHP, JavaScript, jQuery, and built ontop of a mySQL database. </span>
      </div>
      <div class="description">
        <p></p>
      </div>
      <div class="extra">
        <a href="https://github.com/CoultonF/COMP3512_ASG2"><i class="github icon"></i>View Source on GitHub</a>
      </div>
    </div>
  </div>
</div>

                            <div class="ui fluid two item menu">
                                <a class="item">Previous</a>
                                <a class="item">Next</a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </div>

</body>

</html>
