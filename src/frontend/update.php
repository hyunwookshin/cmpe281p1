<?php
  $fileId = $_GET['id'];
?>
<html>
   <head>
      <title>
      CloudFront Project 1
      </title>
	  <script type="text/javascript" src="js/info.js"></script>
      <script type="text/javascript" src="js/upload.js"></script>      
	  <script type="text/javascript" src="js/update.js"></script> 	  
      <link rel="stylesheet" href="css/main.css">
   </head>
   <body onload="populateBannerFields( <?php echo $fileId ?>, false ); addUploadBox( 'update',  <?php echo $fileId ?>)">
        <div id="banner">
            File to Be Updated
        </div>
		<div id="uploadbox">
         </div>
		<?php include 'fileupdate.php'; ?>
		 <div id="response">
		    <button class="clicker" onClick="updateFile( <?php echo $fileId ?> )">Confirm Update</button>
			<button class="clicker" onClick="window.location.href= 'index.html'">Cancel</button>
		 </div>
		 <div id="status">
		 </div>
   </body>
</html>
