<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="bannerl">
        <p>maj, 2019</p>
    </div>
    <div id="banner">
        <h2>Prognoza dla Poznania</h2>
    </div>
    <div id="bannerr">
        <img src="logo.png" alt="prognoza">
    </div>
    <div id="lewy">
        <a href="kwerendy.txt">Kwerendy</a>
    </div>
    <div id="prawy">
        <img src="obraz.jpg" alt="Polska,Poznań">
    </div>
    <div id="content">
        <table>
            <tr>
                <th>Lp.</th><th>DATA</th><th>NOC - TEMPERATURA</th><th>DZIEŃ - TEMPERATURA</th><th>OPADY [mm/h]</th><th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
            $lp = 0;
            $conn = mysqli_connect('localhost','root','','prognoza');
            $q = mysqli_query($conn,'SELECT * FROM `pogoda` WHERE `miasta_id`=2 ORDER BY `data_prognozy` DESC');
            while($a = mysqli_fetch_array($q))
            {
                $lp = $lp + 1;
                echo('<tr>
                <td>'.$lp.'</td><td>'.$a['data_prognozy'].'</td><td>'.$a['temperatura_noc'].'</td><td>'.$a['temperatura_dzien'].'</td><td>'.$a['opady'].'</td><td>'.$a['cisnienie'].'</td>
                </tr>');
            }
            ?>
        </table>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: 12345678901</p>
    </div>
</body>
</html>