<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<html> 
  <body>
  <form action="{{url('/hello/result')}}" method="POST">
  {{ csrf_field( ) }}
<h1>点数（１〜１００）を入力してください</h1>
<input type="text"name="number">
<input type="submit">
</form>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<html> 
  <body>
  <form action="{{url('/hello/sum')}}" method="POST">
  {{ csrf_field( ) }}
<h1>点数（１〜１００）を入力してください</h1>
<input type="text"name="sum">
<input type="submit">
</form>
</html>