<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Mendatang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #d7d7d9;
            color: #333;
        }

        .events-section {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 50px auto;
            max-width: 700px;
        }

        .events-section h2 {
            font-size: 2.5em;
            text-align: center;
            color: #22211d;
            margin-bottom: 20px;
            position: relative;
        }

        .events-section h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background-color: #bfb488;
            margin: 10px auto 0;
        }

        .events-section ul {
            list-style-type: none;
            padding-left: 0;
        }

        .events-section ul li {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .events-section ul li:hover {
            background-color: #e9ecef;
            transform: translateY(-2px);
        }

        .events-section ul li a {
            text-decoration: none;
            color: #86674a;
            font-weight: bold;
           
        }

        .events-section ul li a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .events-section h2 {
                font-size: 2em;
            }
        }
    </style>
</head>

<body>

    <div class="events-section">
        <h2>Event Mendatang</h2>
        <ul>
            <li class="list-group-item"><a href="#" class="text-decoration-none">Touring Jakarta-Bali -
                    15 Desember 2024</a></li>
            <li class="list-group-item"><a href="#" class="text-decoration-none">Adventure Ride Tahunan - 10
                    Januari 2025</a></li>
            <li class="list-group-item"><a href="#" class="text-decoration-none">Workshop Keselamatan Berkendara -
                    25 Februari 2025</a></li>
            <li class="list-group-item"><a href="#" class="text-decoration-none">Turing Musim Panas ke Bali - 5
                    Maret 2025</a></li>
            <li class="list-group-item"><a href="#" class="text-decoration-none">Thunder Riders Anniversary - 20 Maret
                    2025</a></li>
            <li class="list-group-item"><a href="#" class="text-decoration-none">Jambore Motor Nasional - 30 April
                    2025</a></li>
            <li class="list-group-item"><a href="#" class="text-decoration-none">Turing Malam di Jakarta - 15 Mei
                    2025</a></li>
        </ul>
    </div>

</body>

</html>
