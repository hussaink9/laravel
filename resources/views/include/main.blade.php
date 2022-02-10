<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/stylesheets/main.css">
    <!-- bootstrape 5 cdn file  -->
    <link rel="stylesheet" href="/bootstrapeCDN/css/bootstrap.min.css">
    <script type="text/script"src="/bootstrapeCDN/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/FontAWS/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <style>
        .dive{
            
            width:30px;
            height:30px;
            margin:auto;
            margin-top:100px;
            border-radius:50px;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: infinite;
        }
        @keyframes example {
            0%{ outline-style: solid;outline-color: rgb(128, 204, 255,0.3);outline-width: 2px; }
            15%{ outline-style: solid;outline-color: rgb(128, 204, 255,0.3);outline-width: 8px; }
            25%{ outline-style: solid;outline-color: rgb(128, 204, 255,0.3);outline-width: 14px; }
            50%{ outline-style: solid;outline-color: rgb(128, 204, 255,0.3);outline-width: 18px;}
            65%{ outline-style: solid;outline-color: rgb(128, 204, 255,0.3);outline-width: 14px;}
            75%{ outline-style: solid;outline-color: rgb(128, 204, 255,0.3);outline-width: 8px;}
            100%{ outline-style: solid;outline-color: rgb(128, 204, 255,0.3);outline-width: 2px;}
        }
    </style>
    <button class="dive">
    <i class="fal fa-chevron-up"></i>
    </button>
    
</body>
</html>