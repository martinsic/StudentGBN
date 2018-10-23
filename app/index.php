<!DOCTYPE html>
<!--by Jakub Pelc-->
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Stopařův průvodce po Gymnáziu Benešov</title>
  </head>
  <body>
   <a href="http://www.gbn.cz"><img class=logo alt="školní web" src="./logogbn.png"></a>
   <a class="right login" href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ltmpl=default&hd=gbn.cz&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin#identifier"><p1>Login</p1> </a>
   <h1 class="Nadpis">Stopařův průvodce po Gymnáziu Benešov</h1>
   <br>
<div id="str">
<button type="button" id="button1" class="btn btn-dark center bfade1">Osmileté gymnázium</button>
</div>
<div id="text1">
<a id="tlc1" class="btn btn-dark bfade1" href="www.gbn.cz/ca2018/#prima" role="button">Prima</a>
<a id="tlc1"class="btn btn-dark bfade1" href="www.gbn.cz/ca2018/#sekunda" role="button">Sekunda</a>
<a id="tlc1" class="btn btn-dark bfade1" href="www.gbn.cz/ca2018/#tercie" role="button">Tercie</a>
<a id="tlc1" class="btn btn-dark bfade1" href="www.gbn.cz/ca2018/#kvarta" role="button">Kvarta</a>
<a id="tlc1" class="btn btn-dark bfade1" href="www.gbn.cz/ca2018/#kvinta" role="button">Kvinta</a>
<a id="tlc1" class="btn btn-dark bfade1" href="www.gbn.cz/ca2018/#sexta" role="button">Sexta</a>
<a id="tlc1" class="btn btn-dark bfade1" href="www.gbn.cz/ca2018/#septima" role="button">Septima</a>
<a id="tlc1" class="btn btn-dark bfade1" href="www.gbn.cz/ca2018/#oktáva" role="button">Oktáva</a>
</div>
<div id="str">
<button type="button" id="button2" class="btn btn-info center bfade2">Čtyřleté gymnázium</button>
</div>
<div id="text2">
  <a id="tlc2" class="btn btn-info bfade2" href="www.gbn.cz/ca2018/#prvak" role="button">První ročník</a>
  <a id="tlc2"class="btn btn-info bfade2" href="www.gbn.cz/ca2018/#druhak" role="button">Druhý ročník</a>
  <a id="tlc2" class="btn btn-info bfade2" href="www.gbn.cz/ca2018/#tretak" role="button">Třetí ročník</a>
  <a id="tlc2" class="btn btn-info bfade2" href="www.gbn.cz/ca2018/#ctvrtak" role="button">Čtvrtý ročník</a>
</div>
<div id="str">
<a id="tlc3"class="btn btn-success bfade3" href="www.gbn.cz/ca2018/#aktivity" role="button">List všech aktivit</a>
</div>

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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
