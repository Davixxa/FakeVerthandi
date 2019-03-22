<?php
$loggedin = true;
$pagetitle = "Min Idrætsforening | Brugerkontrolpanel";
require("header.php"); 
?>

<div class="container"><br>
    <div class="row">
      <div class="col-md-11"><h1>Kontrolpanel</h1><h5>Her kan du ændre dine oplysninger, se hvilke hold du er med i, eller har kontrol over samt administrere dem.</h5></div>
    </div>
    <br>
    <br>

    <div class="row">
  <div class="col-md-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-my-info-tab" data-toggle="pill" href="#v-pills-my-info" role="tab" aria-controls="v-pills-my-info" aria-selected="true">Mine oplysninger</a>
      <a class="nav-link" id="v-pills-my-teams-tab" data-toggle="pill" href="#v-pills-my-teams" role="tab" aria-controls="v-pills-my-teams" aria-selected="false">Mine hold</a>
      <a class="nav-link" id="v-pills-manage-view-tab" data-toggle="pill" href="#v-pills-view-users" role="tab" aria-controls="v-pills-view-users" aria-selected="false">Træner: Vis medlemmer</a>
      <a class="nav-link" id="v-pills-manage-teams-tab" data-toggle="pill" href="#v-pills-manage-teams" role="tab" aria-controls="v-pills-manage-teams" aria-selected="false">Træner: Administrer Hold</a>
      <a class="nav-link" id="v-pills-manage-users-tab" data-toggle="pill" href="#v-pills-manage-users" role="tab" aria-controls="v-pills-manage-users" aria-selected="false">Admin: Administrer brugere</a>
    </div>
  </div>
  <div class="col-9 centerfix">
    <div class="tab-content centerfix" id="v-pills-tabContent">
      <div class="tab-pane fade show active centerfix" id="v-pills-my-info" role="tabpanel" aria-labelledby="v-pills-my-info-tab">
          <div class="jumbotron">
            <div class="container container-fluid">
              <form class="form-signin">
                <h2 class="form-signin-heading">Rediger Information</h2>
                <div class="form-row">
                  <div class="form-group col-md-6"><label for="inputFirstName">Fornavn</label><input type="text" class="form-control" placeholder="Fornavn" id="inputFirstName"></div>
                  <div class="form-group col-md-6"><label for="inputLastName">Efternavn</label><input type="text" placeholder="Efternavn" id="inputLastName" class="form-control"></div>
                </div>
                <div class="form-group"><label for="inputEmailAddress">E-mail Adresse</label><input type="email" id="inputEmailAddress" placeholder="E-mail Adresse" class="form-control"></div>
                <div class="form-row">
                  <div class="form-group col-md-6"><label for="birthdate">F&oslash;dselsdag</label><input type="date" name="inputBirthdate" id="birthdate" class="form-control"></div>
                  <div class="form-group col-md-6"><label for="gender">K&oslash;n</label>
                    <select name="Køn" id="gender" class="form-control">
                      <option value="male">Mand</option>
                      <option value="female">Kvinde</option>
                    </select>
                  </div>
                </div>
              </form>
              <div class="form-group"><button class="btn btn-primary btn-large btn-block" onclick="alert('Opdateret!');">Opdater Info</button></div>
            </div>
          </div>
          <div class="jumbotron">
            <div class="container container-fluid">
              <form class="form-signin">
                <h2 class="form-signin-heading">Rediger password</h2>
                <div class="form-group"><label for="inputCurrPassword">Nuv&aelig;rende Password</label><input type="password" id="inputCurrPassword" class="form-control" placeholder="Password"></div>
                <div class="form-row">
                  <div class="form-group col-md-6"><label for="inputNewPass">Nyt password</label><input type="password" placeholder="Nyt password" id="inputNewPass" class="form-control"></div>
                  <div class="form-group col-md-6"><label for="inputRepeatPass">Gentag Password</label><input type="password" placeholder="Gentag password" id="inputRepeatPass" class="form-control"></div>
                </div>
              </form>
              <button class="btn btn-large btn-primary btn-block" id="updatePass" onclick="alert('Opdateret!');">Opdater password</button>
            </div>
          </div>
      </div>
      <div class="tab-pane fade" id="v-pills-my-teams" role="tabpanel" aria-labelledby="v-pills-my-teams-tab">
      <div class="jumbotron">
      <h2 class="form-signin-heading">Mine hold</h2>
      <p>Tabellen har en horisontal scrollbar p&aring; mobile enheder</p>
        <table class="table table-striped table-responsive">
          <thead class="thead-dark">
            <tr>
              <th>Sport</th>
              <th>Niveau</th>
              <th>Tid</th>
              <th>Ugedag</th>
              <th>Startdato</th>
              <th>Slutdato</th>
              <th>Status</th>
            </tr>
            <tbody>
            <tr>
                <td>Sv&oslash;mning</td>
                <td>&oslash;vet</td>
                <td>16:30-20:00</td>
                <td>Torsdag</td>
                <td>10/01-2019</td>
                <td>14/03-2019</td>
                <td>Afsluttet</td>
              </tr>
              <tr>
                <td>Sv&oslash;mning</td>
                <td>Talent</td>
                <td>16:30-20:00</td>
                <td>Mandag</td>
                <td>01/04-2019</td>
                <td>01/06-2019</td>
                <td>(Anullerknap)</td>
              </tr>
              <tr>
                <td>Fitness</td>
                <td>Begynder</td>
                <td>14:00-15:00</td>
                <td>Onsdag</td>
                <td>27/03-2019</td>
                <td>31/07-2019</td>
                <td>(Betalingsknap)</td>
              </tr>
              <tr>
                <td>Gymnastik</td>
                <td>Lidt &oslash;vet</td>
                <td>15:00-17:00</td>
                <td>L&oslash;rdag</td>
                <td>13/04-2019</td>
                <td>25/05-2019</td>
                <td>(Betalingsknap)</td>
              </tr>
            </tbody>
          </thead>
        </table>
      </div>
      
      </div>
      <div class="tab-pane fade" id="v-pills-view-users" role="tabpanel" aria-labelledby="v-pills-view-users">
      <div class="jumbotron">
      <h2 class="form-signin-heading">Medlemmer</h2>
      <p>Tabellen har en horisontal scrollbar p&aring; mobile enheder</p>
        <table class="table table-striped table-responsive">
          <thead class="thead-dark">
            <tr>
              <th>Aktivitet</th>
              <th>Ugedag</th>
              <th>Fornavn</th>
              <th>Efternavn</th>
              <th>Startdato</th>
              <th>Slutdato</th>
              <th>Status</th>
            </tr>
            <tbody>
            <tr>
                <td>Sv&oslash;mning - &Oslash;vet</td>
                <td>Torsdag</td>
                <td>Jens</td>
                <td>Hansen</td>
                <td>10/03-2019</td>
                <td>14/05-2019</td>
                <td>Betalt</td>
              </tr>
              <tr>
                <td>L&oslash;b - Talent</td>
                <td>Mandag</td>
                <td>Karen</td>
                <td>Araragi</td>
                <td>01/04-2019</td>
                <td>01/06-2019</td>
                <td>Betalt</td>
              </tr>
              <tr>
                <td>Fitness - Begynder</td>
                <td>L&oslash;rdag</td>
                <td>Lone</td>
                <td>Jensen</td>
                <td>27/03-2019</td>
                <td>31/07-2019</td>
                <td>Ikke betalt</td>
              </tr>
              <tr>
                <td>Gymnastik - Lidt &oslash;vet</td>
                <td>Fredag</td>
                <td>Adam</td>
                <td>Taylor</td>
                <td>13/04-2019</td>
                <td>25/05-2019</td>
                <td>Ikke betalt</td>
              </tr>
            </tbody>
          </thead>
        </table>
      </div>
    </div>
      <div class="tab-pane fade" id="v-pills-manage-teams" role="tabpanel" aria-labelledby="v-pills-manage-teams-tab">
          TBI: Lav forme for "Nyt hold", "Slet Hold", "Nyt medlem", "Fjern medlem"
          <div class="jumbotron">
              <div class="container container-fluid">
                  <form class="form-signin">
                      <h2 class="form-signin-heading">Nyt hold</h2>
                      <div class="form-row">
                          <div class="form-group col-md-2"><label for="sport">Aktivitet</label>
                          <select name="Køn" id="sport" class="form-control">
                            <option value="swimming">Sv&oslash;mning</option>
                            <option value="running">L&oslash;b</option>
                            <option value="gymnastics">Gymnastik</option>
                            <option value="fitness">Fitness</option>
                          </select>
                        </div>
                          <div class="form-group col-md-2"><label for="ugedag">Ugedag</label>
                          <select name="ugedag" id="ugedag" class="form-control">
                            <option value="monday">Mandag</option>
                            <option value="tuesday">Tirsdag</option>
                            <option value="wednesday">Onsdag</option>
                            <option value="thursday">Torsdag</option>
                            <option value="friday">Fredag</option>
                            <option value="saturday">L&oslash;rdag</option>
                            <option value="sunday">S&oslash;ndag</option>
                          </select>
                        </div>
                          <div class="form-group col-md-2">
                          <label for="startTime">Startstidspunkt</label>
                          <input type="time" name="startTime" class="form-control" id="startTime">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="endTime">Sluttidspunkt</label>
                          <input type="time" name="endTime" class="form-control" id="endTime">
                        </div>
                        <div class="form-group col-md-2"><label for="startDate">Startsdato</label><input type="date" class="form-control" name="startDate" id="startDate"></div>
                        <div class="form-group col-md-2"><label for="endDate">Slutdato</label><input class="form-control" type="date" name="endDate" id="endDate"></div>
                      </div>
                      <button class="btn btn-primary btn-large btn-block">Opret Hold</button>
                  </form>
              </div>
          </div>
          <div class="jumbotron">
              <div class="container container-fluid">
                  <form action="" class="form-signin">
                      <h2 class="form-signin-heading">Slet hold</h2>
                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="Hold"></label>
                            <select name="Køn" id="sport" class="form-control">
                            <option value="swimming">Sv&oslash;mning - Tordsag</option>
                            <option value="running">L&oslash;b - Mandag</option>
                            <option value="gymnastics">Gymnastik - Fredag</option>
                            <option value="fitness">Fitness - Onsdag</option>
                          </select>
                          </div>
                      </div>
                      <button class="btn btn-danger btn-large btn-block">Slet hold</button>
                  </form>
              </div>
          </div>
          
      </div>
      <div class="tab-pane fade" id="v-pills-manage-users" role="tabpanel" aria-labelledby="v-pills-manage-users-tab">TBI: Lav forme for ban bruger, ny sport, fjern sport

      <div class="jumbotron">
              <div class="container container-fluid">
                  <form action="" class="form-signin">
                      <h2 class="form-signin-heading">Ban bruger</h2>
                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="Hold"></label>
                            <select name="Køn" id="sport" class="form-control">
                            <option value="fitness">JensHansen1234</option>
                            <option value="swimming">IldBi3810</option>
                            <option value="running">SomeEnglishAnon</option>
                            <option value="gymnastics">LonJensen</option>
                          </select>
                          </div>
                      </div>
                      <button class="btn btn-danger btn-large btn-block">Slet hold</button>
                  </form>
              </div>
          </div>

          <div class="jumbotron">
            <div class="container container-fluid">
              <form action="" class="form-signin">
                <h2 class="form-signin-heading"></h2>
                <div class="form-row">
                  <div class="form-group col-md-12"><label for=""></label><input type="text" class="form-control"></div>
                </div>
                <button class="btn btn-primary btn-large btn-block"></button>
              </form>
            </div>
          </div>



      </div>

    </div>
</div>

</div>


<?php require("footer.php"); ?>