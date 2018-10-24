<!DOCTYPE html>
<!--by Jakub Pelc & Matěj Douša-->
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Stopařův průvodce po GBN</title>
  </head>
  <body>
   <a href="http://www.gbn.cz"><img class=logo alt="školní web" src="./logogbn.png"></a>
   <button id="login" type="button" class="right btn btn-primary" data-toggle="modal" data-target="#exampleModal">Přihlášení</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Přihlášení</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
		<div class="modal-body">
            <div id="space">
            </div>
            <div id="container">
        <form action="verify.php" method="POST">
<?php
if (isset($_GET["wrongdata"])){
	echo "<div class=\"group\" style=\"text-align: center; font-size: 16px; color: #4A89DC; font-style: italic;\">Invalid username or password!</div>";
}
if (isset($_GET["logout"])){
  echo "<div class=\"group\" style=\"text-align: center; font-size: 14px; color: #38b200; font-style: italic;\">You Have Been Succesfully Logged Out. See You Soon!</div>";
} if (!isset($_GET["wrongdata"]) and !isset($_GET["logout"])) echo "<br>";
?>
			<div class="formgroup"><i><input type="text" name="login" placeholder="Uživatelské jméno" required><span class="bar"></span></i></div>
			<div class="formgroup"><i><input type="password" name="password" placeholder="Heslo" required><span class="bar"></span></i></div>
			<input type="submit" class="submit btn btn-primary" name="ok" value="Přihlásit se">
		</form>
			</div>
          </div>
        </div>
      </div>
    </div>
   <h1 class="Nadpis">Stopařův průvodce po Gymnáziu Benešov</h1>
   <br>



<div id="str">
<button type="button" id="button1" class="btn btn-dark center bfade1 sizey">Osmileté gymnázium</button>
</div>


<div id="text1"class="center">
<a id="tlc1" class="btn btn-dark bfade1 sizex" href="./tridy/prima.php" role="button">Prima</a>
<a id="tlc1"class="btn btn-dark bfade1 sizex" href="./tridy/sekunda.php" role="button">Sekunda</a>
<a id="tlc1" class="btn btn-dark bfade1 sizex" href="./tridy/tercie.php" role="button">Tercie</a>
<a id="tlc1" class="btn btn-dark bfade1 sizex" href="./tridy/kvarta.php" role="button">Kvarta</a>
<a id="tlc1" class="btn btn-dark bfade1 sizex" href="./tridy/kvinta.php" role="button">Kvinta</a>
<a id="tlc1" class="btn btn-dark bfade1 sizex" href="./tridy/sexta.php" role="button">Sexta</a>
<a id="tlc1" class="btn btn-dark bfade1 sizex" href="./tridy/septima.php" role="button">Septima</a>
<a id="tlc1" class="btn btn-dark bfade1 sizex" href="./tridy/oktava.php" role="button">Oktáva</a>
</div>


<div id="str">
<button type="button" id="button2" class="btn btn-info center bfade2 sizey">Čtyřleté gymnázium</button>
</div>


<div id="text2" class="center">
  <a id="tlc2" class="btn btn-info bfade2 sizez" href="./tridy/prvak.php" role="button">První ročník</a>
  <a id="tlc2"class="btn btn-info bfade2 sizez" href="./tridy/druhak.php" role="button">Druhý ročník</a>
  <a id="tlc2" class="btn btn-info bfade2 sizez" href="./tridy/tretak.php" role="button">Třetí ročník</a>
  <a id="tlc2" class="btn btn-info bfade2 sizez" href="./tridy/ctvrtak.php" role="button">Čtvrtý ročník</a>
</div>

<?php
	include 'vs_a_maturita.php'	  
?>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
  $("#text1").hide();
  $('#button1').click(function(){
    $("#text1").toggle();
  });
</script>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
  $("#text2").hide();
  $('#button2').click(function(){
  $("#text2").toggle();
  });
</script>
<script src="form.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
