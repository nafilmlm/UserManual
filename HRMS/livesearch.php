<html>
  <head>
<script type="text/javascript" src="scripts.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
  <body>
    <p><strong>Try typing a name into the below input field:</strong></p>
    <form> 
      First name: <input type="text" onkeyup="showHint(this.value)">
    </form>
    <p>Possible suggestions: <span id="txt_hint"></span></p>
  </body>
</html>