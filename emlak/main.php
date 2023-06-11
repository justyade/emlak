<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <style>
        html,body{margin: 0;}
        header{height: 100vh; position: relative;}
        div{position: absolute; inset: 0 0 0;}

        .head{position: absolute; inset: 0 0 auto; color: pink;}
        #logo{width: 10vh;}
        input{float: right; }
    </style>
</head>
<body>
    <!--100px = 10vh-->
    <div>
        <div class="head">
            <img src="tuncEmlak.jpg" id="logo">
            <input type="submit" value="İlanlar">
            <input type="submit" value="Hakkında">
        </div>
    </div>
</body>
</html>