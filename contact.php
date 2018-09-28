<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
    <title>Lettre de contacte</title>
	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="fr" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
    <link rel="stylesheet" href="CDN_V4/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/contact.css">
    <script src="CDN_V4/jquery.min.js"></script>
    <script src="CDN_V4/popper.min.js"></script>
    <script src="CDN_V4/bootstrap.min.js"></script>  
  </head>
  <body>
	<?php 
	require_once("header.php");
	?>
    <section class='mx-2' id='section-contact' >
	  <div class='row justify-content-md-center'>
	    <div class='col-sm-11 col-md-10 col-lg-9 col-xl-8 '>
	    <form class=''>
	      <h1 class="text-center">Lettre de contacte:</h1>
		  
	      <div class='row mb-3 mb-sm-2 mb-md-3 mb-lg-4'>
	        <div class='col-sm-3 '>
	          <label for="first-name" class="d-sm-block text-center ">Nom</label>
	        </div>
	        <div class='col-sm-9  '>
	          <input type="text" id="first-name" class="form-control" title="" />
	        </div>
	      </div>
	       
	      <div class='row mb-3 mb-sm-2 mb-md-3 mb-lg-4'>
	        <div class='col-sm-3'>
	          <label for="last-name" class="d-sm-block text-center ">Prénom *</label>
	        </div>
	        <div class='col-sm-9'>
	          <input type="text" id="last-name" class="form-control" title="" />
	        </div>
	      </div>
		  
	      <div class='row mb-3 mb-sm-2 mb-md-3 mb-lg-4'>
	        <div class='col-sm-3'>
	          <label for="telephone" class="d-sm-block text-center ">Téléphone *</label>
	        </div>
	        <div class='col-sm-9'>
	          <input type="text" id="telephone" class="form-control" title="" />
	        </div>
	      </div>
		  
	      <div class='row mb-3 mb-sm-2 mb-md-3 mb-lg-4'>
	        <div class='col-sm-3'>
	          <label for="address" class="d-sm-block text-center ">Adresse</label>
	        </div>
	        <div class='col-sm-9'>
	          <input type="text" id="address" class="form-control" title="" />
	        </div>
	      </div>
	       
	      <div class='row mb-3 mb-sm-2 mb-md-3 mb-lg-4'>
	        <div class='col-sm-3'>
	          <label for="email" class=" d-sm-block text-center ">Email *</label>
	        </div>
	        <div class='col-sm-9'>
	          <input type="text" id="email" class="form-control" title="" />
	        </div>
	      </div>
		  
	      <div class='row mb-3 mb-sm-2 mb-md-3 mb-lg-4'>
	        <div class='col-sm-3'>
	          <label for="category" class=" d-sm-block text-center ">Catégorie du message *</label>
	        </div>
	        <div class='col-sm-9'>
	          <select  id="category" class="form-control" title="" >
	            <option> </option>
	            <option> option 1</option>
	            <option> option 2</option>
	            <option> option 3</option>
	            <option> option 4</option>
	          </select>
	        </div>
	      </div>
		  
	      <div class='row mb-3 mb-sm-2 mb-md-3 mb-lg-4'>
	        <div class='col-sm-3'>
	          <label for="message" class=" d-sm-block text-center ">Message</label>
	        </div>
	        <div class='col-sm-9'>
			  <textarea class="form-control" id="message"  height='200'></textarea>
	        </div>
	      </div>
		  
	      <div class='row mb-3 mb-sm-2 mb-md-3 mb-lg-4'>
	        <div class='col-sm-3'>
	        </div>
	        <div class='col-sm-9'>
			  <button class="btn btn-block btn-info ">Envoyer</button>
	        </div>
	      </div>
	       
	    </form>
	    </div>
    </section>
	<?php 
	include_once("footer.php");
	?>  
<script src='scripts/contact.js'>
</script>
</body>
</html>
