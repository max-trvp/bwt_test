<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>
    <link href="http://bwt-test.local/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://bwt-test.local/css/style.css" rel="stylesheet">
    <script src="http://bwt-test.local/js/bootstrap.min.js"></script>
    <script src="http://bwt-test.local/js/jquery-1.10.2.js"></script>
    <script src="http://bwt-test.local/js/valid.js"></script>
    <script src="http://bwt-test.local/js/comment.js"></script>
  </head>
  <body>
	<div class="jumbotron">
	  <div class="container">
	  	<h1>BWT_TEST</h1>
	  	<div class="welcome">
	  	<!-- Если пользователь вошел на сайт, показать приветствие -->
	  		<?php if(isset($_SESSION['user'])) { ?>
	  		Добро пожаловать, <strong><?=$_SESSION['user']?></strong>
				<img src="http://bwt-test.local/images/user.png" class="img-circle" />

				<a href="http://bwt-test.local/Sign/Out/" class="btn btn-info">Выход</a>
			<?php }else { ?>
			<!-- Если пользователь не авторизован, отобразить форму входа -->
			<form action="http://bwt-test.local/Sign/In/" class="form-inline" role="form" method="post">
			  <div class="form-group">
			    <label class="sr-only" for="exampleInputEmail2">Email</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" required>
			  </div>
			  <button type="submit" class="btn btn-default">Войти</button>
			</form>
			<?php } ?>
	  	</div>
	  </div>
	</div>
	<div class="nav-menu">
		<ul class="nav nav-pills">
		  <li class="active"><a href="http://bwt-test.local/Sign/Index/">Регистрация</a></li>
		  <li><a href="http://bwt-test.local/Weather/Index/">Погода</a></li>
		  <li><a href="http://bwt-test.local/Feedback/Index/">Обратная связь</a></li>
		  <li><a href="http://bwt-test.local/FeedbackList/Index/">Feedback список</a></li>
		</ul>
	</div>
	<div class="log-area">
		<?php include 'Views/' . $contentView; ?>
	</div>
  </body>
</html>