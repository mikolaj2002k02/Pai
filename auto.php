<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Komis Samochodowy</title>
<link rel="stylesheet" href="auto.css">
</head>
<body>
    <div class="topka">
    <div class="akapit">
    </div>
<h1>SAMOCHODY</h1>
</div>
<div class="srodek1">
<h2>Wykaz samochodów</h2>
<ul>


<?php
                $conn = mysqli_connect('localhost', 'root', '', 'komis');
                $result = mysqli_query($conn, 'SELECT id, marka, model FROM samochody');
            
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<li>'.$row['marka'].' '.$row['model'].'';
                }
                mysqli_close($conn);
                ?>
            </ul>
<h2>Zamówienia</h2>
<ul>
<?php
                $conn = mysqli_connect('localhost', 'root', '', 'komis');
                $result = mysqli_query($conn, 'SELECT samochody_id, klient from zamowienia');
            
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<li>'.$row['samochody_id'].' '.$row['klient'].'';
                }
                mysqli_close($conn);
                ?>
</ul>
</div>
<div class="srodek2">
<h2>Pełne Dane: Fiat</h2>
<?php
                $conn = mysqli_connect('localhost', 'root', '', 'komis');
                $result = mysqli_query($conn, 'SELECT * FROM samochody WHERE marka="fiat"');
            
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<b><br>'.$row['id'].'/'.$row['marka'].'/'.$row['model'].'/'.$row['rocznik'].'/'.$row['kolor'].'/'.$row['stan'].'/';
                }
                mysqli_close($conn);
                ?>
</div>


<div id="clear"></div>
<div class="stopka">
    
    <div class="akapit">
<a href="kwerendy.txt" target="blank">Kwerendy</a>
    </div>
    <div class="akapit">
    <p><b>Autor: 00000000000</b>
    </div>
    <div class="akapit">
    <img src="auto.png" alt="komis samochodowy">
    </div>
</div>
</body>
</html>