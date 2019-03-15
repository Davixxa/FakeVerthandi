  <?php require("imports/header.php") ?>
  <title><?php echo $pagetitle; ?></title>
  
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Min Idr&aelig;tsforening</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Hjem<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/svømning.php">Sv&oslash;mning</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">L&oslash;b</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Gymnastik</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Fitness</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Kontakt Os</a>
          </li>
      </ul>
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Log Ind</a>
            </li>
      </ul>
    </div>
  </nav>


<div id="contactModal" class="modal fade" role="dialog">

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h3>Kontakt os</h3>    
        <button type="button" class="close" data-dismiss="modal"> &times;</button>
        </div>
        <div class="modal-body">
            <p>Du kan kontakte os på <a href="#">+45 12 34 56 78</a> eller pr. email <a href="mailto:namesubjecttochangeif@davixxa.net">namesubjecttochangeif@davixxa.net</a></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>

</div>


<div id="loginModal" class="modal fade" role="dialog">

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h3>Log ind</h3>    
        <button type="button" class="close" data-dismiss="modal"> &times;</button>
        </div>
        <div class="modal-body">
            <p>Du kan kontakte os på <a href="#">+45 12 34 56 78</a> eller pr. email <a href="mailto:namesubjecttochangeif@davixxa.net">namesubjecttochangeif@davixxa.net</a></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>

</div>

</header>