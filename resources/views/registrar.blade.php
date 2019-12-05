<head>
    <link href="css/registro.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="modal fade" id="modalSubscriptionForm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog bg-danger" role="document">
        <div class="modal-content bg-dark text-white">

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h4 class="text-center p-3">@lang('messages.Registro')</h4>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('messages.Nombre')</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">@lang('messages.Email')</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">@lang('messages.Contraseña')</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0 text-center">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary mb-3">
                            @lang('messages.Enviar')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>