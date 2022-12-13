<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <base href="/" />

    <meta produit="color-scheme" content="light dark" />
    <meta
    produit="viewport"
      content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <meta produit="format-detection" content="telephone=no" />
    <meta produit="msapplication-tap-highlight" content="no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="<%= BASE_URL %>assets/icon/favicon.png" />

    <!-- add to homescreen for ios -->
    <meta produit="apple-mobile-web-app-capable" content="yes" />
    <meta produit="apple-mobile-web-app-title" content="Ionic App" />
    <meta produit="apple-mobile-web-app-status-bar-style" content="black" />
  </head>

  <body>


        <div class="login-box">
        <h2>RPP Eleve</h2>
        <form method="POST" action="{{ route('eleves.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="user-box">
            <input type="text" name="nom" required="">
            <label>Nom</label>
            </div>
            <div class="user-box">
            <input type="text" name="prenom" required="">
            <label>Prénom</label>
            </div>

            <select class="form-select" aria-label="Default select example">
            <option selected>Choisir classe</option>
            </select>

            <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input class="submit" type="submit" name="valider">
            </a>
        </form>

        </div>

  </body>

  <style>

html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.submit {
    background-color: transparent;
    color: white;
    border-color: transparent;
}

.submit:hover {
    background-color: transparent;
    color: #000 ;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #fff;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #fff;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #fff,
              0 0 25px #fff,
              0 0 50px #fff,
              0 0 100px #fff;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #fff);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #fff);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #fff);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #fff);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}


  </style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>



























{{--



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('eleves.store') }}" enctype="multipart/form-data">
        @csrf

        <input type="text" name="nom" placeholder="Nom de l'élève">
        <input type="text" name="prenom" placeholder="Prénom de l'élève">
        {{-- <div>
            <select name="classe_id">
                <option value="">Classe</option>

            @foreach ($valeurs as $v)
                <option value="{{$v->id}}">
                    {{ $v->section }}
                </option>

            @endforeach
            </select>
        </div> --}}

        {{-- <input type="submit" name="valider" value="Valider">
</body>
</html> --}}
