<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, html {
    margin: auto;
    padding: auto;
}
body {
    color: black;
    display: table;
    font-family: Georgia, serif;
    font-size: 24px;
    text-align: center;
}
.container {
    border: 10px solid;
    width: 1150px;
    height: 630px;
    margin-left: 100px;
    display: table-cell;
    vertical-align: middle;
}
.logo {
    margin: auto;
    margin-top: -20px;
    text-align: center;
    color: black;
    border: 3px solid;
    width: 80%;
    height: 15%;
    background-image: url("logo.png")
}

.marquee {
    color: black;
    font-size: 48px;
    margin: auto;
    margin-top:30px;    
    border: 3px solid;
    width: 80%;
    height: 40%;
    padding-top: 30px;
    background-image: url("logo2.png")

}
.assignment {
    margin: 20px;
    font-size: 30px;
}
.person {
    border-bottom: 2px solid black;
    font-size: 20px;
    font-style: italic;
    margin: 20px auto;
    width: 400px;
}
.reason {
    margin: auto 110px;
    margin-top: 40px;
    display: flex;
    justify-content: center;
    gap: 50px;
    
}

.caja{
    border: 3px solid;
    font-size: 20px;
}
    </style>
</head>
<body>
    <div class="container">
            <div class="logo">
                
            </div>

            <div class="marquee">
                Constancia

                <div class="assignment">
                    This certificate is presented to
                </div>

                <div class="person">
                    Hola mundo
                </div>

            </div>

            

            <div class="reason">
                <div class="caja">
                        M.I. Gerard
                        Lorem ipsum, dolor sit amet consectetur
                    </div>
                    <div class="caja">
                        ING. Henry
                        Lorem ipsum, dolor sit amet consectetur
                    </div>
            </div>
        </div>
</body>
</html>