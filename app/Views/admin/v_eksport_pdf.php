<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Penetration Testing</title>
</head>
<body>
    <style>
        .border-table{
            font-family:  Arial, Helvetica, sans-serif;
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            font-size: 12px;
        
        }
        .border-table th{
            border : 1 solid #000;
            font-weight: bold;
            background-color: #e1e1e1;
        }
        .border-table td{
            border: 1 solid #000
        }
    </style>

    <h3>
        Laporan Hasil Penetration Testing
    </h1>

    <table class="border-table">
        <thead class="text-center bg-secondary">
            <tr class="">
                <th rowspan="2">Id User</th>
                <th rowspan="2">Pemohon</th>
                <th rowspan="2">Tanggal</th>
                <th rowspan="2">URL Target</th>
                <th rowspan="2">Nama Instansi</th>
                <th colspan="3">Penanggung Jawab</th>
                <th rowspan="2">IP Address</th>
                <th rowspan="2">Status Hosting</th>
                <th colspan="3">Hasil Pentest</th>
                <th rowspan="2">Keterangan</th>
            </tr>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Kontak</th>
                <th>High</th>
                <th>Medium</th>
                <th>Low</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($reportPentest as $k => $v) { 
            ?>
            <tr>
                <td><?php echo $v ['id_pentest'] ?></td>
                <td><?php echo $v ['pemohon'] ?></td>
                <td><?php echo $v ['tanggal'] ?></td>
                <td><?php echo $v ['url_target'] ?></td>
                <td><?php echo $v ['nama_in'] ?></td>
                <td><?php echo $v ['p_jawab'] ?></td>
                <td><?php echo $v ['p_email'] ?></td>
                <td><?php echo $v ['p_no'] ?></td>
                <td><?php echo $v ['ip_addres'] ?></td>
                <td><?php echo $v ['status_hg'] ?></td>
                <td><?php echo $v ['h_high'] ?></td>
                <td><?php echo $v ['h_med'] ?></td>
                <td><?php echo $v ['h_low'] ?></td>
                <td><?php echo $v ['ket'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>