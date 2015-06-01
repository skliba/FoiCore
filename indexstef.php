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
        <script src="./js/Three.js"></script>
        <script src="./js/plane.js"></script>
        <script src="./js/thingview.js"></script>

        <nav id="myNav" class="navbar navbar-default" role="navigation">
            <div id="headerNav" class="navbar-header">
                <a class="navbar-brand" href="http://www.worx.hr/"><img src="img/image001.png" alt="Worx Logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <div id="btn-grp" class="btn-group-vertical" role="group" aria-label="...">
                    <button id="btn-rotate" class="btn btn-default">Stop rotation</button>
                    <button id="btn-porsche" class="btn btn-default">Porsche model</button>
                    <button id="btn-pump" class="btn btn-default">Pump model</button>
                </div>
                <form id="frm" class="navbar-form navbar-left" role="search" method="POST" enctype="multipart/form-data"
                      action="upload.php">
                    <div class="form-group">
                        <span id="btnBrowse" class="btn btn-default btn-file">
                            Browse <input type="file">
                        </span>
                    </div>
                    <button id="btnUpload" type="submit" class="btn btn-success" name="upload">Upload .stl file</button>
                </form>

            </div>
        </nav>



        <script>
            $(document).ready(function () {
                thingiurlbase = "./js";
                thingiview = new Thingiview("viewer");
                thingiview.setObjectColor('#C0D8F0');
                thingiview.setObjectMaterial('solid');
                thingiview.setBackgroundColor('#ffffff');
                thingiview.initScene();


                $("#btn-rotate").click(function () {
                    if ($(this).text() === "Stop rotation") {
                        thingiview.setRotation(false);
                        $(this).text("Start rotation");
                    }
                    else {
                        thingiview.setRotation(true);
                        $(this).text("Stop rotation");
                    }
                });

                $("#btn-porsche").click(function () {
                    thingiview.loadSTL("../porschestef.stl");
                });

                $("#btn-pump").click(function () {
                    thingiview.loadSTL("../pumpstef.stl");
                });

            });
        </script>

        <div id="viewer">
            <div></div><div id="alertBox"></div>
            <canvas width="300" height="600">
            </canvas>
        </div>



    </body>
</html>
