<?php


function render_header() {
    echo ' <div class="top">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    <!-- e ueb sajtit duhet të përmbaj patjetër këto meny: Home,
    Lëndët, Detyrat e mia, Vlerësimet, Dorëzo detyrën, FAQ. Profili, -->
    <img class="logo" src="../../resources/assets/images/logo.png" alt="Logo" style="width:110px">
  </div>    
   <br><br>
   <div id="mySidenav" class="sidenav">
      <img src="../../resources/assets/images/prof_img1.jpg" alt="Avatar" style="width: 100px">
      <br><br>
      <form>
        <span style="margin-left:25px"> <label name="emri_studenti" >  ' . $studenti->getStudent_name() . " " . $studenti->getStudent_surname() . ' </label><br></span>
      </form>
      <p>Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike</p>
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="studentpage.php">Home</a>
      <br><br>
      <p class="asd">Menyte</p>
    
      <a href="lendet.php">Lëndët</a>
      <a href="detyrat.php">Detyrat e mia</a>
      <a href="dorezo_lenden.php">Dorëzo detyrën</a>
      <a href="vleresimet.php">Vlerësimet</a>
      <a href="../../FAQ.php">FAQ</a>
      <a href="profili.php">Profili</a>
    </div>';
}

?>