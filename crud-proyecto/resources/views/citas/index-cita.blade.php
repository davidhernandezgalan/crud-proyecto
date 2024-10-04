<x-layout>
    <div class="container my-4">
        <h1 class="text-center mb-4">Lista de Citas</h1>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($citas as $cita)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cita->nombre }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $cita->fecha }} - 
                                @php
                                    $time = \Carbon\Carbon::parse($cita->hora);
                                    $formattedTime = $time->format('g:i A');
                                @endphp
                                {{ $formattedTime }}
                            </h6>
                            <p class="card-text"><strong>Servicio:</strong> {{ $cita->servicio }}</p>
                            <p class="card-text"><strong>Comentario:</strong> {{ $cita->comentario }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('cita.show', $cita) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('cita.edit', $cita) }}" class="btn btn-secondary">Editar</a>
                            <form action="{{ route('cita.destroy', $cita) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
