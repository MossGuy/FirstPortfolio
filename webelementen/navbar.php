<nav class=" fixed-top">
    <div class="navbar navbar-expand-sm d-flex justify-content-between mx-4">
        <p class="fw-bold mb-0 fs-5 me-auto">Mijn web portfolio</p>
        <button class="navbar-toggler me-4 icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-flower3 h5"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="navbar-nav d-flex flex-row align-items-baseline ms-auto">
                <a class="nav-item m-1 p-1 fw-semibold" href="./index.php">Home</a>
                <?PHP echo return_login_button(); ?>
                <div class="kleuren_kiezer ms-auto">
                    <p>Kleuren thema</p>
                    <form class="kleuren_kiezer" action="" method="post">
                        <input class="kleur" type="submit" name="kleur" id="kleur" , value="Basis wit">
                        <input class="kleur" type="submit" name="kleur" id="kleur" , value="Nacht zwart">
                        <input class="kleur" type="submit" name="kleur" id="kleur" , value="Perzik roze">
                        <input class="kleur" type="submit" name="kleur" id="kleur" , value="Moss groen">
                        <input class="kleur" type="submit" name="kleur" id="kleur" , value="Marine blauw">
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<br><br>

<div id="exampleModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog bg-transparent">
        <div class="modal-content">
            <div class="modal-header border-2">
                <h2 class="highlight">Welkom!</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="modal-body d-flex flex-row" action="./" method="post">
                <div>
                    <label class="mb-2" for="gebruikersnaam">Gebruikersnaam:</label>
                    <label for="wachtwoord">Wachtwoord:</label>
                </div>
                <div>
                    <input class="rounded border border-0 mb-2 textbox" type="text" name="gebruikersnaam" id="gebruikersnaam">
                    <input class="rounded border border-0 textbox" type="text" name="wachtwoord" id="wachtwoord">
                </div>
                <input class="button_css rounded" type="submit" name="login" id="login" value="Log in">
            </form>
            <div class="modal-body">
                <p>Mijn log-in module is uitsluitend bedoeld voor werkgevers of mensen die ik persoonlijk ken.</p>
                <!-- <p>Er is wellicht een ander account die wel voor het bubliek toegankelijk is. <br>Wie goed kan zoeken...</p> -->
            </div>
        </div>
    </div>
</div>