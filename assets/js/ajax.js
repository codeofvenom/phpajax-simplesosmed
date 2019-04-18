var myVar = setInterval(loadXMLDoc, 1000);
function loadXMLDoc() {
  var xmlhttp;
  var d = new Date();
  var tanggal = d.toLocaleDateString();
  var waktu = d.toLocaleTimeString();
  var tanggal = tanggal+" "+waktu;
  var timestamp = Date.parse(tanggal);

  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var data = this.responseText.split("@");
      var text="";
      for (var i = 0; i < data.length - 1; i++) {
        
        text = text+"<div class='col-md-6'><div class='panel panel-default'>";
        data[i] = data[i].split("|");
        var interval = (timestamp-data[i][3]) /(1000);

        if(interval < 60){
          interval = "";
          keterangan = "Baru Saja";

        }
        else if(interval > 60 && interval < 6000){
          interval = interval / 100;
          interval = parseInt(interval, 10);
          keterangan = " Menit yang lalu";

        }
        else if((interval / 100) / 60  >= 1 && (interval / 100) / 60  < 24){
          interval = (interval / 100) / 60;
          interval = parseInt(interval, 10);
          keterangan = " Jam yang lalu";

        }
        else {
          interval = (interval / 100) / 60 / 24;
          interval = parseInt(interval, 10);
          keterangan = " Hari yang lalu";

        } 

        text = text+"<div class='panel-heading'><button class='btn btn-default btn-hapus btn-sm pull-right' onclick='hapus("+data[i][0]+")'><span class='glyphicon glyphicon-remove'></button><b>"+data[i][1]+"</b> <span class='small glyphicon glyphicon-triangle-right'></span> Public</div>";
        text = text+"<div class='panel-body'><div class='grey'>"+interval+keterangan+"</div></div>";
        text = text+"<div class='panel-body'>"+data[i][2]+"</div>";
        text = text+"</div></div>";
      }
      document.getElementById("keluaran").innerHTML = text;

    }
  };

  xmlhttp.open("GET", "controller/LihatData.php", true);
  xmlhttp.send();
}

function hapus(id){
  var del;
  if (window.XMLHttpRequest) {
    del = new XMLHttpRequest();
  } else {
    del = new ActiveXObject("Microsoft.XMLHTTP");
  }
  del.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("alert-status").innerHTML =
        '<div class="alert alert-success"><strong>Success!</strong> Data berhasil dihapus</div>';
        loadXMLDoc();
    }
  };

  del.open("GET", "controller/HapusData.php?id="+id, true);
  del.send();
}

function kirimStatus() {
  

  var http;
  var d = new Date();
  var tanggal = d.toLocaleDateString();
  var waktu = d.toLocaleTimeString();
  var tanggal = tanggal+" "+waktu;
  var timestamp = Date.parse(tanggal);
  var status = document.getElementById("status").value;

  if (window.XMLHttpRequest) {
    http = new XMLHttpRequest();
  } else {
  // code for older browsers
    http = new ActiveXObject("Microsoft.XMLHTTP");
  }
  var url = "controller/Status.php";
  var params = "nama=J REINHART&status="+status+"&timestamp="+timestamp;
  http.open("POST", url, true);
                //Send the proper header information along with the request
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
      loadXMLDoc();
    }
  }
  http.send(params);
}