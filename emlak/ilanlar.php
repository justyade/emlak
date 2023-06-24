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

        .sticky{position: fixed; top: 0; left: 0;}

        #head{height: 11vh; background-color: #E3E5E6; width: 100%;}
        #logo{width: 9vh; margin: 1vh; float:left;} 
        .sub{float: right; width: 4vw; height: 3vh; margin-right: 1vh; margin-top: 2%;}
        .sub:hover{color: grey;}
        #hakkinda{margin-right: 1.4vw;}
        #ara{width: 20vw; height: 2vh; border-radius: 1vw; margin-top: 2%; margin-left: 33%;}
        
        #filtre{height: 86.9vh; width: 10vw; padding: 0.5%; background-color: #E3E5E6; float: left; margin-top: 11vh;}
        #site, #filtre h4{margin: 0.3vh; margin-top: 1vw;}
        #filtre select{width: 9.5vw; height: 3vh;}
        #min, #max{width: 4vw;}
        #filtre p{margin: 0.3vh;}
        #filtrele{width: 6vw; height: 3.5vh; border-radius: 1.3vh; border: 1px solid #847474; margin-left: 0.3vh; margin-top: 2vh; background-color: white; font-size: 1.4vh;}
        #filtrele:hover{background-color: #2132; transition: 0.5s;}

        #icerik{margin-left: 12.5vw; margin-top: 11vh;}
        .ilan, .ilanYatay{border: 1px solid red;}
        .ilan{width: 11vw; float: left; margin: 1.5%; padding: 0.3%;}
        .ilan img{max-width: 11vw; max-height: 20vh;}
        .ilan h4, .ilan p{margin: 1%; word-break: break-word;}
        .ilan:hover{background-color: #1221;}

        .ilanYatay{width: 18vw; height: 19vh; top: 6vw; margin-left: 11vw;}
        .ilanYatay img{width: 7vw; float: left; margin-right: 1vh;}
    </style>
</head>
<body>
    <div id="main">
        <div id="head" class="sticky">
            <img src="tuncEmlak.jpg" id="logo">
            <input type="text" placeholder="Arama..." id="ara">
            <a type="submit" class="sub" value="İlanlar">İlanlar</a>
            <a type="submit" class="sub" value="İletişim">İletişim</a>
            <a type="submit" class="sub" id="hakkinda" value="Hakkında">Hakkında</a>
        </div>
        <div id="filtre" class="sticky">
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

            <input type="submit" value="Filtrele" id="filtrele">
        </div>
        <div id="icerik">
            <div class="ilan">
                <img src="kedyy.jpg" alt="">
                <h4>Ev</h4>
                <h4>3000ytl</h4>
                <p>İlan Tarihi:</p>
                <p>İl/İlçe</p>
            </div>

            <div class="ilan">
                <div><img src="ev.jpeg" alt=""></div>
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
                <div><img src="ev.jpeg" alt=""></div>
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

            <div class="ilan">
                <img src="kedyy.jpg" alt="">
                <h4>Ev</h4>
                <h4>4000ytl</h4>
                <p>İlan Tarihi:</p>
                <p>İl/İlçe</p>
            </div>


            <div class="ilan">
                <div><img src="ev.jpeg" alt=""></div>
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
