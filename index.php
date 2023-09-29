<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Mentoring PKL</title>
    <style>
        .items {
            width: 300px;
            height: 75px;
            background-color: #eae7e7;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            padding: 10px 15px;
            margin: 10px 15px;
            cursor: pointer;
        }

        .items h2 {
            margin: 0px;
        }

        .items p {
            margin-bottom: 0px;
            text-align: right;
        }

        .container {
            flex-wrap: wrap;
            display: flex;
        }
    </style>
</head>

<body>
    <h1>List Penugasan</h1>

    <div class="container">
        <div class="items" onclick="window.location.href = window.location.href + 'regresi_linear'">
            <h2>Regresi Linear</h2>
            <p>Tingkat Kesulitan : Medium</p>
        </div>

        <div class="items" onclick="window.location.href = window.location.href + 'regresi_logistic'">
            <h2>Regresi Logistic</h2>
            <p>Tingkat Kesulitan : Sulit</p>
        </div>

        <div class="items" onclick="window.location.href = window.location.href + 'fungsi_aktivasi'">
            <h2>Fungsi Aktivasi</h2>
            <p>Tingkat Kesulitan : Mudah</p>
        </div>

        <div class="items" onclick="window.location.href = window.location.href + 'cosine_similarity'">
            <h2>Cosine Similarity</h2>
            <p>Tingkat Kesulitan : Sedang</p>
        </div>
    </div>
</body>

</html>