<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="index">

    <title>Salary calculator</title>
    <style>
        li {
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <h1>Salary calculator GUI</h1>
    <div>
        <?php
            $a = false;
            if (count($data)) {
                echo "<table>";
                $a = true;
            }
            foreach ($data as $tpl => $val) {
                echo "<tr>";
                $ihateit = false;
                foreach (explode('%s', $tpl) as $tok) {
                    if ($ihateit) {
                        break;
                    }
                    // I shouldn't write code while being drunk
                    echo "<td>{$tok}</td>";
                    $ihateit = true;
                }
                echo "<td>{$val}</td>";
                echo "</tr>";
            }
            if ($a) {
                echo "</table>";
            }
        ?>
    </div>
    <div>
        <hr />
        <a href ="">new calculation</a>
    </div>
    <?php include(__DIR__ . "/disclaimer.html"); ?>
</body>
</html>

