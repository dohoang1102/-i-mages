<html>
<head>
	
	<title>/i/mages</title>
</head>
<body>
<div id="main">
	
	<div id="top"></div>
	<div id="middle">
		
		 <h1> Profile</h1>
		
		<div id="boxtop"></div><div id="boxmid">
			
			<?php foreach($files as $file): ?>
			
				<div class="section">
					<span><?=$file->name?></span>
					<div style="float: right;">
						<span><a href="<?=base_url()?>files/<?=$file->name?>">View</a></span>
						<span><a href="<?=site_url("profile/delete/".$file->id)?>">Delete</a></span>
					</div>	
				</div>
			
			<?php endforeach; ?>

	   	<div class="text"><p>Before uploading, check out</p><p>the <a href=#>Terms of Service</a>.</p></div>
	   	

			<a href="<?=site_url('login/logout')?>" class="submit red">Logout</a>
	   		<a href="<?=site_url('profile/upload')?>" class="submit">Upload</a>
		
	</div>

</div>
<div id="bottom"></div>
</div>
</body>
</html>