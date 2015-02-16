<html>
<head>
    <title>Vecka</title>
    <style>
        body {
            background: rgb(144, 192, 222);
        }
        #week {
            font-family: arial, verdana, sans-serif;
            font-size: 350px; font-size: 25vw;
            font-weight: bold;
            color: rgb(6, 110, 176);

            max-width: 25%;
            margin: 8% auto;
        }
    </style>
</head>

<body>
    <div id="week">
        <?php
        $weekno = date("W"); 
        echo $weekno
        ?>
    </div>
</body>
</html>
