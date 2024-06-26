<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rsudpringsewu</title>
    <style>
        a {
            display: block;
            text-align: center;
            }
        img {
            margin: 20px auto 0; /* Mengatur margin atas dan bawah ke 0 dan margin samping secara otomatis */
            }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            text-align: center;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }
        button:hover {
            background-color: #0056b3;
        }

        footer {
        text-align: center;
        padding: 20px 0;
        background-color: #333;
        color: #fff;
        position: fixed;
        bottom: 0;
        width: 100%;
        }

    </style>
</head>
<body>

<a href="index.php">
    <img src="images/logo.png" alt="Logo" width="80" height="100">
</a>

    <div class="container">
        <h1>RSUD PRINGSEWU</h1>
        <form method="get">
            <label for="menu">Pilih Menu :</label>
            <select name="menu" id="menu">
                <option value="">Pilih Menu</option>
                <option value="farmasi.php">Farmasi</option>
                <option value="keuangan.php">Keuangan</option>
                <option value="surveilans.php">Surveilans</option>
            </select>
            <button type="submit">Pilih</button>
        </form>
    </div>

    <?php
    if(isset($_GET['menu'])) {
        $menu = $_GET['menu'];
        if(!empty($menu)) {
            header("Location: $menu");
            exit();
        }
    }
    ?>

    <footer>by IT rsudpringsewu</footer>
</body>
</html>
