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
<script type="text/javascript">
	// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<div class="container">
    <form id="register-form" role="form" action="/register.php" method="post" >
        <div class="form-group">
                   <div class="mb-3">
                        <label class="control-label" for="id_firstname">Имя</label>
                   <div class="controls">
                   <input class="form-control" id="id_firstname" maxlength="30" name="firstname" type="text" required/>
                   </div>
                   </div>

                   <div class="mb-3">
                        <label class="control-label" for="id_lastname">Фамилия</label>
                   <div class="controls">
                   <input class="form-control" id="id_lastname" maxlength="30" name="lastname" type="text" required/>
			        </div>
                   </div>

                   <div class="mb-3">
                        <label class="control-label" for="id_email">email</label>
                   <div class="controls">
                   <input class="form-control" id="id_email" maxlength="30" name="email" type="email" required/>
                   </div>
                   </div>

		  <div class="mb-3">
		    <label for="id_pass" class="form-label">пароль</label>
		    <input type="password" class="form-control" name="pass" id="id_pass" required>
		  </div>
		  

		  <div class="mb-3">
		    <label for="id_pass_confirm" class="form-label">повтор пароля</label>
		    <input type="password" class="form-control" name="pass_confirm" id="id_pass_confirm" required>
		  </div>

		</div> 
               <br>
               <input class="btn btn-primary" type="submit" value="Зарегистрироваться"/>
               

    </form>
</div>

  </body>
</html>

