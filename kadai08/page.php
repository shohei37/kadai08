<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>偏食レストランサーチャー</title>

    
    <script src="https://kit.fontawesome.com/4876f0dc74.js" crossorigin="anonymous"></script>


    <style>

        body{
            width:100%;
        }
        

        .header{
            position:relative;
            text-align:center;


        }
        .title{
            text-align:center;
            position:absolute;
            text-align:center;
            color:white;
            top:150px;
            left:350px;
        }

        .form{
            margin:auto;
            text-align:center;
        }

        #map {
    width: 600px;
    height: 400px;
    margin: 0 auto;
    }



    </style>

</head>
<body>

<header>

    <div class="header">
    <img src="https://www.nihon-trim.co.jp/media/wp-content/uploads/2015/02/iStock-1208790371.png" alt="野菜" width="600px" heigth="200px">
    <h1 class="title">偏食レストランサーチャー</h1>        
    </div>
</header>


<form action="cgi-bin/example.cgi" method="post" class="form">
  <p>検索したいキーワードを入力してください。</p>
  <i class="fa-solid fa-magnifying-glass"></i>
  <select name="living" size="1" id="living">
     <option value="">都道府県</option>
    <option value="">北海道</option>
    </select>
    <select name="food-type" size="1" id="food-type">
     <option value="">食タイプ</option>
    <option value="">ケトジェニック</option>
    </select>  
  <input type="search" name="search" placeholder="キーワード検索">
  <input type="submit" name="submit" value="検索">
</form>









<!-- 店名、住所、メニュー、PFC

お気に入りに追加
→店名、住所等をmysqlに登録
→ボタンアクションでmysqlからページに表示
→選択すると詳細情報が見れる
→htmlとDBの情報を表示する -->




<!-- 奥田グリル
東京都港区4-6-1
鳥もも肉のグリル200g
PFC:
p
F
C -->



<!-- 飲食店情報のAPIと接続 店名、住所-->



<!-- 自身の現在地を取得 -->

<div id="map"></div>



    
</body>
<script>
    var map;
    var marker;
    function initMap() {
    if (!navigator.geolocation) {
        alert('Geolocation APIに対応していません');
        return false;
    }
 
    // 現在地の取得
    navigator.geolocation.getCurrentPosition(function(position) {
        // 緯度経度の取得
        latLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
 
        // 地図の作成
        map = new google.maps.Map(document.getElementById('map'), {
            center: latLng,
            zoom: 17
        });
 
        // マーカーの追加
        marker = new google.maps.Marker({
            position: latLng,
            map: map
        });
    }, function() {
        alert('位置情報取得に失敗しました');
    });
}


</script>

</html>