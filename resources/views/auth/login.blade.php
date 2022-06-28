@extends('layout.guest')

@section('title', 'Login')

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img src="{{asset('img/icons/MundoAnimal.png')}}" alt="Logo" width="80">
              </span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2 text-center">Bienvenidos a MundoAnimal 👋</h4>
          <p class="mb-4 text-center">Ingrese a su cuenta registrada en MundoAnimal</p>

          <form id="formAuthentication" class="mb-3" action="{{route('login-auth')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Correo Electronico</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="username"
                placeholder="Ingresa tu Correo Electronico"
                autofocus
                required
              />
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Contraseña</label>
                <a href="{{route('forge-password')}}">
                  <small>Olvidaste tu Contraseña?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password"
                  required
                />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember" name="remember"/>
                <label class="form-check-label" for="remember-me"> Recuerdame </label>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Ingresar</button>
            </div>
          </form>

          <p class="text-center">
            <span>No estas registrado?</span>
            <a href="{{route('create-user')}}">
              <span>Crear una cuenta</span>
            </a>
          </p>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>
@endsection
