<head>
    <!-- Outros elementos do head -->

    <!-- Incluir o CSS -->
    <link href="{{ asset('cssCRUD/crud.css') }}" rel="stylesheet">
</head>

@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">

        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Cadastrar Usuário</span>
            <a href="{{ route('user.index') }}" class="btn btn-info btn-sm">Listar</a>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('user-store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')

                <!-- Nome -->
                <div class="col-md-12">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nome completo" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- E-mail -->
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Melhor e-mail do usuário" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Senha -->
                <div class="col-md-6">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Senha com no mínimo 6 caracteres">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Botão de envio -->
                <div class="col-12">
                    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
