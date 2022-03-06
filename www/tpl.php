<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="index">

    <title>Wage calc</title>
    <style>
        li {
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <h1>Wage calc GUI</h1>
    <div>
        <form method="POST">
            <table class="itseemsiliketablez">
                <tr><td>
                <label for="wage">Wage monthly tariff (int) *</label>
                </td><td>
                <input type="text" name="wage" value="" />
                </td></tr>
                <tr><td>
                <label for="yearmonth">Yearmonth in (YYYY-MM) *</label>
                </td><td>
                <input type="text" name="yearmonth" value="" />
                <tr><td>
                <label for="untaxable">Untaxable amount (int)</label>
                </td><td>
                <input type="text" name="untaxable" value="0" />
                <tr><td>
                <label for="vacrate">Vacation hourly rate (double)</label>
                </td><td>
                <input type="text" name="vacrate" value="0" />
                <tr><td>
                <label for="vacutil">Vacation days utilized (double)</label>
                </td><td>
                <input type="text" name="vacutil" value="0" />
                <tr><td>
                <label for="ovetimehours">Overtime hours (double)</label>
                </td><td>
                <input type="text" name="ovetimehours" value="0" />
                </td><td>
                <tr><td>
                <input type="submit" name="submit" value="calc" />
                </td><td>
            </table>
        </form>
    </div>
    <?php include(__DIR__ . "/disclaimer.html"); ?>
</body>
</html>
