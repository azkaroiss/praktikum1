<?php
function crul($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = crul("http://localhost/praktikum1/Pertemuan2/getwisata.php");
$data = json_decode($send, true);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Landmark dan Tarif</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
        }

        .tarif-gratis {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>KOTA</th>
                <th>LANDMARK</th>
                <th>TARIF</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $d) {
                $tarifClass = ($d['tarif'] == 'GRATIS') ? 'tarif-gratis' : '';
                echo "<tr>
                        <td>{$d['kota']}</td>
                        <td>{$d['landmark']}</td>
                        <td class='{$tarifClass}'>{$d['tarif']}</td>
                        </tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>