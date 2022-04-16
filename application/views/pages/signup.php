
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title><?= $title ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">


  <form class="form-signin" method="post" action="<?= base_url() ?>signup/store">
      <img class="mb-4" src="https://i.imgur.com/Cgl5GiO.png" alt="" width="150" height="150">
      <h1 class="h3 mb-3 font-weight-normal">Cadastre-se</h1>

      <label for="inputName" class="sr-only">Name</label>
      <input type="text" name="name" id="inputName" class="form-control" placeholder="Seu nome" required autofocus>
      
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="seuemail@unimar.com.br" required autofocus>
      
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>

      <label for="inputCountry" class="sr-only">CRM</label>
      <input type="text" name="crm" id="inputCRM" class="form-control" placeholder="Seu CRM" required autofocus>

      <label for="inputCountry" class="sr-only">Especialização</label>
      <input type="text" name="especializacao" id="inputEspecializacao" class="form-control" placeholder="Sua especialização" required autofocus>

      <p>
        <a href="<?= base_url()?>login">Você já possui uma conta? Clique aqui!</a>
      </p>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Concluir cadastro</button>
</form>
</body>
</html>
