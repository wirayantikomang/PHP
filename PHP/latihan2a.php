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

    .input1 {
        margin-left: 70px;
    }

    .input2 {
        margin-left: 63px;
    }

    .input3 {
        margin-left: 70px;
    }

    .hobi1 {
        margin-left: 109px;
    }

    /* .hobi2 {
            margin-left : 109px;
        }
        .hobi3 {
            margin-left : 109px;
        }
        .hobi4 {
            margin-left : 109px;
        }
        .hobi5 {
            margin-left : 109px;
        }
        .hobi6 {
            margin-left : 109px;
        }
        .hobi7 {
            margin-left : 109px;
        }
        .hobi8 {
            margin-left : 109px;
        } */

    form {
        margin: 20px;
        padding: 20px;
    }

    .tombol {
        margin-left: 100px;
    }
    </style>
</head>

<body>
    <form action="latihan2b.php" method="POST">
        <table>
            <tr>
                <td>
                    <h1>FORM BIODATA</h1>
                    <p>Nama : <input class="input1" type="text" name="nama"></p>
                    <p> Alamat : <input class="input2" type="text" name="alamat"> </p>
                    <p> Umur : <input class="input3" type="text" name="umur"> </p>
                    Pilih Jenis Kelamin:
                    <input type="radio" name="jenis_kelamin" value="Pria">Pria
                    <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita<br>

                    <p> Hobby : <br>
                        <input name="hobi[]" type="checkbox" alt="checkbox" class="hobi1" value="Music" />
                        <label for="hobi1">Music</label> <br>

                        <input class="hobi1" name="hobi[]" type="checkbox" alt="checkbox" value="Programming" />
                        <label for="hobi2">Programming</label> <br>

                        <input class="hobi1" type="checkbox" name="hobi[]" alt="checkbox" value="Game" />
                        <label for="hobi3">Game</label> <br>

                        <input class="hobi1" type="checkbox" name="hobi[]" alt="checkbox" value="Movies" />
                        <label for="hobi4">Movies</label> <br>

                        <input class="hobi1" type="checkbox" alt="checkbox" name="hobi[]" value="Travelling" />
                        <label for="hobi5">Travelling</label> <br>

                        <input class="hobi1" type="checkbox" name="hobi[]" alt="checkbox" value="Sport" />
                        <label for="hobi6">Sport</label> <br>

                        <input class="hobi1" type="checkbox" name="hobi[]" alt="checkbox" value="Organization" />
                        <label for="hobi7">Organization</label> <br>

                        <input class="hobi1" type="checkbox" name="hobi[]" alt="checkbox" value="Automotive" />
                        <label for="hobi8">Automotive</label> <br>

                        <input class="tombol" type="Submit">
                </td>
        </table>
    </form>
</body>

</html>