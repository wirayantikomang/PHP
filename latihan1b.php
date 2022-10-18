<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        border: black solid 3px;
    }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>
                <h1>STATUS KELULUSAN MAHASISWA</h1>
                <p> Mahasiswa dengan nama <?php echo $_POST["nama"];  ?> NIM <?php echo $_POST["nim"] ?>
                    berhasil menyelesaikan studi S1 dengan predikat STATUS KELULUSAN <?php echo $_POST["opt"] ?> </p>
        </tr>
        </td>
    </table>
</body>

</html>