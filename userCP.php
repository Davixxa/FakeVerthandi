<?php
$loggedin = true;
$pagetitle = "Min Idrætsforening | Brugerkontrolpanel";
require("header.php"); 
?>

<div class="container"><br>
    <div class="jumbotron">
    <h1 class="display-3">Brugerkontrolpanel</h1>
    <span></span><p class="lead">Her kan du tilmelde og framelde dig forskellige hold.</p>
    </div>


    <div class="row">
  <div class="col-md-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-my-info-tab" data-toggle="pill" href="#v-pills-my-info" role="tab" aria-controls="v-pills-my-info" aria-selected="true">Mine oplysninger</>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Mine hold</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"></a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-my-info" role="tabpanel" aria-labelledby="v-pills-my-info-tab">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, cumque? Consequuntur veritatis modi rerum hic, optio doloribus libero recusandae esse eum animi quos ad iusto in. Pariatur recusandae exercitationem consequuntur sint, tenetur beatae esse fugiat impedit libero laborum vel. Non facere doloribus dignissimos deleniti corporis distinctio rerum, consequatur blanditiis eaque?
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
  </div>
</div>

</div>


<?php require("footer.php"); ?>