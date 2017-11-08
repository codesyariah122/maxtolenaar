<nav id="myNavbar" class="navbar-inverse navbar navbar-default  navbar-fixed-bottom" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
        <a class="navbar-brand text-danger" href="?Home=<%=$_SERVER['REQUEST_TIME'];%>">
<%=ConstModel::LOGOS;%></a>
        </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#" target="_blank">Home</a></li>
          <li><a href="#" target="_blank">About</a></li>
          <li><a href="#" target="_blank">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container">
  <div class="jumbotron banner">
    <div class="container-fluid">
     <center>
      <h2 class="banner-text"><%=ConstModel::WELCOME;%></h2>
     </center>
    </div>
  </div>
</div>