<html>

<head>
    <title>Praktikum-11 | WEB</title>
    <style>
        body {
            background-color: rgb(80, 205, 164);
        }

        .judul {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 35px;
            color: white;
        }

        td {
            font-size: 25px;

            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
        }

        .href {
            font-family: 'Times New Roman', Times, serif
        }
    </style>
</head>

<body>
    <div class="isi-form" style="border:0; padding:5px; width:730px; height:auto;">
        <table>
            <tr height="46">
                <td>
                    <h2 class="judul">TAMBAH DATA</h2>
                </td>
            </tr>
        </table>
        <form action="proses.php" method="POST" class="form">
            <table width="730" border="0" align="center">

                <tr height="46">
                    <td>Name</td>
                    <td><input type="text" name="name" size="30" maxlength="30" style="width: 95%" /></td>
                </tr>
                <tr height=" 46">
                    <td>Email</td>
                    <td><input type="text" name="email" size="50" maxlength="40" style="width: 95%" /></td>
                </tr>
                <tr height=" 46">
                    <td>Address</td>
                    <td><input type="text" name="address" size="50" maxlength="50" style="width: 95%" /></td>
                </tr>
                <tr height=" 46">
                    <td>Gender</td>
                    <td><select name="gender" style="width: 95%">
                            <option value="-">- Pilih Gender -
                            <option value="male">Male
                            <option value="female">Female
                        </select></td>
                </tr>
                <tr height="46">
                    <td>Position</td>
                    <td><input type="text" name="position" size="50" maxlength="30" style="width: 95%" /></td>
                </tr>
                <tr height=" 46">
                    <td>Status</td>
                    <td><select name="status" style="width: 95%">
                            <option value="-">- Pilih Status -
                            <option value="fulltime">Fulltime
                            <option value="parttime">Parttime
                        </select></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td><input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
            <table>
                </tr>
                <td class="href"><a href="tampil.php">Tampilan Inputan Data Mahasiswa</a></td>
                <tr>
            </table>

        </form>
    </div>
</body>

</html>