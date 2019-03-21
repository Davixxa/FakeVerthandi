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
          <a class="nav-link" href="index.php">Hjem<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="svømning.php">Sv&oslash;mning</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="løb.php">L&oslash;b</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="gymnastik.php">Gymnastik</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="fitness.php">Fitness</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Kontakt Os</a>
          </li>
      </ul>
      <?php if($loggedin == true) { ?>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="loggedInDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Velkommen Bruger</a>
              <div class="dropdown-menu">
                <a href="userCP.php" class="dropdown-item">Kontrolpanel</a>
                <div class="dropdown-divider"></div>
                <a href="index.php" class="dropdown-item">Log ud</a>
              </div>
          </li>
        </ul>

      <?php }else { ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Log Ind</a>
          </li>
        </ul>
      <?php } ?>

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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Luk</button>
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
            <form>
              <div class="form-group">
                <label for="inputEmail">E-Mail</label>
                <input type="email" id="inputEmail" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputPassword">Adgangskode</label>
                <input type="password" id="inputPassword" class="form-control">
              </div>
              </form>
              <p>Har du ikke en bruger? Så <a href="register.php">Registrer dig her</a>.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning" onclick="document.location = 'userCP.php';">Log ind som Administrator</button>
            <button type="button" class="btn btn-primary" onclick="alert('Log ind som administrator istedet. Dette har alle funktionerne');">Log Ind</button>
        </div>
    </div>
</div>

</div>

</header>
