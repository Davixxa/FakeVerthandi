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
                  <div class="form-group col-md-6"><label for="birthdate">Fødselsdag</label><input type="date" name="inputBirthdate" id="birthdate" class="form-control"></div>
                  <div class="form-group col-md-6"><label for="gender">Køn</label>
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
      TBI: Lav knapper
        <table class="table table-striped">
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
                <td>Svømning</td>
                <td>Øvet</td>
                <td>16:30-20:00</td>
                <td>Torsdag</td>
                <td>10/01-2019</td>
                <td>14/03-2019</td>
                <td>Afsluttet</td>
              </tr>
              <tr>
                <td>Svømning</td>
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
                <td>Lidt øvet</td>
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
      <div class="tab-pane fade" id="v-pills-manage-teams" role="tabpanel" aria-labelledby="v-pills-manage-teams-tab">TBI: Lav forme for "Nyt hold", "Slet Hold", "Nyt medlem", "Fjern medlem"</div>
      <div class="tab-pane fade" id="v-pills-manage-users" role="tabpanel" aria-labelledby="v-pills-manage-users-tab">TBI: Lav forme for ban bruger, ny sport, fjern sport</div>
    </div>
  </div>
</div>

</div>


<?php require("footer.php"); ?>