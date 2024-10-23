<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9f5e9;
        }

        td {
            border-bottom: 1px solid #ddd;
            color: #555;
        }

        td:first-child {
            background-color: #ffecd2;
            font-weight: bold;
        }

        @media screen and (max-width: 600px) {
            table, th, td {
                display: block;
                width: 100%;
            }

            th, td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            th::before, td::before {
                content: attr(data-label);
                position: absolute;
                left: 15px;
                font-weight: bold;
                text-align: left;
            }

            th, td {
                text-align: right;
            }
        }
    </style>
</head>

<body>
    <h1 align="center">Listado de Clientes</h1>
    <hr><br>
    <table>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Categoria</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td style="background-color: #ffecd2" data-label="Código">{{ $item['codigo'] }}</td>
                <td data-label="Producto">{{ $item['nombre'] }}</td>
                <td data-label="Precio">{{ $item['edad'] }}</td>
                <td data-label="Marca">{{ $item['categoria'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>