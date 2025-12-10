<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ Route('employees.update', ['employee' => $employee]) }}" method="post">
        @csrf
        @method('put')
        <p>
            <input type="text" name="name" placeholder="Nombre de usuario..." value="{{ $employee->name }}">
        </p>
        <p>
            <input type="number" name="salary" placeholder="salario..." value="{{ $employee->salary }}">
        </p>
        <p>
            <input type="submit" value="Modificar">
        </p>
    </form>
</body>
</html>