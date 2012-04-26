<html>
<head>
	<title>/i/mages</title>
</head>
<body>
<div id="main">
	<div id="top"></div>
	<div id="middle">
		
		 <h1> Register</h1>

		<form action="<?=site_url('login/register')?>" method="post">

			<div id="boxtop"></div><div id="boxmid">

				<div class="section">
					<span>Desired Username:</span>
					<input type="text" name="username" />
				</div>

				<div class="section">
					<span>Desired Password:</span>
					<input type="password" name="password" />
				</div>
		
			<input type="submit" value="Register" name="register" class="submit" />
			<div class="text" ><p>Already got an account?</p><p><a href="<?=site_url('login')?>">Log In</a>.</p></div>
		   				
		</div>
	
	</div>
	<div id="bottom"></div>
</div>
</body>
</html>