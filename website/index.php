<!DOCTYPE html>
<html>
<head>
    <title>List of Directories</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<style>
    /* Add some padding on document's body to prevent the content
    to go underneath the header and footer */
    body{        
        padding-top: 60px;
        padding-bottom: 40px;
        background-color: transparent;
    }
    .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        background: #333;
        padding: 10px 0;
        color: #fff;
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
    .transparent-row {
        background-color: transparent;
    }html {
  --s: 100px; /* control the size */
  --c1: #C3CCAF;
  --c2: #67434F;
  
  --_s: calc(2*var(--s)) calc(2*var(--s));
  --_g: var(--_s) conic-gradient(at 40% 40%,#0000 75%,var(--c1) 0);
  --_p: var(--_s) conic-gradient(at 20% 20%,#0000 75%,var(--c2) 0);
  background:
    calc( .9*var(--s)) calc( .9*var(--s))/var(--_p),
    calc(-.1*var(--s)) calc(-.1*var(--s))/var(--_p),
    calc( .7*var(--s)) calc( .7*var(--s))/var(--_g),
    calc(-.3*var(--s)) calc(-.3*var(--s))/var(--_g),
    conic-gradient(from 90deg at 20% 20%,var(--c2) 25%,var(--c1) 0) 
     0 0/var(--s) var(--s);
  animation: m 3s infinite;
}
@keyframes m {
  0% {
   background-position: 
    calc( .9*var(--s)) calc( .9*var(--s)),
    calc(-.1*var(--s)) calc(-.1*var(--s)),
    calc( .7*var(--s)) calc( .7*var(--s)),
    calc(-.3*var(--s)) calc(-.3*var(--s)),0 0
  }
  25% {
   background-position: 
    calc(1.9*var(--s)) calc( .9*var(--s)),
    calc(-1.1*var(--s)) calc(-.1*var(--s)),
    calc(1.7*var(--s)) calc( .7*var(--s)),
    calc(-1.3*var(--s)) calc(-.3*var(--s)),0 0
  }
  50% {
   background-position: 
    calc(1.9*var(--s)) calc(-.1*var(--s)),
    calc(-1.1*var(--s)) calc( .9*var(--s)),
    calc(1.7*var(--s)) calc(-.3*var(--s)),
    calc(-1.3*var(--s)) calc( .7*var(--s)),0 0
  }
  75% {
   background-position: 
    calc(2.9*var(--s)) calc(-.1*var(--s)),
    calc(-2.1*var(--s)) calc( .9*var(--s)),
    calc(2.7*var(--s)) calc(-.3*var(--s)),
    calc(-2.3*var(--s)) calc( .7*var(--s)),0 0
  }
  100% {
   background-position: 
    calc(2.9*var(--s)) calc(-1.1*var(--s)),
    calc(-2.1*var(--s)) calc(1.9*var(--s)),
    calc(2.7*var(--s)) calc(-1.3*var(--s)),
    calc(-2.3*var(--s)) calc(1.7*var(--s)),0 0
  }
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body >

<div class="fixed-header">
        <div class="container">
<nav>   
    <h1 class= "text-center"> Index of Websites</h1> </nav>
        </div></div>
    <br>

    <?php
        $directoryPath = '../Website';
        echo " <div class='row transparent-row'>";
        // get list of directories
        $directories = array_filter(scandir($directoryPath), function ($file) use ($directoryPath) {
            return is_dir($directoryPath . '/'. $file) && $file !== '.' && $file !== '..';
        });
        $url = "http://localhost/website/";
        
        // display directories as list items
        
    // display directories as list items
    foreach ($directories as $dir) {

        echo "<div class='col-md-6'>
                  <div class='card text-white bg-dark mb-3 overlay'>
                      <div class='card-body'>
                          <a href ='".$url.$dir."' style ='decoration:none'><h4 class='card-title text-center'>".$dir."</h4></a>
                          <iframe src='".$url.$dir."' style='width: 100%; height: 450px;'></iframe>
                      </div>
                  </div>
              </div>";
    }
    echo "</div>";
    ?>
    
</body>
<!-- 
- Single file SVG animation
- * can be used as CSS backgroud
- * total size is less than 3kb!
-->



</html>
