
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LeTeam - Worx</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/mycss.css">
    </head>
    <body>
         <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="js/three.js"></script>
        <script src="js/plane.js"></script>
        <script src="js/thingview.js"></script>

        <nav id="myNav" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="img/image001.png" alt="Worx logo"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" enctype="multipart/form-data" method="POST" action="redirectToNew.php">
                        <div class="form-group">
                            <input type="file">
                        </div>
                        <button type="submit" class="btn btn-success" id="uploadStl">Upload .stl file</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <div id="viewer" style=" position: relative;">
            
            <div style="position: absolute; top: 0px; left: 0px; padding: 5px; display: none; overflow: visible; white-space: 
                 nowrap; z-index: 100; width: 99%; background-color: red;"></div>
            <div id="alertBox" style="position: absolute; top: 25%; 
                 left: 25%; width: 50%; height: 50%; padding: 10px; display: none; z-index: 100; background-color: rgb(221, 221, 221);">
                
            </div>
            <canvas width="500" height="500" style="background-color: rgb(255, 255, 255);"></canvas>
        </div>



       
        <script>
            window.onload = function () {
                thingiurlbase = "./js";
                thingiview = new Thingiview("viewer");
                thingiview.setObjectColor('#FFF');
                thingiview.setBackgroundColor('#ffffff');
                thingiview.initScene();
                thingiview.loadSTL("http://testerinho.com/three/pump.stl");
            };
        </script>

    </body>
</html>
