<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Paniek!</title>
</head>
<body>
<h1>MAD LIBS</h1>
<?php
$_showForm = true;
if (isset($_GET["huisdier"]) && isset($_GET["belangrijk"]) && isset($_GET["land"]) && isset($_GET["verveel"]) && isset($_GET["speelgoed"])
    && isset($_GET["spijbel"]) && isset($_GET["geld"]) && isset($_GET["bezig"])) {
    $_showForm = false;
} else {
    $_showForm = true;
}
if ($_showForm == true) {
    ?>
    <div class="container">
        <nav>
            <a href="paniek.php">Er heerst paniek...</a>
            <a href="onkunde.php">Onkunde</a>
        </nav>
        <h3>Er heerst paniek...</h3>
        <form action="paniek.php" method="get">
            <label>Welk dier zou je nooit als huisdier willen hebben?</label><input class="input1" type="text"
                                                                                    name="huisdier"><br><br>
            <label>Wie is de belangrijkste persoon in je leven?</label><input class="input1" type="text"
                                                                              name="belangrijk"><br><br>
            <label>In welk land zou je graag willen wonen?</label><input class="input1" type="text" name="land"><br><br>
            <label>Wat doe je als je je verveelt?</label><input class="input1" type="text" name="verveel"><br><br>
            <label>Met wel speelgoed speelde je als kind het meest?</label><input class="input1" type="text"
                                                                                  name="speelgoed"><br><br>
            <label>Bij welk docent spijbel je het liefst?</label><input class="input1" type="text"
                                                                        name="spijbel"><br><br>
            <label>Als je € 100.00,- had, wat zou je dan kopen? </label><input class="input1" type="text"
                                                                               name="geld"><br><br>
            <label>Wat is je favoriete bezigheid?</label><input class="input1" type="text" name="bezig"<br><br><br>
            <input class="submit" type="submit">
        </form>
    </div>
    <footer>
        <p class="copyright">&copy; Robert Visser 2020</p>
    </footer>
    <?php
} else {
    echo "<div class='container'>";
    echo "<nav>";
    echo "<a href=\"paniek.php\">Er heerst paniek...</a>";
    echo "<a href=\"onkunde.php\">Onkunde</a>";
    echo "</nav>";
    echo "<h3>Er heerst paniek...</h3>";
    echo  "Er heerst paniek in het koninkrijk ". ($_GET["land"]) .". Koning ".($_GET["spijbel"]).
        " is ten einde raad en als koning ". ($_GET["spijbel"]). " ten einde raad is, dan roept hij zijn ten-einde-raadsheer "
        . ($_GET["belangrijk"]). "."."<br>"."<br>";
    echo '"' . ($_GET["belangrijk"]).'! Het is een ramp! Het is een schande!"'.'<br><br>';
    echo '" Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"'.'<br><br>';
    echo '"Mijn ' .($_GET["huisdier"]). " is verdwenen! Zo maar, zonder waarschuwing. En ik had net ". ($_GET["speelgoed"]).
         ' voor hem gekocht!"'.'<br><br>';
    echo '"Majesteit, uw '.($_GET["huisdier"]). ' komt vanzelf weer terug?"'. "<br><br>";
    echo '"Ja, '."da's leuk en aardig, maar hoe moet ik in de tussentijd ". ($_GET["bezig"]).' leren?"<br><br>';
    echo '"Maar Sire, daar kunt u toch uw '.($_GET["geld"]). ' voor gebruiken."<br><br>';
    echo '"'. ($_GET["belangrijk"]). ', je hebt gelijk! Wat zou ik doen als ik jou niet had."<br><br>';
    echo '"Mij '. ($_GET["verveel"]). ' Sire."';
    echo "</div>";
    echo "<footer>" . "<p class='copyright'>&copy; Robert Visser 2020</p>" . "</footer>";
}
?>
</body>
</html>
