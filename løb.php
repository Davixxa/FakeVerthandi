<?php require("header.php") ?>
<div class="container">
  <br>

  <div class="jumbotron">
      <h1 class="display-4">Løb</h1>
      <p class="lead">Vi har forskellige niveauer indenfor løb</p>
      <hr class="my-4">
      <p>Vi har alt fra nybegyndere, lidt øvet, øvet, mini talent og talent.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Læs mere</a>
    </div>
    <div class="list-group">
      <button type="button" class="list-group-item list-group-item-action active">
        Hold
      </button>
      <button type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#nybegynderCollapse" aria-expanded="false" aria-controls="nybegynderCollapse">Nybegyndere</button>
      <div id="nybegynderCollapse" class="collapse">
			<div class="list-group-item list-group-item-action">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt placeat voluptatem veniam, suscipit rem inventore officiis repellendus. Repellendus deserunt officiis itaque at soluta, dolores, excepturi, voluptatem harum tempore dolorem in!</div>
		</div>
    <button type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#lidtOevetCollapse" aria-expanded="false" aria-controls="lidtOevetCollapse">Lidt &oslash;vet</button>
      <div id="lidtOevetCollapse" class="collapse">
			<div class="list-group-item list-group-item-action">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt placeat voluptatem veniam, suscipit rem inventore officiis repellendus. Repellendus deserunt officiis itaque at soluta, dolores, excepturi, voluptatem harum tempore dolorem in!</div>
		</div>
    </div>
    <button type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#OevetCollapse" aria-expanded="false" aria-controls="OevetCollapse">&Oslash;vet</button>
      <div id="OevetCollapse" class="collapse">
			<div class="list-group-item list-group-item-action">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt placeat voluptatem veniam, suscipit rem inventore officiis repellendus. Repellendus deserunt officiis itaque at soluta, dolores, excepturi, voluptatem harum tempore dolorem in!</div>
		</div>
    <button type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#minitalentCollapse" aria-expanded="false" aria-controls="minitalentCollapse">Mini talent</button>
      <div id="minitalentCollapse" class="collapse">
			<div class="list-group-item list-group-item-action">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt placeat voluptatem veniam, suscipit rem inventore officiis repellendus. Repellendus deserunt officiis itaque at soluta, dolores, excepturi, voluptatem harum tempore dolorem in!</div>
		</div>
    <button type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#talentCollapse" aria-expanded="false" aria-controls="talentCollapse">Talent</button>
      <div id="talentCollapse" class="collapse">
			<div class="list-group-item list-group-item-action">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt placeat voluptatem veniam, suscipit rem inventore officiis repellendus. Repellendus deserunt officiis itaque at soluta, dolores, excepturi, voluptatem harum tempore dolorem in!</div>
		</div>
    </div>


</div>

  <?php require("footer.php") ?>