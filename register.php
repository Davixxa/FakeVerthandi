<?php require("header.php"); ?>

<br><br>

<!-- Start af Row i Bootstrap grid system -->

<div class="container container-fluid">
<div class="row">

    <!-- Bootstraps gridsystem kører på 12 kolonner. Ved at lave en tom trekolonners div skubber jeg den ud i midten, da den reele er 6 lang. -->

    <div class="col-3"></div>
<div class="jumbotron col-6">
    <div class="container container-fluid">
        
    <!-- Form magi - nemmere forklaret sammen -->

        <form class="form-signin">
            <h2 class="form-signin-heading">Registrer</h2>
            <!-- <p>Bemærk at der ikke understøttes æ/ø/å i databasen. Brug istedet ae/oe/aa. Dette gælder også for store bogstaver.</p> -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFirstName">Fornavn</label>
                    <input type="text" id="inputFirstName" name="firstName" class="form-control" placeholder="Fornavn" required autofocus>
                </div>
            
                <div class="form-group col-md-6">
                    <label for="inputLastName">Efternavn</label>
                    <input type="text" id="inputLastName" name="lastName" class="form-control" placeholder="Efternavn" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputUsername">Brugernavn</label>
                <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Brugernavn" required>
            </div>
            <div class="form-group">
                <label for="inputSignUpEmail">E-mail Addresse</label>
                <input type="email" id="inputSignUpEmail" class="form-control" name="email" placeholder="E-mail Addresse" required >
            </div>
            <div class="form-group">
                <label for="inputSignUpPassword">Password</label>
                <input type="password" id="inputSignUpPassword" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="inputPasswordConfirm">Gentag Password</label><span id="trumpWrong" style="color: red;"></span>
                <input type="password" id="inputPasswordConfirm" class="form-control" name="repeatPassword" placeholder="Gentag Password" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="birthdate">Fødselsdato</label>
                    <input type="date" id="birthdate" class="form-control" name="birthDate" required>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="gender">Køn</label>
                    <select id="gender" class="form-control" name="gender" size=2 required>
                        <option value="female">Kvinde</option>
                        <option value="male">Mand</option>
                    </select>
                </div>
            </div>
            <div class="checkbox">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" value="read-tos" class="custom-control-input" required> 
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Jeg har læst og er enig med vores <a href="#tbi">Brugerbetingelser</a>.</span>
            </label>

            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-large btn-block" type="submit" id="register">Registrer</button>
            </div>
        </form>

        <!-- Divider, samt tilbage til start og login-side knap -->
        <hr class="featurette-divider" /> 
        <a href="index.php"> &lt;-Tilbage til start</a>
        <a href="#" data-toggle="modal" data-target ="#loginModal" class="float-right">Har du allerede en bruger? Log ind!</a>

        </div>
</div>

<!--Kommentar, som skaber en sidste bootstrap kolonne, for at bruge alle Bootstraps 12 kolonner-->
<div class="col-3"></div>
</div>

</div>

<?php require("footer.php"); ?>