<?php
// de functie isset() controleert of de variabele $_GET["content"] wel een waarde heeft.
if (isset($_GET["content"])) {
  $active = $_GET["content"];
} else {
  $active = "";
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php if ($active == "home") { echo "active";} ?>" aria-current="page" href="./index.php?content=home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($active == "JuiceWRLD") { echo "active";} ?>" href="./index.php?content=JuiceWRLD">JuiceWRLD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($active == "Merch") { echo "active";} ?>" href="./index.php?content=Merch">Merch</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($active == "Music") { echo "active";} ?>" href="./index.php?content=Music">Music</a>
      </li>
    </ul>
  </div>
</nav>