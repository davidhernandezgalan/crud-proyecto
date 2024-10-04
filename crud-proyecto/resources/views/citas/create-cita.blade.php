<x-layout>
<h1>Crear Cita</h1>

<style>
    .error {
        color: red;
        font-size: 14px;
    }
</style>

<form action="{{ route('cita.store') }}" method="POST">
    @csrf

    <label for="nombre">Nombre del cliente:</label><br>
    <input type="text" name="nombre" value="{{ old('nombre') }}"><br>
    @error('nombre')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="fecha">Fecha:</label><br>
    <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}"><br>
    @error('fecha')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="hora">Hora:</label><br>
    <select name="hora" id="hora">
        <option value="11:00" {{ old('hora') == '11:00' ? 'selected' : '' }}>11:00</option>
        <option value="11:30" {{ old('hora') == '11:30' ? 'selected' : '' }}>11:30</option>
        <option value="12:00" {{ old('hora') == '12:00' ? 'selected' : '' }}>12:00</option>
        <option value="12:30" {{ old('hora') == '12:30' ? 'selected' : '' }}>12:30</option>
        <option value="13:00" {{ old('hora') == '13:00' ? 'selected' : '' }}>13:00</option>
        <option value="13:30" {{ old('hora') == '13:30' ? 'selected' : '' }}>13:30</option>
        <option value="14:00" {{ old('hora') == '14:00' ? 'selected' : '' }}>14:00</option>
        <option value="14:30" {{ old('hora') == '14:30' ? 'selected' : '' }}>14:30</option>
        <option value="15:00" {{ old('hora') == '15:00' ? 'selected' : '' }}>15:00</option>
        <option value="15:30" {{ old('hora') == '15:30' ? 'selected' : '' }}>15:30</option>
        <option value="16:00" {{ old('hora') == '16:00' ? 'selected' : '' }}>16:00</option>
        <option value="16:30" {{ old('hora') == '16:30' ? 'selected' : '' }}>16:30</option>
        <option value="17:00" {{ old('hora') == '17:00' ? 'selected' : '' }}>17:00</option>
        <option value="17:30" {{ old('hora') == '17:30' ? 'selected' : '' }}>17:30</option>
        <option value="18:00" {{ old('hora') == '18:00' ? 'selected' : '' }}>18:00</option>
        <option value="18:30" {{ old('hora') == '18:30' ? 'selected' : '' }}>18:30</option>
        <option value="19:00" {{ old('hora') == '19:00' ? 'selected' : '' }}>19:00</option>
        <option value="19:30" {{ old('hora') == '19:30' ? 'selected' : '' }}>19:30</option>
        <option value="20:00" {{ old('hora') == '20:00' ? 'selected' : '' }}>20:00</option>
    </select><br>

    <label for="servicio">Servicio:</label>
    <select name="servicio" id="servicio">
        <option value="Barberia" {{ old('servicio') == 'Barberia' ? 'selected' : '' }}>Barbería</option>
        <option value="Tinte" {{ old('servicio') == 'Tinte' ? 'selected' : '' }}>Tinte</option>
        <option value="Maquillaje_Peinado" {{ old('servicio') == 'Maquillaje_Peinado' ? 'selected' : '' }}>Maquillaje/Peinado</option>
        <option value="Corte" {{ old('servicio') == 'Corte' ? 'selected' : '' }}>Corte Mujer/Hombre</option>
    </select><br>

    <label for="comentario">Comentario:</label><br>
    <textarea name="comentario" cols="30" rows="4">{{ old('comentario') }}</textarea><br>

    <input type="submit" value="Agendar">
    <a href="{{ url('/cita') }}">
        <button type="button">Cancelar</button>
    </a>
</form>
</x-layout>