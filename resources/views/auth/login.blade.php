<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Inclure vos liens vers les fichiers CSS ici -->
    @vite(['resources/css/login.css', 'resources/js/login.js'])

</head>

<body class="img js-fullheight"
style="background-image:url({{asset('/img/hero-bg.png')}})">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Connectez-vous</h3>
                        <form method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf

                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Adresse Email" required
                                    autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" placeholder="Mot de Passe" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Se Souvenir de Moi
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="{{ route('password.request') }}" style="color: #fff">Mot de Passe Oublié ?</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Se Connecter</button>
                            </div>
                        </form>
                        <!-- La section de connexion avec les médias sociaux peut être ajoutée ici -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inclure vos scripts JavaScript ici -->
</body>

</html>