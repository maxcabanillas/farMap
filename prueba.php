<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Effects - toggleClass Demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .toggler { width: 500px; height: 200px; position: relative; }
  #button { padding: .5em 1em; text-decoration: none; }
  #effect {position: relative;  width: 0px;  padding: 1em; letter-spacing: 0; font-size: 1.2em; border: 1px solid #000; background: #eee; color: #333; }
  .newClass { text-indent: 40px; letter-spacing: .4em; width: 410px; height: 100px; padding: 30px; margin: 10px; font-size: 1.6em; }
  </style>
  <script>
  $(function() {
    $( "#button" ).click(function() {
      $( "#effect" ).toggleClass( "newClass", 1000 );
      return false;
    });
  });
  </script>
</head>
<body>
 
<div class="toggler">
  <div id="effect" class="newClass ui-corner-all">
      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede.
  </div>
</div>
 
<a href="#" id="button" class="ui-state-default ui-corner-all">Run Effect</a>
 
 
</body>
</html>