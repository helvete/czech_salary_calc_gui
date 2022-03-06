<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="index">

    <title>Wage calc result</title>
    <style>
        li {
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <h1>Wage calc GUI</h1>
    <div>
        <?php
            foreach ($data as $tpl => $val) {
                echo sprintf($tpl, $val) . "<br />";
            }
            echo "Pure wage: " . number_format($actual, 2, '.', '') . '<br />';
        ?>
    </div>
    <div>
        DISCLAIMER <br />
        <a href ="">new calculation</a>
    </div>
</body>
</html>

