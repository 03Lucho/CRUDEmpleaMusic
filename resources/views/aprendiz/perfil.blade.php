<!DOCTYPE html>
<html>
<head>
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
   
    <header class="header">
        <h1>Perfil</h1>
    </header>
    @include('layouts/app')
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <section class="testimonial-section">
        <div class="testimonial-container">
            @foreach ($aprendiz as $aprendices)
                <div class="testimonial-card">
                    <div class="card-up" style="background-image: url('{{ asset('storage/fotos_aprendiz/' . $aprendices->Imagen) }}');"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="{{ asset('storage/fotos_aprendiz/' . $aprendices->Imagen) }}"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body">
                        <h4 class="mb-4">{{ $aprendices->nombre }} {{ $aprendices->apellido }}</h4>
                        <p class="mb-2">{{ $aprendices->documento }}</p>
                        <p class="mb-4">{{ $aprendices->telefono }}</p>
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>{{ $aprendices->descripcion }}
                        </p>
                        <p>
                            <a href="{{ route('aprendices.show', ['aprendiz' => $aprendices->idaprendiz]) }}">Clases</a>
                            <a href="{{ route('aprendices.edit', ['idaprendiz' => $aprendices->idaprendiz]) }}">Editar</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- <a href="{{ route('menu') }}" class="btn">Volver</a> --}}
</body>
</html>