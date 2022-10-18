<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    th,
    td,
    table {
        border:  solid black 3px;
    }
    </style>
</head>

<body>
    <table>
    <tr>
            <td>
        <h1>FORM BIODATA- REVIEW</h1>
        <table>
            <tr>
                <td> Nama </td>
                <td><?php echo $_POST["nama"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    <?php echo $_POST["alamat"];?>
                </td>
            </tr>
            <tr>
                <td> Umur </td>
                <td>
                    <?php echo $_POST["umur"];?>
                </td>
            <tr>
                <td>Jenis Kelamin </td>
                <td>
                    <?php echo $_POST["jenis_kelamin"];?>
                </td>
            </tr>
            <tr>
                <td>
                    Hobby
                </td>
                <td>
                    <?php
      $tampung = 1;
        foreach ($_POST['hobi'] as $item) {
           if ($tampung !=count ($_POST ["hobi"]) ){
            echo $item .",";  $tampung++; 
          }
           
         else {
          echo $item ;
        }
        }

        ?>
                </td>
            </tr>
            </td>
            </tr>

        </table>

</body>

</html>