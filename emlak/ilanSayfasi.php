<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <title>Document</title>
    <style>
        html,body{margin: 0; font-family: 'Lato';}

        .head{height: 11vh; background-color: #E3E5E6;}
        #logo{width: 9vh; margin: 1vh; float:left;} 
        .sub{float: right; width: 5vw; height: 3vh; margin-right: 1vh; margin-top: 1.75%;}
        .sub:hover{color: grey;}
        #ara{width: 20vw; height: 2vh; border-radius: 1vw; margin-top: 2%; margin-left: 33%;}

        .main{width: 60%; margin: auto; margin-top: 10px;}
        h2{border-bottom: 1px solid grey;}

        #ev{width: 36vw;}
        .ilanBilgi{width: 20vw; float: right; margin-right: 2vw;}
        h4, h3{margin: 1%;}
        .ilanBilgi h4{width: 12vw;}
        #bilgiBaslik{width: 12vw; float: left;}
        #bilgi{width: 5vw; float: right;}
        #bilgi p{float:right; width: 3vw;}
        .ilanBilgi p{width: 12vw;}
        #adres{border-bottom: 1px solid grey; width: 19vw;}

        #aciklama{width: 36vw; float: left; border: 1px solid grey;}
        #aciklamaBaslik{width: 11vh; margin: 0; padding: 0.5%; border: 1px solid grey; border-bottom: 0; border-radius: 2vh;}

        .iletisim{border: 1px solid black; border-radius: 20px; width: 14vw; padding: 5px; float: right; margin-right: 8vw;}
        .iletisim h3{margin: 3px; border-bottom: 1px solid black;}
        .iletisim h4{margin: 0; width: 8vw; float: left; padding-left: 1vh;}
        p{margin: 0;}
    </style>
</head>
<body>
    <div class="head">
        <img src="tuncEmlak.jpg" id="logo">
        <input type="text" placeholder="Arama..." id="ara">
        <a type="submit" class="sub" value="İlanlar">İlanlar</a>
        <a type="submit" class="sub" value="İletişim">İletişim</a>
        <a type="submit" class="sub" value="Hakkında">Hakkında</a>
    </div>
    <div class="main">
    <h2>ege sahillerinde bekliyorum</h2>
        <div>
            <img src="ev.jpeg" id="ev">
            <div class="ilanBilgi">
                <h3>Fiyat</h3>
                <h4 id="adres">Adres</h4>
                <h4>Net Alan</h4>
                <h4>Brüt Alan</h4>
                <h4>Oda Sayısı</h4>
                <h4>Emlak Tipi</h4>
                <h4>Kat Sayısı</h4>
                <h4>Bulunduğu Kat</h4>
                <h4>Bina Yaşı</h4>
                <h4>Aidat Miktarı</h4>
                <h4>Site İçerisinde</h4>
                <h4>Balkon Sayısı</h4>
                <h4>Cephe</h4>
                <h4>Yalıtım</h4>
                <h4>Isıtma Tipi</h4>
                <h4>Banyo Sayısı</h4>
            </div>
        </div>
        <div id="aciklama"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repellendus ipsa sunt totam consectetur corrupti similique doloribus architecto! Quas pariatur tenetur explicabo totam, doloremque iusto labore aliquam ad ipsum veritatis.</div>
        <div class="iletisim">
            <h3>Ferdi Tayfur</h3>
            <h4>İş</h4><p>05555555555</p>
            <h4>Cep</h4><p>05555555555</p>
            <h4>Mail</h4><p>a@gmail.com</p>
        </div>
    </div>
</body>
</html>