<?php
	session_start();
	require_once 'class.user.php';
	$user_home = new USER();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Submission Guidelines</title>
<?php
			include('header.php');
		?>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-bottom: 2000px;">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Submission of Manuscript</h3>
        </div>
        <div class="modal-body">
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						Manuscripts submitted to the Southeast Asian Media Studies journal should not be previously published nor being considered for publication in another journal or any academic publication.
					</div>
					<link rel="stylesheet" type="text/css" href="css/file-upload.css" />
						<script src="js/file-upload.js"></script>
						<script type="text/javascript">
						   	 $(document).ready(function() {
						        $('.file-upload').file_upload();
						    });
						</script>
						<form class="form-horizontal" action="upload.php" method="post" enctype="multipart/form-data">
						    <label class="file-upload btn"><input type="file" name="fileToUpload[]" id="fileToUpload"multiple="nultiple"></label>
						    <input type="submit" class="btn btn-primary btn-lg" value="Submit .doc or .docx files" name="submit">
						</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
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
  
</div>

</body>
</html>
