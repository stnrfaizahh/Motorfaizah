
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f5;
            color: #333;
        }

        .gallery-section {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 50px auto;
            max-width: 900px;
        }

        .gallery-section h2 {
            font-size: 2.5em;
            text-align: center;
            color: #bfb488;
            margin-bottom: 20px;
            position: relative;
        }

        .gallery-section h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background-color: #bfb488;
            margin: 10px auto 0;
        }

        .gallery-section .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .gallery-section .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .gallery-section img {
            border-radius: 10px 10px 0 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .gallery-section h2 {
                font-size: 2em;
            }
        }
    </style>
</head>

<body>

    <div class="gallery-section">
        <h2>Galeri Foto</h2>
        <div class="row">
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/img/event1.jpeg" class="img-fluid" alt="Event 1">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/img/event2.jfif" class="img-fluid" alt="Event 2">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/img/event3.jfif" class="img-fluid" alt="Event 3">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/img/event4.jpg" class="img-fluid" alt="Event 1">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/img/event5.jpg" class="img-fluid" alt="Event 2">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/img/event6.jpg" class="img-fluid" alt="Event 3">
                </div>
            </div>
            
        </div>
    </div>

</body>

</html>
