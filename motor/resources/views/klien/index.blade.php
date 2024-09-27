<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Klien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        .client-list-section {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 50px auto;
            max-width: 800px;
        }

        .client-list-section h2 {
            font-size: 2.5em;
            text-align: center;
            color: #bfb488;
            margin-bottom: 20px;
        }

        .client-list-section ul {
            list-style: none;
            padding-left: 0;
        }

        .client-list-section ul li {
            font-size: 1.2em;
            color: #555;
            padding-left: 30px;
            position: relative;
            margin-bottom: 15px;
        }

        .client-list-section ul li::before {
            content: '✔';
            font-size: 1.2em;
            color: #bfb488;
            position: absolute;
            left: 0;
            top: 2px;
        }

        .client-list-section {
            padding: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .client-list-section {
                padding: 15px;
            }

            .client-list-section h2 {
                font-size: 2em;
            }

            .client-list-section ul li {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>

    <div class="client-list-section">
        <h2>Daftar Klien</h2>
        <ul>
            <li>Asosiasi Motor Indonesia</li>
            <li>Yayasan Amal XYZ</li>
            <li>Grup Riders Petualangan</li>
            <li>Komunitas Motor Sport Nasional</li>
            <li>PT. Sepeda Motor Sejahtera</li>
            <li>Yayasan Peduli Lingkungan</li>
            <li>Klub Motor Klasik Dunia</li>
            <li>Asosiasi Pemuda Pecinta Motor</li>
        </ul>

    </div>

</body>

</html>
