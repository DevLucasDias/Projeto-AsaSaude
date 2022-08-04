@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Login</h1>
            <div class="account-wall">
                <form class="form-signin" action="/login" method="post">
					@csrf
                <input type="text" name="username" id="username" class="form-control" placeholder="CPF"  autofocus>
                <input type="password" name="password" class="form-control" placeholder="Senha" >
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Entrar</button>
				@error('username')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
 <script> type = "text/javascript" > $("#username").mask("000.000.000-00");</script>
@endsection

