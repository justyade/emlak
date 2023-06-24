<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <title>Document</title>
    <style>
        html,body{margin: 0; height: 86.9vh; font-family: 'Lato';}

        #head{height: 11vh; background-color: #E3E5E6; width: 100%;}
        #logo{width: 9vh; margin: 1vh; float:left;} 
        .sub{float: right; width: 4vw; height: 3vh; margin-right: 1vh; margin-top: 2%;}
        .sub:hover{color: grey;}
        #hakkinda{margin-right: 1.4vw;}
        #ara{width: 20vw; height: 2vh; border-radius: 1vw; margin-top: 2%; margin-left: 33%;}

        #main{width: 60%; height: 100%; margin: auto; margin-top: 10px;}
        h2{border-bottom: 1px solid grey;}

        #sol{width: 36vw; float: left; margin-right: 1vw;}

        #ev{width: 36vw;}
        #aciklama{width: 35.9vw; float: left; margin-top: 2%;}
        #aciklama p{margin: 0; border-top: 1px solid black; padding: 0.5%;}
        #baslik{padding: 0.8%; margin: 0; border: 1px solid grey; border-top-left-radius: 0.8vw; border-top-right-radius: 0.8vw; border-bottom: none; background-color: #1221;}

        #sag{width: 20vw; float: right;}

        #ilanBilgi{width: 20vw; float: right; margin-right: 2vw;}
        #ilanBilgi h4, #ilanBilgi h3{margin: 1%;}
        #ilanBilgi h4{width: 12vw;}
        #bilgiBaslik{width: 12vw; float: left;}
        #bilgi{width: 5vw; float: right;}
        #bilgi p{float:right; width: 3vw;}
        #ilanBilgi p{width: 12vw;}
        #adres{border-bottom: 1px solid grey; width: 18vw !important;}
    </style>
</head>
<body>
    <div id="head">
        <img src="tuncEmlak.jpg" id="logo">
        <input type="text" placeholder="Arama..." id="ara">
        <a type="submit" class="sub" value="İlanlar">İlanlar</a>
        <a type="submit" class="sub" value="İletişim">İletişim</a>
        <a type="submit" class="sub" id="hakkinda" value="Hakkında">Hakkında</a>
    </div>
    <div id="main">
        <h2>ege sahillerinde bekliyorum</h2>
        <div id="sol"> 
            <img src="ev.jpeg" id="ev">
            <span id="aciklama"> <h4 id="baslik">Açıklama</h4><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aliquid non incidunt, autem ipsum esse eum voluptates eveniet tempora et? Rerum voluptate animi, repudiandae tempore quae voluptatem. Sed, sequi quasi?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident repellendus ipsa sunt totam consectetur corrupti similique doloribus architecto! Quas pariatur tenetur explicabo totam, doloremque iusto labore aliquam ad ipsum veritatis.</p></span>
        </div>
        <div id="ilanBilgi">
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
</body>
</html>
