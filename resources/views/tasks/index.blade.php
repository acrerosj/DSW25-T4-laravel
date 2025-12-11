<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Tareas</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tarea</th>
                <th>Nivel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->priority }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>