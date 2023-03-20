<!DOCTYPE html>
<html>
	<title>Satire Station - We F*** Everyone</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="JS/jquery.js"></script>
    <script type="text/javascript" src="JS/support.js"></script>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="CSS/style1.css" rel="stylesheet" type="text/css">
	<body >
    	<nav class="w3-sidenav w3-black w3-card-2 w3-animate-left w3-medium" style="display:none">
            <center><a href="javascript:void(0)" 
            onclick="w3_close()"
            class="w3-closenav w3-large fa fa-arrow-left"></a>
            <a href="#">Articles</a>		
            <a href="#">Latest</a>		
            <a href="#">Authors</a>		
            <a href="#">Categories</a></center>
		</nav>
        <div id="main" class="w3-animate-left">
    		<div class="w3-row header w3-lime w3-card-4"><h1 class="w3-padding-medium myfont"><img src="IMGs/logo.gif" height="64" width="64" class="w3-image"/>Sattire Station</h1></div>
                <div class="w3-row w3-black w3-card-2 w3-topnav">
                <h3 class="w3-padding-medium">
                    <nav>
                   		<div id="articles" class="w3-row w3-ul w3-hide">
                                <a href="#">A</a>		
                                <a href="#">B</a>		
                                <a href="#">C</a>
                            </div>
                        <div id="latest" class="w3-row w3-ul w3-hide">
                                <a href="#">A</a>		
                                <a href="#">B</a>		
                                <a href="#">C</a>
                            </div>	
                        <span class="w3-large" onclick="w3_open();" style="cursor:pointer">&#9776;</span>
                        <a href="#" onClick="">Articles</a>
                            		
                        <a href="#" onClick="">Latest</a>
                        		
                        <a href="#">Authors</a>		
                        <a href="#">Categories</a>		
                    </nav>
                </h3>
            </div> 
            <div class="w3-row w3-padding-jumbo">
            	<div class="w3-col m3 w3-container mycell "><?php require("content.php")?></div>
                <div class="w3-col m3 w3-container mycell "><?php require("content2.php")?></div>
                <div class="w3-col m3 w3-container mycell "><?php require("content.php")?></div>
            </div>
            <div class="w3-row w3-padding-jumbo">
            	<div class="w3-col m3 w3-container mycell "><?php require("content.php")?></div>
                <div class="w3-col m3 w3-container mycell "><?php require("content2.php")?></div>
                <div class="w3-col m3 w3-container mycell "><?php require("content.php")?></div>
            </div>
           
        </div>
    
    
    <script type="text/javascript">
		function w3_open() {
			document.getElementById("main").style.marginLeft = "25%";
			document.getElementsByClassName("w3-sidenav")[0].style.width = "25%";
			document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
			document.getElementsByClassName("w3-topnav")[0].style.display = 'none';
		}
		function w3_close() {
			document.getElementById("main").style.marginLeft = "0%";
			document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
			document.getElementsByClassName("w3-topnav")[0].style.display = "block";
		}
    </script>
    </body>
</html>