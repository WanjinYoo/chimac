 
<link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">
 <footer class="footer-distributed">

			<div class="footer-left">

				<h3><img src="images/chimac.jpg" WIDTH=150 HEIGHT=40></h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="about.php">About</a>
					·
					<a href="Menu.php">Menu</a>
					·
					<a href="reservation.php">Reservation</a>
					
				</p>

				<p class="footer-company-name">CHIMAC 2018</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/pages/Chimac/1741061635950644">
					<i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post" action = "<?= $_SERVER['PHP_SELF']; ?>">

					<input type="text" name="emailc" placeholder="Email" />
					<textarea name="messagec" placeholder="Message"></textarea>
					<button>Send</button>
				</form>

				<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST"){
					echo '<script language="javascript">';			
					if(empty($_POST["emailc"]) || empty($_POST["messagec"])){
						echo 'alert("All fields need to be filled.")';
						echo '</script>';

					}
					else{
						$message = '';
					unset($_POST['submit']);
					foreach($_POST as $key => $value){
					$message .= "$key: $value \n";
				}

				$to = 'dksladjsla@gmail.com';
			$subject = 'Confirmation Email';
			if (mail($to, $subject, $message)){
				echo 'alert("Thank you for contacting! you will be receiving a confirmation Email shortly")';
				$message = '';
				echo '</script>';

			}
		else{
				echo 'alert("Problem with the website. Please, call us to make a reservation.")';
				echo '</script>';

	}
		}
				}
				?>
			</div>
		</footer>