<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--mobil uyumlu-->
    <link rel="stylesheet" type="text/css" href="kaynak/css.css"><!-- css linki -->
    <script src="kaynak/script.js"></script><!-- javaS linki -->
</head>
<body>
<div class="divAna"><!--en dıştaki div-->

<div class="divIc"><!--sol div-->
<h1>Sol</h1>
<?php 
include("kaynak/baglanti.php");//veri tabanı ile bağlantı
$bul="select icerik from veri";//hangi tablodan hangi sütun
$kayit=$baglanti->query($bul);//sorguyu çalıştır
if ($kayit->num_rows>0) {//eğer satır bulduysa çalışır
$i = 1;
  while ($satir=$kayit->fetch_assoc()) {//satırları sırayla döndürüyor
    echo '<div class="divSuruklenebilir" draggable="true" ondragstart="surukle(event)" id="drag' .$i. '"><h3> '//$i sayesinde her seferinde yeni id veriliyor
     .$satir["icerik"]. //divin içerisinde tablodan çekilen veri var
     ' </h3></div> ';
    $i++;
  }
}
?>
</div>

<div class="divIc" id="ortaKabul" ondrop="birakOrta(event)" ondragover="allowDrop(event)"><!--sol div-->
<h1>Sağ</h1>

<form>
  <button class="btn_yenile">yenile
  </button>
</form>

</div>

</div>
</body>
</html>