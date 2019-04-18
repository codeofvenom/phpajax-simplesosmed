<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

  <!-- Global Metas -->
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


  <title>Google+</title>
  <link rel="shorcut icon" type="text/css" href="favicon.png">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


  <!-- CSS's -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/ajax.js"></script>

  <!-- Favicons -->
  <style type="text/css">
    body {
      background: #eeeeee;
    }

    .grey {
      font-size: 11px;
      color: #bbb;
    }

    .btn-hapus {
      background: none;
      border: none;
      color: #888;
      font-size: 10px;
    }

    .small {
      font-size: 7px;
      color: #bbb;
    }

    .container {
      max-width: 800px;
    }

    .panel-default,
    .btn-tambah {
      border: 0px;
      border-radius: 0;
      -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
      box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
      padding: 10px;
    }

    .panel-default>.panel-heading {
      background-color: white;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      height: 60px;
      line-height: 30px;
    }

    .modal-dialog {
      border: 0;
      border-radius: 0;
      -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
      box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    }

    .navbar-google-plus {
      background: #db4437;
      border: 0;
      border-radius: 0;
      -webkit-box-shadow: 0 1px 8px rgba(0, 0, 0, .3);
      box-shadow: 0 1px 8px rgba(0, 0, 0, .3);
    }

    .navbar-inverse .navbar-brand {
      color: white;
    }

    .btn-tambah {
      color: #aaa;
      text-align: left;
      height: 60px;
      text-indent: 20px;
    }

    .status-input {
      border: 0;
      border-radius: 0;
      padding-bottom: 200px;
      padding-top: 20px;
    }
  </style>
</head>

<body onLoad="loadXMLDoc()">
  <nav class="navbar navbar-inverse navbar-google-plus">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Google+</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">

      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">

      <div class="col-md-12" id="alert-status"></div>
      <div class="col-md-12">
        <div class="col-md-6">

          <button class="btn btn-default btn-block btn-tambah" data-toggle="modal" data-target="#myModal" name="kirim">What's new with you?</button><br />
        </div>
      </div>
      <div class="col-md-12" id="keluaran"></div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>J Reinhart</b> <span class='small glyphicon glyphicon-triangle-right'></span> Public</h4>
        </div>
        <div class="modal-body">
          <input id="status" class="form-control status-input" name="status" placeholder="What's new with you?">
        </div>
        <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal" onclick="kirimStatus();">Kirim</button>
          <button class="btn btn-default" data-dismiss="modal">Batal</button>
        </div>
      </div>

    </div>
  </div>
</body>

</html>


<!-- <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">'.$row['owner'].'</div>
          <div class="panel-body">'.$row['content'].'</div>
        </div>

    </div> -->