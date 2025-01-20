<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Connexion">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE est un tableau de bord Bootstrap 5 gratuit.">
    <meta name="keywords" content="bootstrap 5, tableau de bord admin, etc.">
    <title>@yield('title', 'Connexion')</title>

    <!-- Global styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../../dist/css/adminlte.css">

    @stack('styles') <!-- Inclure les styles spécifiques à une page -->

    <!-- Personnalisation de la page pour un design moderne -->
    <style>
        body {
            background-color: #FFFFFFFF;
            font-family: 'Source Sans 3', sans-serif;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-image {
          /*  background-image: url('https://fakeimg.pl/500x800/808080/ffffff/?text=Image+Grise');
            background-size: cover;*/
            background-color:#074310FF;
            background-position: center;
            border-radius: 8px 0 0 8px;
            height: 100vh;
        }

        .login-form {
            background-color: #ffffff;
            padding: 0px;
            width: 100%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

      

        .form-control {
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 5px;
            background-color: #074310FF;
            color: #fff;
            border: none;
        }

        .login-form button:hover {
            background-color: #042609;
        }

        .invalid-feedback {
            display: block;
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            .login-image {
                height: 250px;
                border-radius: 8px;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="row w-100">
            <!-- Image Section -->
            <div class="col-md-6 p-0">
                <div class="login-image"></div>
            </div>

            <!-- Form Section -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="login-form">
                    <h2 class="display-5">{{ __('Connexion') }}</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Input -->
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autofocus>

                            @error('email')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div class="form-group">
                            <label for="password">{{ __('Mot de passe') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required>

                            @error('password')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Se connecter') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts pour Bootstrap (optionnel pour les composants interactifs) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybEhXkFvP7wEnJEwZt4nW9zFmrFAw0w6M8tbwB7S48zhtNNCm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0p5h6xF6p/txJitL9Opfbd/xF4mj9Vul9w8Xlh4tCh6p56zn" crossorigin="anonymous"></script>
    
    @stack('scripts') <!-- Inclure des scripts spécifiques à une page -->
</body>

</html>
