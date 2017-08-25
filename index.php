<?php
if(empty($_GET['code']) or $_GET['code']!=='3345678'){
	echo "<meta http-equiv='refresh' content='0;url=http://www.playno1.com/article-23150-1.html#.WXtfdFojFjs' />";
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/john.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="./js/bootstrap.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      min-height:100px;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }
  
  .news{
      color:#FF5511;
      font-size:28px;
  }

  .newshr{
      border-top: 3px solid #FF5511;
      position:relative;
      left:40px;
  }
  .hr0{
	border-top:2px solid black;
	margin:0;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./"><img id='logo' src="./imgs/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="news.php">最新消息</a></li>
        <li><a href="about.php">关于我们</a></li>
        <li><a href="products.php">産品介绍</a></li>
        <li><a href="process.php">製作过程</a></li>
        <li><a href="store.php">名店严选</a></li>
        <li><a href="contact.php">联络我们</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3" style="padding-left:0">
        <h4> <span class='news'>最新消息</span> News</h4>
        <hr class='newshr'/> 
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 3</p>    
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 4</p>    
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">	
  <div class="row">
	<div class="col-sm-4">
		<h4>冠标贸易有限公司</h4>
	</div>
  </div>
  <div class="row">
	<div class="text-center">
		<div class="col-sm-10 col-sm-offset-1">
			<hr class='hr0'/>
		</div>
	</div>
  </div>
  <div class="row">
	<div class="col-sm-4">
		<h5>中国地区总代理</h5>
	</div>
  </div>
  <div class="row">
	<div class="col-sm-4">
		<p>香港新界屯门建荣街24-30号</p>
		<p>建荣商业大厦10楼1005 C室 </p>
	</div>
	<div class="col-sm-6" style="text-align:left">
		电话:(852)2415-3878 / 传真:(852)2415-3128
		<br>
		E-mail:<a>kbtc.hkg@gmail.com</a>
	</div>
  </div>
</footer>

</body>
</html>

