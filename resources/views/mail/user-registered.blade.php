<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Registration</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 30px;
        }
        .container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }
        h2 {
            color: #333333;
            text-align: center;
            border-bottom: 2px solid #007bff;
            padding-bottom: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 10px 14px;
            text-align: left;
            border-bottom: 1px solid #eaeaea;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
            width: 35%;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Registration Submitted</h2>
        <p>Here are the registration details:</p>

        <table>
            @foreach ($data as $key => $value)
                <tr>
                    <th>{{ ucfirst(str_replace('_', ' ', $key)) }}</th>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </table>

        <div class="footer">
            This message was generated automatically by your system.
        </div>
    </div>
</body>
</html>
