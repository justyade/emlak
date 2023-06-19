<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <title>İlanlar</title>
    <style>
        html,body{margin: 0; height:100%; font-family: 'Lato';}

        #main{height: 100%;}

        .head{height: 11vh; background-color: #E3E5E6;}
        #logo{width: 9vh; margin: 1vh; float:left;} 
        .sub{float: right; width: 4vw; height: 3vh; margin-right: 1vh; margin-top: 2%; }
        .sub:hover{color: grey;}
        #hakkinda{margin-right: 1.4vw;}
        #ara{width: 20vw; height: 2vh; border-radius: 1vw; margin-top: 2%; margin-left: 33%;}
        
        .filtre{height: 86.8vh; width: 10vw; padding: 0.5%; background-color: #E3E5E6; float: left;}
        #site, h4{margin: 3px; margin-top: 1vw;}
        .filtre select{width: 9.5vw; height: 3vh;}
        #min, #max{width: 4vw;}
        .filtre p{margin: 3px; }

        .ilan, .ilanYatay{border: 1px solid red;}
        .ilan{width: 10vw; float: left; margin: 2%; padding: 0.3%;}
        .ilan img{width: 7vw; margin-left: 1.5vw;}
        h4, p{margin: 0.2%; word-break: break-word;}

        .ilanYatay{width: 18vw; height: 19vh; top: 6vw; margin-left: 11vw;}
        .ilanYatay img{width: 7vw; float: left; margin-right: 1vh;}
    </style>
</head>
<body>
    <div id="main">
        <div class="head">
            <img src="tuncEmlak.jpg" id="logo">
            <input type="text" placeholder="Arama..." id="ara">
            <a type="submit" class="sub" value="İlanlar">İlanlar</a>
            <a type="submit" class="sub" value="İletişim">İletişim</a>
            <a type="submit" class="sub" id="hakkinda" value="Hakkında">Hakkında</a>
        </div>
        <div class="filtre">
            <h4>İlçe</h4>
            <select name="ilce" id="ilce">
                <option value="odunpazari">Odunpazarı</option>
            </select>
            <h4>Mahalle</h4>
            <select name="mh" id="mh">
                <option value="buyukdere">Büyükdere</option>
            </select>

            <h4>Net Alan</h4>
            <input type="text" name="min" id="min" placeholder="min">-
            <input type="text" name="max" id="max" placeholder="max">
            <h4>Brüt Alan</h4>
            <input type="text" name="min" id="min" placeholder="min">-
            <input type="text" name="max" id="max" placeholder="max">

            <h4>Oda Sayısı</h4>
            <p><input type="checkbox" name="11" id="11">1+1</p>
            <p><input type="checkbox" name="21" id="21">2+1</p>
            <p><input type="checkbox" name="31" id="31">3+1</p>

            <h4>Bina Yaşı</h4>
            <input type="text" name="min" id="min" placeholder="min">-
            <input type="text" name="max" id="max" placeholder="max">

            <p><input type="checkbox" name="site" id="site">Site İçerisinde</p>

            <h4>Cephe</h4>
            <p><input type="checkbox" name="dogu" id="dogu">Doğu</p>
            <p><input type="checkbox" name="bati" id="bati">Batı</p>
            <p><input type="checkbox" name="kuzey" id="kuzey">Kuzey</p>
            <p><input type="checkbox" name="guney" id="guney">Güney</p>
        </div>
        <div>
            <div class="ilan">
                <img src="kedyy.jpg" alt="">
                <h4>Evaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h4>
                <h4>3000ytl</h4>
                <p>İlan Tarihi:</p>
                <p>İl/İlçe</p>
            </div>

            <div class="ilan">
                <img src="kedyy.jpg" alt="">
                <h4>Ev</h4>
                <h4>4000ytl</h4>
                <p>İlan Tarihi:</p>
                <p>İl/İlçe</p>
            </div>

            <div class="ilan">
                <img src="kedyy.jpg" alt="">
                <h4>Ev</h4>
                <h4>4000ytl</h4>
                <p>İlan Tarihi:</p>
                <p>İl/İlçe</p>
            </div>

            <div class="ilan">
                <img src="kedyy.jpg" alt="">
                <h4>Ev</h4>
                <h4>4000ytl</h4>
                <p>İlan Tarihi:</p>
                <p>İl/İlçe</p>
            </div>
        </div>
    </div>
</body>
</html>