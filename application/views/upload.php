<html>
<head>
	
	<title>/i/mages</title>
</head>
<body>
<div id="main">
	<div id="top"></div>
	<div id="middle">
		
	 <h1> Upload</h1>
		
		<form enctype="multipart/form-data" action="<?=site_url('profile/upload')?>" method="post">

			<div id="boxtop"></div><div id="boxmid">

				<div class="section">
					<span>File:</span>
					<input type="file" name="file" />
				</div>

			</div><div id="boxbot"></div>
	
			<div class="text"><p>Before uploading, check out</p><p>the <a href=#>Terms of Service</a>.</p></div>
		   	

			<input type="submit" value="Upload" name="upload" class="submit" />
		</div>
		
		</form>
	
	</div>
	<div id="bottom"></div>
</div>
</body>
</html>