<html>
<head>
	<title>/i/mages</title>
</head>
<body>
<div id="main">
	
	<div id="top"></div>
	<div id="middle">
		
		 <h1> Login</h1>

		<form action="<?=site_url("login/go")?>" method="post">

			<div id="boxtop"></div><div id="boxmid">

				<div class="section">
					<span>Username:</span>
					<input type="text" name="username" value="Username" />
				</div>
				
				<div class="section">
					<span>Password:</span>
					<input type="password" name="password" value="Password" />
				</div>
				
			<input type="submit" value="Login" name="login" class="submit" />
			
			<p><?php  if($this->session->flashdata('error')) {
   						echo "Wrong username or password"; }?></p>

		   	<div class="text"><p>Haven't got an account? Want one?</p><p><a href="<?=site_url('login/register')?>">Register</a>.</p></div>
		   	
		   		
			
		</div>
		
	
	</div>
	<div id="bottom"></div>
</div>
</body>
</html>