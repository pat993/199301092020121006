<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTables Example</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

    <h1 style="text-align: center;">Data Peserta Rekrutment Tim Development MA RI</h1>

    <table id="myDataTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Timestamp</th>
                <th>NIP</th>
                <th>Satuan Kerja</th>
                <th>Posisi yang Dipilih</th>
                <th>Bahasa Pemrograman yang Dikuasai</th>
                <th>Framework yang Dikuasai</th>
                <th>Database yang Dikuasai</th>
                <th>Tools yang Dikuasai</th>
                <th>Pernah membuat mobile apps</th>
                <th>Jenis Attribut</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data_rekrutment as $print) {
            ?>
                <tr>
                    <td><?= $print['id']; ?></td>
                    <td><?= $print['nama']; ?></td>
                    <td><?= $print['timestamp']; ?></td>
                    <td><?= $print['nip']; ?></td>
                    <td><?= $print['satuan_kerja']; ?></td>
                    <td><?= $print['posisi_yang_dipilih']; ?></td>
                    <td><?= $print['bahasa_pemrograman_yang_dikuasai']; ?></td>
                    <td><?= $print['framework']; ?></td>
                    <td><?= $print['database_yang_dikuasai']; ?></td>
                    <td><?= $print['tools_yang_dikuasai']; ?></td>
                    <td><?= $print['pernah_membuat_mobile_apps']; ?></td>
                    <td><?= $print['jenis_attr']; ?></td>
                    <td><?= $print['value']; ?></td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myDataTable').DataTable();
        });
    </script>

</body>

</html>