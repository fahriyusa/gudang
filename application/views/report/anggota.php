<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<title>
    <?= $title ?>
</title>

<body>
    <div style="text-align:center">
        <h3> Laporan Daftar Anggota</h3>
    </div>
    <table id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Rt</th>
                <th>Rw</th>
                <th>no telepon</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($anggota as $row) { ?>
            <tbody>
                <tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $row->nama_wr ?>
                    </td>
                    <td>
                        <?= $row->alamat_wr ?>
                    </td>
                    <td>
                        <?= $row->rt ?>
                    </td>
                    <td>
                        <?= $row->rw ?>
                    </td>
                    <td>
                        <?= $row->no_tlp_wr ?>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</body>
<script>
    window.print()
</script>
</html>