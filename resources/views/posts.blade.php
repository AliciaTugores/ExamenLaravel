<!DOCTYPE html>
<html>
    <body>
        <form action="{{ route('posts.store') }}" method ="POST">
            @csrf

            <div>
                @foreach ($errors->all() as $error)
                    <ul>
                        <li class="text-danger">
                            {{ $error }}
                        </li>
                    </ul>
                <br />
                @endforeach
            <div> 

            <label>
                <b>{{__("título")}}:</b>
                <br/>
                <input type="text" name="título" value="{{ old('título') }}" size="50" placeholder="Ingresa aquí el título de la publicación" required>
                <br/>
                @error('título')
                    <br/>
                    <small class="text-danger">*{{$message}}</small>
                    <br/>
                @enderror
            </label>
            <br/>
            <label>
                <b>Extracto publicación:</b>
                <br/>
                <input type="text" name="extracto" value="{{ old('extracto') }}" size="50" placeholder="Ingresa un extracto de la publicación" required>
                <br/>
                @error('extracto')
                    <br/>
                    <small class="text-danger">*{{$message}}</small>
                    <br/>
                @enderror   
            </label>
            <br/>
            <label>
                <b>Contenido publicación:</b>
                <br/>
                <textarea type="textarea" name="contenido" rows="5" cols="50" placeholder="Ingresa el contenido de la publicación" required>{{ old('contenido') }}</textarea>
                <br/>
                @error('contenido')
                    <br/>
                    <small class="text-danger">*{{ $message }}</small>
                    <br/>
                @enderror
            </label>
            <br/>
            <label>
                <b>Caducable:</b>
                <input type="checkbox" name="caducable" value="1" @if (old('caducable') === '1') checked @endif>
                <br/>
                @error('caducable')
                    <br/>
                    <small class="text-danger">*{{ $message }}</small>
                    <br/>
                @enderror
            </label>
            <br/>
            <label>
                <b>Comentable:</b>
                <input type="checkbox" name="comentable" value="1" @if (old('comentable') === '1') checked @endif>
                <br/>
                @error('comentable')
                    <br/>
                    <small class="text-danger">*{{ $message }}</small>
                    <br/>
                @enderror
            </label>
            <br/>
            <label>
                <b>Acceso:</b>
                <select name="acceso" name="acceso" value="{{ old('acceso') }}">
                    <option value="privado" {{ old("acceso") == "privado" ? "selected" : "" }}>privado</option>
                    <option value="público" {{ old("acceso") == "público" ? "selected" : "" }}>público</option>
                </select>
                @error('acceso')
                    <br/>
                    <small class="text-danger">*{{ $message }}</small>
                    <br/>
                @enderror
            </label>
            <br/>
            <br/>
            <input type="submit" value="Crear Post">
        </form>
    </body>
</html>