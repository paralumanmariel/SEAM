<?php
	session_start();
	require_once 'class.user.php';
	$user_home = new USER();
?>

<!DOCTYPE html>
<html>
	<!-- Head -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  		<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  		<link rel="icon" type="image/png" href="seamicon.ico">
		<title>Submission Guidelines</title>
	</head>

	<!-- Body -->
	<body>
		<body>
		<?php
			include('header.php');
		?>

    	<!-- Home Page Contents-->
		<div class="col-md-12">
			<div id="columnbox" style="float:left; width:100%;">
				<div style="float:left; width:100%; padding:10px 20px 0px 100px;">
					<div style="text-align:center;">
						<h1 style="margin:0px;">Submission Guidelines</h1>
					</div>
					<div style="padding-left: 50px">
						<h1 class="bar";></h1>
					</div>
					<div style="text-align:center;">
						<h3 style="margin: 0px; padding:10px 0px 0px 0px">Manuscript Preparation</h3>
					</div>
					<div style="text-align:left;">
						<h4 style="margin: 0px; padding:10px 0px 0px 0px">Word Limit</h4>
					</div>
					<div id="clearbox" style="padding:5px; width:100%; float:left; color:#595959; text-align: justify">
						5,000 to 7,000 words excluding references, tables, notes, acknowledgements, and captions 
					</div>
					<br></br>
					<div style="text-align:left;">
						<h4 style="margin: 0px; padding:10px 0px 0px 0px">Style Guidelines</h4>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						Manuscripts should be submitted in Word (doc or docx) format.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<b><i>Cover Page: </i></b>The cover page contains the title and the names, affiliations, and bio-notes of the author/s of the article:
					</div>
					<div id="clearbox" style="padding:5px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Title: </u>Bold, Times New Roman, 20 pt., sentence case, double-spaced, center aligned
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Authorship and Affiliations: </u>Name of authors should be in Bold, Times New Roman, 12 pt, center aligned. The institutional affiliation of the authors should be placed beside their name and must be in Italics, Times New Roman, 12 pt., center aligned. Separate the names and their affiliations with a comma. [Example: Jane Doe, Chulalongkorn University]
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px;width:100%; float:left; color:#595959;text-align: justify">
						<u>Author Bio-note: </u>Provide a short bio-note for each author. It is preferably less than 200 words. Place it after the references section. [Example: Jane Doe is an Associate Professor of Journalism from the Chulalongkorn University in Thailand. She has published …]; Times New Roman, 20 pt. sentence case, double-spaced, left-aligned
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px;width:100%; float:left; color:#595959;text-align: justify">
						<b><i>Body: </i></b>The body of the manuscript contains the abstract, the whole article, and the list of references. Here are the guidelines for the body:
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px;width:100%; float:left; color:#595959;text-align: justify">
						<u>Font: </u>Times New Roman, 12 pt, double-spaced. Use one-inch margins for all sides of the document.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Abstract: </u>The abstract should have 150 to 200 words. Indicate the abstract paragraph with a heading (Bold, Times New Roman, 12 pt.). Place at least eight keywords below.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Headings: </u>The font size for all headings should be 12 pt. To make the article readable, the use of fourth-level and more headings is discouraged.
					</div>
					<div id="clearbox" style="padding-right:50px; padding:0px 0px 0px 50px; width:100%; float:left; color:#595959;text-align: justify">
						<li>First-level headings should be in Bold, all uppercase, and left aligned</li>
						<li>Second-level headings should be in Bold Italics, title case, and left aligned</li>
						<li>Third-level headings should be in Italics, title case, and left aligned</li>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Tables, Figures, and other Supplementary Materials: </u>Provide indicators in the text where the table or figures should be placed. For example, you can insert this: [Figure 1 here]. Tables, figures, and other supplementary materials, including their captions, should be supplied in a separate Word file. For copyrighted materials, authors should acquire signed permission from the owners. All permissions should be supplied in a separate file.
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px;width:100%; float:left; color:#595959;text-align: justify">
						<u>Spelling and punctuation: </u>This journal uses U.S. (i.e., American) English.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Acknowledgement: </u>This is an optional section of a research article. It should be placed before the references. If possible, acknowledgement paragraphs should be limited to 250 words only.
						<br></br>
					</div>
					<div style="text-align:left;">
						<h4 style="margin: 0px; padding:10px 0px 0px 0px">References</h4>
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px;width:100%; float:left; color:#595959;text-align: justify">
						The manuscripts should adhere to the prescribed referencing format of the American Psychological Association (APA), 6th edition.
						<br></br>
					</div>
					
					<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-bottom: 2000px;">I clearly understand the guidelines above</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="display: inline;">
          <button type="button" class="close" data-dismiss="modal" style="float: left;">&times;</button>
          <h3 class="" style="margin-left: 4em;">Submission of Manuscript</h3>
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
						    <label class="file-upload btn"><input  class="btn btn-default" type="file" name="fileToUpload[]" id="fileToUpload"multiple="nultiple"></label>
						    <input type="submit" class="btn btn-primary btn-lg" value="Submit .doc or .docx files" name="submit">
						</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
					
				</div>
				</div>
			</div>

			<div id="section" style="float:left; width:100%;">
				<h5 style="margin:0px;"></h5>
			</div>
		</div>
	</body>
</html>