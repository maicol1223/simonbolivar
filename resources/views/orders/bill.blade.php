<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 100px;
            border-radius: 50%;
        }
        .header h1 {
            margin: 10px 0;
            color: #036f17;
        }
        .content p {
            margin: 0 0 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #dee2e6;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #08aff6;
            color: #000001;
        }
        .total {
            text-align: right;
            margin-right: 20px;
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ asset('/img/logo.jpg') }}" alt="Logo de la Droguería">
        <h1>Droguería Simón Bolívar</h1>
    </div>

    <div class="content">
        <p>
            <strong>Fecha:</strong> {{ $order->date_order }}
            <br>
            <strong>Total:</strong> ${{ $order->total }}
            <br>
            <strong>Cliente:</strong> {{ $client->name }}
            <br>
            <strong>Documento:</strong> {{ $client->document }}
        </p>
    </div>

    <table>
        <thead>
            <tr>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($details as $detail)
                <tr>
                    <td>{{ $detail->product->name }}</td>
                    <td>${{ $detail->product->price }}</td>
                    <td>{{ $detail->quantity }}</td>
                    <td>${{ $detail->product->price * $detail->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="total">
        <p>Total: ${{ $order->total }}</p>
    </div>
</body>

</html>
