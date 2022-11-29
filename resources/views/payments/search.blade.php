<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tehama Marathon - Search</title>
      <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="viewport" content="width=device-width, initial-scale=0.5"> <link rel="stylesheet" href="./style.css">
    <style>
        body{
            margin: 0;
            padding: 0;
            background: #01a2ff;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #38ef7d, #11998e);  /* Chrome 10-25, Safari 5.1-6 */
            /* background: linear-gradient(to right, #38ef7d, #11998e); W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .heading{
            color:white;
            position:relative;
            text-align: center;
            font-size: 25px;
            margin: 0 30%;
            /*left:40%; */
            font-family: 'Lato', sans-serif;
            font-style: underline;
        }
        .search{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50% , -50%);
            background:black ;
            height: 40px;
            border-radius: 40px;
            padding: 10px;
        }
        .blwsearch{
            position: absolute;
            top:60%;
            left:50%;
            transform: translate(-50% , -50%);
            height: 40px;
            border-radius: 40px;
            padding: 10px;
        }

        .search:hover > .search-txt{
            width: 180px;
            padding: 0 10px;
            color: wheat;
            font-family: 'Pangolin', cursive;
        }
        .search:hover > .search-btn{
            background: white ;
        }
        .search-btn{
            color: red;
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background:#ABB2B9 ;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search-txt{
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color:wheat ;
            font-size: 16px;
            transition: ease-in 0.4s;
            line-height: 40px;
            width: 110px;
            font-family: 'Pangolin', cursive;
        }
        .fas fa-search{
            font-weight: 200;
            font-size: 40px;
        }
    </style>
</head>
<body>
<!-- partial:index.partial.html -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
   
    <div class="heading">
        <h1>TEHAMA MARATHON 2022</h1>
    </div>
    <div class="search">
    
     <input  class="search-txt" type="email" name="" placeholder="Type your email or phone">
     
     <a class="search-btn" href="#" >
        <i class="fas fa-search"></i>
     </a>

    </div>
    <div class="blwsearch">
        <a href="/registercustomer" style="color:white; font-size:15px">Not Registered?</a>
        <a href="/" style="color:white; font-size:15px">Proceed Browsing</a>
    </div>
    
</body>
</html>
