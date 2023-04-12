
function allowDrop(e) {//içerisine sürüklenebilir
    e.preventDefault();
  }

  function surukle(e) {//sürüklemeye başladığında bilgisini çekiyor
    e.dataTransfer.setData("text", e.target.id);//bilgiyi gönderiyor
  }

  function birakOrta(e) {//bırakma
    e.preventDefault();
    var data = e.dataTransfer.getData("text");
    var suruklenenDiv = document.getElementById(data);
      var ortaKabul = document.getElementById("ortaKabul");
      ortaKabul.appendChild(suruklenenDiv);
  }