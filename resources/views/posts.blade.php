
<html>
    <body>
        <form action="{{ route('posts.store') }}" method ="POST">
            @csrf

            <label>
                {{__("título")}}
                Título de la publicación:
                <input type="text" name="título" value="{{ old('título')}}" placeholder="Ingresa aquí el título de la publicación" >
                <br/>
            </label>
            <br>
            <label>
                Extracto publicación:
                <input type="text" name="extracto" value="{{ old('extracto')}}" placeholder="Ingresa un extracto de la publicación">
                <br/>  
            </label>
            <br>
            <label>
                Contenido publicación:
                <input type="text" name="contenido" value="{{ old('contenido')}}" placeholder="Ingresa el contenido de la publicación">
                <br/>
            </label>
            <br>
            <label>
                Caducable:
                <input type="checkbox" name="caducable">
                <br/>
            </label>
            <br>
            <label>
                Comentable:
                <input type="checkbox" name="comentable">
                <br/>
            </label>
            <br>
            <label>
                Acceso:
                <select name="acceso" name="acceso" value="{{ old('acceso')}}">
                    <option value="privado">privado</option>
                    <option value="público">público</option>
                </select>
            </label>
            <br>
            <br>
            <input type="submit" value="Crear">
        </form>
    </body>
</html>