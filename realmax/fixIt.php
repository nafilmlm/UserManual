
<!DOCTYPE html>

<html lang="English">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>General &#8212; Gears 14.0 documentation</title>
 

    <link rel="stylesheet" href="_static/pygments.css" type="text/css" />
    <link rel="stylesheet" href="_static/style.css" type="text/css" />
    
    
    <script id="documentation_options" data-url_root="../" src="../_static/documentation_options.js"></script>
    <script src="../_static/jquery.js"></script>
    <script src="../_static/underscore.js"></script>
    <script src="../_static/doctools.js"></script>
    <script src="../_static/utils.js"></script>
    <script src="../_static/layout.js"></script>
    <script src="../_static/menu.js"></script>
    <script src="../_static/page_toc.js"></script>
    <script src="../_static/switcher.js"></script> 
    <script src="../_static/bootstrap.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../_static/favicon.ico"/>
        <link rel="alternate" hreflang="zh" href="../applications/general.php" />
        <link rel="alternate" hreflang="fr" href="../applications/general.php" />
        <link rel="alternate" hreflang="es" href="../applications/general.php" />
        <link rel="alternate" hreflang="uk" href="../applications/general.php" />
    <link rel="canonical" href="../applications/general.php" />
    
    <link rel="index" title="Index" href="../genindex.html" />
    <link rel="search" title="Search" href="../search.html" />
    <link rel="next" title="Basics" href="general/odoo_basics.html" />
    <link rel="prev" title="Users and Features" href="settings/users_and_features.html" /> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    

  <style>
  /* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 350px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  padding-top: 130px;
  padding-left: 65px;

}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-family : sans-serif;
  font-weight : normal;
  font-size: 14px;
  color: #915a82;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;  
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #633156;
  text-decoration: underline;
  
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: white;
  color: #633156;

}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: white;
  padding-left: 8px;
  
}

/* Optional: Style the caret down icon */
.fa-angle-right {
  float: left;
  padding-right: 8px; 
}

.fa-angle-down {
  float: left;
  padding-right: 8px; 
}


.purple-color {
color:purple;
}

/* width */
::-webkit-scrollbar {
  width: 6px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #5e2a50;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #5e2a50;
  
}


        
  </style>

  </head><body>
 

      
    <header class="o_main_header border-bottom navbar navbar-light navbar-expand-lg"><div class="o_logo_wrapper">
      <a href="../index.html" class="o_logo">
          <img  src="../images/logo.png" style="width:75px; height:65px;" type="image"   alt="Gears"/>
      </a>
</div>
<div id="searchbox" class="o_search_wrapper flex-grow-1 pe-lg-2" role="search">
   


    <input class="form-control" id="myInput" type="text" placeholder="Enter Keyword to Search...">


</div>
<script type="text/javascript">$('.o_search_wrapper').show(0);</script>
<div class="d-none d-lg-flex"><div class="o_languages me-3">
	<div class="dropdown">
            <button class="btn border dropdown-toggle"
                    id="languages"
                    data-bs-toggle="dropdown">
                English 
            </button>
        <ul class="dropdown-menu" aria-labelledby="languages">
                <li><a class="dropdown-item" href="https://www.odoo.com/documentation/14.0/zh_CN/applications/general.html">简体中文</a></li>
                <li><a class="dropdown-item" href="https://www.odoo.com/documentation/14.0/fr/applications/general.html">Français</a></li>
                <li><a class="dropdown-item" href="https://www.odoo.com/documentation/14.0/es/applications/general.html">Español</a></li>
                <li><a class="dropdown-item" href="https://www.odoo.com/documentation/14.0/uk/applications/general.html">українська</a></li>
        </ul>
	</div>
</div><div class="o_versions row gx-2 me-3">
	<div class="col col-form-label">
    	<label class="fw_bold small me-2">Version</label>
    </div>
    <div class="col">
        <div class="dropdown">
                <button class="btn border dropdown-toggle"
                        id="versions"
                        data-bs-toggle="dropdown">
                    14.0 
                </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="versions">
                    <li><a class="dropdown-item" href="https://www.odoo.com/documentation/13.0/applications/general.html">13.0</a></li>
                    <li><a class="dropdown-item" href="https://www.odoo.com/documentation/12.0/applications/general.html">12.0</a></li>
            </ul>
        </div>
    </div>
</div>
    <a class="btn btn-primary fw_semibold" href="https://odoo.com/trial">Try Gears for FREE</a>
</div>
        <button class="navbar-toggler pe-3 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#o_main_toctree" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </header>
    <div class="related" role="navigation" aria-label="related navigation">
      <h3>Navigation</h3>
      <ul>
        <li class="right" style="margin-right: 10px">
          <a href="../genindex.html" title="General Index"
             accesskey="I">index</a></li>
        <li class="right" >
          <a href="../py-modindex.html" title="Python Module Index"
             >modules</a> |</li>
        <li class="right" >
          <a href="general/odoo_basics.html" title="Basics"
             accesskey="N">next</a> |</li>
        <li class="right" >
          <a href="settings/users_and_features.html" title="Users and Features"
             accesskey="P">previous</a> |</li>
        <li class="nav-item nav-item-0"><a href="../index.html">Odoo 14.0 documentation</a> &#187;</li>
          <li class="nav-item nav-item-1"><a href="../applications.html" accesskey="U">Applications</a> &#187;</li>
        <li class="nav-item nav-item-this"><a href="">General</a></li> 
      </ul>
    </div>
    <div id="wrap">



 

<div style="padding-left:180px; width: 100%;"}>
  <iframe id="myiFrame"  style="width:1180px; height:900px; margin-top:-60px; " src="https://docs.google.com/document/d/1AEiiAJsvx1-hfiHK84UBWxmoJG3qsnvgT24EaGqHwSk/edit?usp=sharing" > </iframe>


                        <script>
                        $(document).ready(function(){
                          $("#myInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#myiFrame").filter(function() {
                              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                          });
                        });
                        </script>

  </div>

    </footer>
    <div class="related" role="navigation" aria-label="related navigation">
      <h3>Navigation</h3>
      <ul>
        <li class="right" style="margin-right: 10px">
          <a href="../genindex.html" title="General Index"
             >index</a></li>
        <li class="right" >
          <a href="../py-modindex.html" title="Python Module Index"
             >modules</a> |</li>
        <li class="right" >
          <a href="general/odoo_basics.html" title="Basics"
             >next</a> |</li>
        <li class="right" >
          <a href="settings/users_and_features.html" title="Users and Features"
             >previous</a> |</li>
        <li class="nav-item nav-item-0"><a href="../index.html">Odoo 14.0 documentation</a> &#187;</li>
          <li class="nav-item nav-item-1"><a href="../applications.html" >Applications</a> &#187;</li>
        <li class="nav-item nav-item-this"><a href="">General</a></li> 
      </ul>
    </div><script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-52174891-1', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('send','pageview');
</script>

<script>
//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>



  </body>
</html>