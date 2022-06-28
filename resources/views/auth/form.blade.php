<form action="{{route('form')}}" method="POST">
    @csrf
    <input type="password" name="password" required>
    <button type="submit">Enviar</button>
</form>
