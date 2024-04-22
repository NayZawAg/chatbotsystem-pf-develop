<html>
<head>

</head>
<body>
<script>
//今日の日付データを変数に格納
//変数は"today"とする
var today=new Date(); 

//年・月・日・曜日を取得
var year = today.getFullYear();
var month = today.getMonth()+1;
var week = today.getDay();
var day = today.getDate();

var week_ja= new Array("日","月","火","水","木","金","土");

//時刻データを取得して変数に格納する
//変数は"time"とする
var time= new Date();

//時・分・秒を取得
var hour = time.getHours();
var minute = time.getMinutes();
var second = time.getSeconds();


//年・月・日・曜日を書き出す
document.write(year+"-"+month+"-"+day+"T"+hour+":"+minute+":"+second);
</script>
</body>
</html>
