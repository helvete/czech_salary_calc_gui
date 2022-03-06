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
            <label for="wage">Wage monthly tariff (int) *</label>
            <input type="text" name="wage" value="" />
            <br />
            <label for="yearmonth">Yearmonth in (YYYY-MM) *</label>
            <input type="text" name="yearmonth" value="" />
            <br />
            <label for="untaxable">Untaxable amount (int)</label>
            <input type="text" name="untaxable" value="0" />
            <br />
            <label for="vacrate">Vacation hourly rate (double)</label>
            <input type="text" name="vacrate" value="0" />
            <br />
            <label for="vacutil">Vacation days utilized (double)</label>
            <input type="text" name="vacutil" value="0" />
            <br />
            <label for="ovetimehours">Overtime hours (double)</label>
            <input type="text" name="ovetimehours" value="0" />
            <br />
            <input type="submit" name="submit" value="calc" />
        </form>
    </div>
    <div>
        DISCLAIMER
    </div>
</body>
</html>
