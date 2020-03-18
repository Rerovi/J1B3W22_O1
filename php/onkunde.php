<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Onkunde!</title>
</head>
<body>
<h1>MAD LIBS</h1>
<?php
$_showForm = true;
if (isset($_GET["kunnen"]) && isset($_GET["opschieten"]) && isset($_GET["getal"]) && isset($_GET["vakantie"]) && isset($_GET["goede"])
    && isset($_GET["slechte"]) && isset($_GET["ergste"])) {
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
        <h3>Onkunde</h3>
        <form action="onkunde.php" method="get">
            <label>Wat zou je graag willen kunnen? </label><input class="input1" name="kunnen"><br><br>
            <label>Met welke persoon kun je goed opschieten?</label><input class="input1" type="text"
                                                                          name="opschieten"><br><br>
            <label>Wat is je favoriete getal?</label><input class="input1" type="text" name="getal"><br><br>
            <label>Wat heb je altijd bij je als je op vakantie gaat?</label><input class="input1" type="text"
                                                                                   name="vakantie"><br><br>
            <label>Wat is je beste persoonlijke eigenschap?</label><input class="input1" type="text"
                                                                          name="goede"><br><br>
            <label>Wat is je slechste persooonlijke eigenschap?</label><input class="input1" type="text" name="slechte"><br><br>
            <label>Wat is het ergste dat je kan overkomen?</label><input class="input1" type="text"
                                                                         name="ergste"><br><br>
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
    echo "<h3>Onkunde</h3>";
    echo "<h3 class='Txt'>"."Er zijn veel mensen die niet kunnen " . ($_GET["kunnen"]) . ". Neem nou " . ($_GET["opschieten"]) . ". Dat heeft niet te maken met
      gebrek van skill of geduld, maar met een te veel aan " . ($_GET["goede"]) . ". Te veel " . ($_GET["goede"]) . "leidt tot " . ($_GET["slechte"]) .
        "en dat is niet goed als je wilt " . ($_GET["kunnen"]) . ". Helaas voor " . ($_GET["opschieten"]). ".". '</h3>';
    echo "</div>";
    echo "<footer>". "<p class='copyright'>&copy; Robert Visser 2020</p>". "</footer>";
}
?>
</body>
</html>
