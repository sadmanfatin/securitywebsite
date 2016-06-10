<?php
include 'sharedviews/top.php';
?>

<div id="navigation" class="container">

<div class="row">

<div class=" navbar-wrapper">

 <nav class="navbar navbar-inverse " data-spy="affix" data-offset-top="120">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
 </nav>

</div>
  


</div>




  
</div>



  

 


    

 

 

<div class="container-fluid" id="carousel" >
    <div class="row">

        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators ">
                
                 <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
                 <button type="button" class="btn btn-default item1 active"></button>
                 <button type="button" class="btn btn-default item2"></button>
                <button type="button" class="btn btn-default  item3"></button>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img class="img-responsive"  src="http://localhost:82/securitywebsite/assets/images/image1.jpg" alt=""/>

                </div>

                <div class="item">
                    <img class="img-responsive"  src="http://localhost:82/securitywebsite/assets/images/image2.jpg" alt=""/>

                </div>

                <div class="item">
                    <img class="img-responsive"  src="http://localhost:82/securitywebsite/assets/images/image3.jpg" alt=""/>

                </div>

            </div>


        </div>

    </div>

</div>


<div  id="div1" class="bg-success  container-fluid">

</div>

<div class="container">
    <h3>Collapsible Navbar</h3>
    <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
    <p>Only when the button is clicked, the navigation bar will be displayed.</p>
</div>
<div class="container-fluid" style="height:1000px">
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
</div>

<?php
include 'sharedviews/bottom.php';
?>
