<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Тестовая обработка формы</title>
  </head>
  <body>
    <h1>ajax, bootstrap и все клевые технологии</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<div class="container">
    <form id="register-form" role="form" action="/auth/register/" method="post">
        <div class="form-group">
                   <div class="mb-3">
                        <label class="control-label" for="id_firstname">Имя</label>
                   <div class="controls">
                   <input class="form-control" id="id_firstname" maxlength="30" name="firstname" type="text" />

                   <div class="mb-3">
                        <label class="control-label" for="id_lastname">Фамилия</label>
                   <div class="controls">
                   <input class="form-control" id="id_lastname" maxlength="30" name="lastname" type="text" />

                   <div class="mb-3">
                        <label class="control-label" for="id_email">email</label>
                   <div class="controls">
                   <input class="form-control" id="id_email" maxlength="30" name="email" type="text" />

		  <div class="mb-3">
		    <label for="inputPassword" class="form-label">пароль</label>
		    <input type="password" class="form-control" id="id_pass">
		  </div>

		  <div class="mb-3">
		    <label for="inputPasswordConfirm" class="form-label">повтор пароля</label>
		    <input type="password" class="form-control" id="id_pass_confirm">
		  </div>

		</div> 
               <br>
               <input class="btn btn-primary" type="submit" class="button" value="Зарегистрироваться"/>
               

    </form>
</div>

  </body>
</html>

