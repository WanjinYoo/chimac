
<script src = "https://code.jquery.com/jquery-3.2.1.js"></script>

<header>
	<nav>
		<div class="menu-icon">
			<i class="fa fa-bars fa-2x"></i>
		</div>
		<div class="logo"><img src="images/chimac.jpg" WIDTH=150 HEIGHT=50/>
			</div>
			<div class ="menu">
				<ul>
					<li><a href ="index.php">Home</a></li>
					<li><a href ="about.php">About</a></li>
					<li><a href ="Menu.php">Menu</a></li>
					<li><a href ="reservation.php">Reservation</a></li>
			 <div class="misc">
					<li> <a href="https://www.facebook.com/pages/Chimac/1741061635950644"><i class="fa fa-facebook-official" style="font-size:24px "></i></a></li>
					 <li><a href="https://www.facebook.com/pages/Chimac/1741061635950644"><i class="fa fa-instagram" style="font-size:24px"></i></a></li>
					 <li><a href="https://www.facebook.com/pages/Chimac/1741061635950644"><i class="fa fa-twitter" style="font-size:24px"></i></a></li>
					</div>
			 
				</ul>

			</div>
				
		</nav>

 <br>
  <br>
	</header>


<script type="text/javascript">
	$(document).ready(function(){
		$(".menu-icon").on("click",function(){
			$("nav ul").toggleClass("showing");
		});
		});


  $(window).on ("scroll", function() {
  	if($(window).scrollTop()){
 
  		$("nav").addClass("black"); 		
  	}

  	else{
  		$("nav").removeClass("black");
  	}
  });



</script>
