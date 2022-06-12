<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }

        .body{
            width:500px;
            margin:auto;
            text-align:center;
        }

        .textarea{
            /* text-align:left; */
        }
        
        .jumbotron{
            background-color:white;

        }

        * {
  font-family: 'Maven Pro', sans-serif;
  box-sizing: border-box;
}

body,html {
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
  background-image: linear-gradient(180deg, #37375A 70%, #31315A);
  text-align: center;
  font-family: 'Segoe UI';
}

form {
  width: 40%;
  margin-left: 30%;
  padding-top: 10%;
}

input {
  width: 100%;
  background: transparent;
  border-bottom: solid 1px #7053c4;
  border-top: none;
  border-left: none;
  border-right: none;
  font-size: 1rem;
  padding: 0.5em 0.4em;
  transition: all 0.4s;
  color: #BDBDBD;;
  margin: 0.7rem 0;
}
input:focus {
  background: #7035c4;
  transform: scale3d(1.06,1.06,1.06);
}

button {
  background: transparent;
  width: 50%;
  margin-top: 2.5rem;
  font-size: 1rem;
  border: solid 1px #7053c4;
  padding: 1em 0;
  color: #bdc3c7;
  transition: all 0.6s;
}
button:hover {
  cursor:pointer;
  background: #7035c4;
}


h1 {
  color: #bdc3c7;
  border-bottom: solid 1px #7035c4;
  padding: 0 0 0.8em 0;
  width: 50%;
  margin-left: 25%;
  margin-bottom: 1em;
}

@media (max-width: 550px) {
  form {
  width: 90%;
  margin-left: 3%;
  padding-top: 5%;
}
  input {
    font-size: 1em;
  }
}


.btn{
    font-size:20px;
    font-weight:bold;
}

.container-fluid{
  background-color:navy;
}





    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>

    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">登録データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">

            <fieldset class="body">
                <legend>ユーザー登録</legend>
                <div class="textarea">
                <label>名前：<input type="text" name="name"></label><br>
                <label>email:<input type="text" name="email"></label><br>

                <!-- カレンダー式の生年月日選択は"date"のライブラリーで簡単に挿入 -->
                <label>生年月日：<input type="date" name="birthday"></label><br>
                 <!-- セレクトボックスで都道府県データを選択し、sqlに飛ばしたかったが飛ばされず一旦ペンディング -->

                    <!-- <select name="living" size="1" id="living">
                        <option value="all">都道府県</option>
                        <option value="hokkaido">北海道</option>
                    </select><br>  -->
                   
                <label>住んでる地域：
                 <input type="text" name="living"></label><br>

                <label>食タイプ：<input type="text" name="foodtype"></label><br>
                </div>
                <input type="submit"  value="ユーザー登録" class="btn">
                <input type="button" id="Login" value="ログイン" class="btn">                
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>
<script>
  
//   ログインボタンを押してメインページに飛ぶアクション

    document.getElementById("Login").onclick = function () {
    location.href = 'hotpepper.php';
  }

</script>

</html>
