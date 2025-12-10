<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de empleados</h1>
    <p><a href="{{ Route('employees.create') }}">Crear Empleado</a></p>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td><a href="{{ Route('employees.show', ['employee' => $employee]) }}">{{ $employee->name }}</a></td>
                <td>{{ $employee->salary }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>