<!DOCTYPE html>
<html lang="en">
<head>
  <title>index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="odometer/themes/odometer-theme-car.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="odometer/odometer.js"></script>
  
  <script>
    window.odometerOptions = {
        format: 'd'
    };
  </script>
  
</head>

<style>
    .odometer {
        font-size: 25px;
    }

    .points {
        text-align:center;
    }
    
    .mySlides {display:none;}
    
    .instragramSlides {display:none;}
</style>

<body>

<div class="points container-fluid">
    <div class="row">
        <div class="col-sm-1">
            <h1>1A</h1>
            <div id="1A" class="odometer">0</div>
        
            <h1>2A</h1>
            <div id="2A" class="odometer">0</div>
        
            <h1>3A</h1>
            <div id="3A" class="odometer">0</div>
        
            <h1>4A</h1>
            <div id="4A" class="odometer">0</div>
        
            <h1>5A</h1>
            <div id="5A" class="odometer">0</div>
        
            <h1>6A</h1>
            <div id="6A" class="odometer">0</div>
        
            <h1>7A</h1>
            <div id="7A" class="odometer">0</div>
        </div>
        
        <div class="col-sm-1">
            <h1>1B</h1>
            <div id="1B" class="odometer">0</div>
        
            <h1>2B</h1>
            <div id="2B" class="odometer">0</div>
        
            <h1>3B</h1>
            <div id="3B" class="odometer">0</div>
        
            <h1>4B</h1>
            <div id="4B" class="odometer">0</div>
        
            <h1>5B</h1>
            <div id="5B" class="odometer">0</div>
        
            <h1>6B</h1>
            <div id="6B" class="odometer">0</div>
        
            <h1>7B</h1>
            <div id="7B" class="odometer">0</div>
        </div>
        
        <div class="col-sm-8">
            <div class="row">
                <img src="images/Banner.png" style="width:800px;">
            </div>
            
            
            <div class="row">
                <div class="col-sm-6">
                    <?php include 'includes/InstagramSlider.php';?>
                </div>
                
                <div class="col-sm-6">
                    <?php include 'includes/GraphSlider.php';?>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-sm-4">
                    <h1>Aspiranter</h1>
                    <div id="Aspiranter" class="odometer">0</div>
                </div>
                <div class="col-sm-4">
                    <h1>Crew</h1>
                    <div id="Crew" class="odometer">0</div>
                </div>
                <div class="col-sm-4">
                    <h1>Marbarudvalget</h1>
                    <div id="Marbarudvalget" class="odometer">0</div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-1">
            <h1>1C</h1>
            <div id="1C" class="odometer">0</div>
        
            <h1>2C</h1>
            <div id="2C" class="odometer">0</div>
        
            <h1>3C</h1>
            <div id="3C" class="odometer">0</div>
        
            <h1>4C</h1>
            <div id="4C" class="odometer">0</div>
        
            <h1>5C</h1>
            <div id="5C" class="odometer">0</div>
        
            <h1>6C</h1>
            <div id="6C" class="odometer">0</div>
        
            <h1>7C</h1>
            <div id="7C" class="odometer">0</div>
        </div>
        
        <div class="col-sm-1">
            <h1>1D</h1>
            <div id="1D" class="odometer">0</div>
        
            <h1>2D</h1>
            <div id="2D" class="odometer">0</div>
        
            <h1>3D</h1>
            <div id="3D" class="odometer">0</div>
        
            <h1>4D</h1>
            <div id="4D" class="odometer">0</div>
        
            <h1>5D</h1>
            <div id="5D" class="odometer">0</div>
        
            <h1>6D</h1>
            <div id="6D" class="odometer">0</div>
        
            <h1>7D</h1>
            <div id="7D" class="odometer">0</div>
        </div>
        
    </div>
</div>


<script id="source" language="javascript" type="text/javascript">
  
  var g_myIndex = 0;
  var g_timer_seconds = 3;
  g_carousel();

  function g_carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    g_myIndex++;
    if (g_myIndex > x.length) {g_myIndex = 1}    
    x[g_myIndex-1].style.display = "block";  
    setTimeout(g_carousel, g_timer_seconds*1000); // Change image every 2 seconds
    }
    
  var i_myIndex = 0;
  var i_timer_seconds = 3;
  i_carousel();

  function i_carousel() {
    var i;
    var x = document.getElementsByClassName("instagramSlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    i_myIndex++;
    if (i_myIndex > x.length) {i_myIndex = 1}    
    x[i_myIndex-1].style.display = "block";  
    setTimeout(i_carousel, g_timer_seconds*1000); // Change image every 2 seconds
    }

  function update() {
     $.ajax({                                      
                url: 'get_points.php',                    
                data: "",                        
                dataType: 'json',                
                success: function(data) {
                    data.forEach(function(item) {
                        var kitchen = item[1];
                        var points = item[2];
                        document.getElementById(kitchen).innerHTML = points;
                    }
                    );
                } 
              }
              );
  }
  
  setInterval(update, 500);
</script>

</body>
</html>

