<!DOCTYPE html>
<html data-theme="autumn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Crear nueva materia</title>
</head>

<body>
    @include('administracion.layouts.navbar')
    <div class="card bg-base-100 shadow-xl max-w-xl mx-auto mt-12">
        <form action="/administracion/crearmateria" method="POST">
            @csrf
            <div class="mx-5 my-5">
                <h2 class="card-title mx-auto">Crear nueva materia</h2>
                <div class="my-3">
                    <label class="label"><span class="label-text">Nombre</span></label>
                    <input id="nombre_materia" name="nombre_materia" type="text" class="input input-bordered w-full"
                        tabindex="1" required value="{{ old('nombre_materia') }}" placeholder="Ingrese el nombre de la materia" required>
                </div>
                <div class="my-3">
                    <label class="label"><span class="label-text">Código</span> </label>
                    <input id="codigo" name="codigo" type="number" class="input input-bordered w-full"
                        tabindex="2" required value="{{ old('codigo') }}" placeholder="Ingrese el código de la materia" required>
                </div>
                <div class="my-3">
                    <label class="label"><span class="label-text">Seleccione el profesor de la materia</span> </label>
                    <select id="profesor_id" name="profesor_id" class="input input-bordered w-full" required>
                        @foreach($profesores as $profesor)
                            <option value="{{ $profesor->id }}">{{ $profesor->nombre_profesor }} {{ $profesor->apellido }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="my-3">
                    <label class="label"><span class="label-text">Horas Semanales</span></label>
                    <input id="horas_semanales" name="horas_semanales" type="number" class="input input-bordered w-full"
                        tabindex="3" required value="{{ old('horas_semanales') }}" placeholder="Ingrese las horas semanales" required>
                </div>
                <div class="my-3">
                    <label class="label"><span class="label-text">Horas Totales</span></label>
                    <input id="horas_totales" name="horas_totales" type="number" class="input input-bordered w-full"
                        tabindex="4" required value="{{ old('horas_totales') }}" placeholder="Ingrese las horas totales" required>
                </div>
                <div class="my-3">
                    <label class="label"><span class="label-text">Seleccione las carreras</span></label>
                    @foreach($carreras as $carrera)
                        <div>
                            <input type="checkbox" id="carrera_{{ $carrera->id }}" name="carreras[]" value="{{ $carrera->id }}">
                            <label for="carrera_{{ $carrera->id }}">{{ $carrera->nombre_carrera }}</label>
                        </div>
                    @endforeach
                </div>
                <div class="grid grid-cols-2 gap-4 content-center mt-10">
                    <a href="/administracion" class="btn btn-secondary " tabindex="7">Cancelar</a>
                    <button type="submit" class="btn btn-success" tabindex="8">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>