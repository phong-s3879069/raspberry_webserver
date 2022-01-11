<html>
    <head>
        <meta name="viewport" content="width=device-width" />
        <title>Control your heat lamp using webserver</title>
    </head>
    <body>
        <h1 style="text-align: center; font-family: 'Times New Roman', Times, serif"> Control your heat lamp </h1>
        <form method="get" action="index.php" style= "text-align: center;">
            <input type="submit" style = "width: 100px; height: 60px; font-size: 14 pt; background-color: #CD5C5C; " value="OFF" name="off">
            <input type="submit" style = "width: 100px; height: 60px; font-size: 14 pt; background-color: #8FBC8F;" value="ON" name="on">
        </form>
    <?php
        shell_exec("gpio -g mode 27 out");
        if(isset($_GET['off']))
            {
                            echo "LED is off";
                            shell_exec("gpio -g write 27 0");
            }
                else if(isset($_GET['on']))
                {
                            echo "LED is on";
                            shell_exec("gpio -g write 27 1");
                }
    ?>
   </body>
</html>
