<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 4");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>

<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Customer Feedback</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p>Is there anything else you would like to share about your experience with our handcraft website? 
				<br>Any additional feedback or suggestions for improvement?</p>
	    	<form method="POST" action="">
		    	<div class="input-group">
	                <input type="text" class="form-control">
	                <span class="input-group-btn">
	                    <button type="button" class="btn btn-info btn-flat"><i class="fa fa-envelope"></i> </button>
	                </span>
	            </div>
		    </form>
	  	</div>
	</div>
</div>

<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Follow us on Social Media</b></h3>
	  	</div>
	  	<div class='box-body'>
	    	<a href=" https://www.facebook.com/profile.php?id=100090732373549&mibextid=ZbWKwL" target="_blank" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
	    	<a href=" https://twitter.com/KavinKumar1?t=nAgnYTEznOdq38-i03iFfw&s=08" target="_blank" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
	    	<a href=" https://instagram.com/k_a_vinkumar?igshid=OTk0YzhjMDVlZA==" target="_blank" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
	    	<a href="#"  class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
	    	<a href=" https://www.linkedin.com/in/kavinkumar-v-b01b9822b" target="_blank" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
	  	</div>
	</div>
</div>
