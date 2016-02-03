<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-home.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
      <!-- Fonts: --> 
     <!-- Company font -->
      <link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
      <!-- Game Title Font --->
      <link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
      <!--Site Text Font -->
      <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic' rel='stylesheet' type='text/css'>
      
  </head>
    
    
    
    
  <body>
      <div class="container-fluid"> <!-- Page Container -->
          
        <!-- BEGIN SECTION 1: NAVIGATION -->
        <div class="row navigation">
            <div class="col-md-12">
                <div class="col-md-3 logo"> Studio StoneCap </div>
                <div class="col-md-1 col-md-offset-6"> <h5>Game</h5> </div>
                <div class="col-md-1">  <h5>About</h5>  </div>
                <div class="col-md-1"> <h5>Register</h5> </div>         
            </div>   
        </div> <!-- end row: navigation -->
        <!-- END SECTION 1 -->
          
        
        <!--BEGIN SECTION 2: GAME INFO -->
        <div class="row section2">
            <div class="row"> 
                <div class="col-md-4 col-md-offset-4"> <h3>Studio StoneCap Presents... </h3> </div> 
            </div>
            <div class="row"> 
                <div class="col-md-6 col-md-offset-3"> <p id="GameTitle">The Last Sapling. </p> </div> 
            </div>    
            <div class="row">
                <div class="col-md-7 col-md-offset-4"> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit fermentum leo vitae feugiat. Quisque nec enim sollicitudin, mollis diam vel, volutpat ante. Fusce at rutrum nunc, quis varius orci. Nullam eleifend vestibulum ligula, ac porttitor nibh condimentum at. Suspendisse potenti. Aenean accumsan dapibus purus, non gravida mi rhoncus ac. Praesent feugiat risus et est pulvinar, in consectetur turpis pretium. Nulla egestas quam enim, et sodales nulla semper ac. </p>
                </div> 
            </div>    
        </div> <!-- end row: section2 -->
        <!--END SECTION 2-->
          
            <!--BEGIN SECTION 3: GALLERY BOX -->
            <div class="row section3"> 
                <div class="row">
                    <div class="col-md-4 col-md-offset-4" id="gallery">
                            <h2>Screenshots </h2>
                    </div>  
                </div>
            <!-- carousel code courtesy of Jasny -->
                <div class="row">
                    <div id="myCarousel" class="carousel slide" style="width: 800px; margin: auto">
              <div class="carousel-inner">
                <div class="item">
                  <img src="http://jasny.github.com/bootstrap/2.3.1/assets/img/bootstrap-mdo-sfmoma-01.jpg"
                  alt="">
                  <div class="carousel-caption">
                     <h4>First Thumbnail label</h4>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                      elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                      vehicula ut id elit.</p>
                  </div>
                </div>
                <div class="item">
                  <img src="http://jasny.github.com/bootstrap/2.3.1/assets/img/bootstrap-mdo-sfmoma-02.jpg"
                  alt="">
                  <div class="carousel-caption">
                     <h4>Second Thumbnail label</h4>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                      elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                      vehicula ut id elit.</p>
                  </div>
                </div>
                <div class="item active">
                  <img src="http://jasny.github.com/bootstrap/2.3.1/assets/img/bootstrap-mdo-sfmoma-03.jpg"
                  alt="">
                  <div class="carousel-caption">
                     <h4>Third Thumbnail label</h4>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                      elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                      vehicula ut id elit.</p>
                  </div>
                </div>
              </div> <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

              <a
              class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div> 
                </div>
            </div>
            <!--END SECTION 3 -->
          
        <div class="row section4">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="col-md-6 col-md-offset-3" style="text-align: center"> <h2>Developer</h2> </div> <!-- the inner col is for the colored rectangle around developer to help it stand out -->
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p> StoneCap Studios was founded when six students with a passion for gaming were brought together. With different levels of experience, each member of the team brings important skills to the table when it comes to video game development. Our goal is to create a gaming experience that is not only fun, but that also gives back to society in a meaningful way. We are all hardworking and dedicated students who seek to gain experience and mean to improve our skills as developers and gamers.</p>
                
                </div>
            
            </div>
        </div>
        
          
      </div> <!-- End Page Container -->
      
      
      
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>