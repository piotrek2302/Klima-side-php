<?php

SESSION_START();
if (! EMPTY($_SESSION['bruker'] )) {
	
	header('Location: uvelkommen.html');

} else {
	$DISPLAYNAME = ['bruker'];
}

?>

<html>
<head>
    <link rel="stylesheet" href="FellesCSS.css">
    <title>Test Backend</title>
</head>
<body>
    
        <header class="hovedheader">
            <a href="default.html" class="logoen">LOGO</a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
            <ul class="menu">
                <li><a href="default.html">Logout</a></li>
            </ul>   
        </header>
        <div class="textbox1">
                
              <textarea id="subject" name="subject" placeholder="Velkomen" readonly style="height:200px; width:55%; margin-top:2em;"></textarea> 
        </div>
            
        
    
        <footer class="hovedfooter">
                <section class="lenker_footer">
                <a href="">Om oss</a>
                <a href="">Sidekart</a>
                <a href="">Kariarre</a>
                <a href="">Støtt oss</a>
                <a href="">In English</a>
                </section>
                <section class="copyright">Gruppe 30 | copyright 2019</section>
        </footer>
</body>
</html>