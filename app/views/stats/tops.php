<!DOCTYPE html>
<html>
<head>

    <title><?= $data['title']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="/<?= CONFIG['site_path']; ?>/app/views/assets/js/Chart.bundle.js" ></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/<?= CONFIG['site_path']; ?>/app/views/assets/css/style.css">
</head>
<body>
<div class="container-fluid">
    <div class="row up">
            <div class="col " id="left"></div>
            <div class="col">
                <div class="row">
                    <div class="col text-center">
                        <h1><?=$data['header']?></h1>
                        <div class="row ">
                            <div class="col">
                                <div class="row">
                                    <div class="col">   
                                        <h6></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="btn-group bam ml-auto" role="group" aria-label="Button group with nested dropdown">
                      <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Stats
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                          <a class="dropdown-item" href="/<?= CONFIG['site_path']; ?>/">Home</a>
                          <a class="dropdown-item" href="/<?= CONFIG['site_path']; ?>/stats/">User statistics</a>
                          <a class="dropdown-item" href="/<?= CONFIG['site_path']; ?>/stats/tops">Top 5</a>
                        </div>
                      </div>
                      <a href="/<?= CONFIG['site_path']; ?>/Auth/logout" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
       <div class="row">
            <div class="col">
                <canvas id="top5" width="550" height="350"></canvas>
            </div>
             <div class="col">
                <canvas id="myChart" width="550" height="350"></canvas>
            </div>
        </div>
    </div>
    
</div>
<script src="/<?= CONFIG['site_path']; ?>/app/views/assets/js/script.js">
</script>
</body>
</html>

    


