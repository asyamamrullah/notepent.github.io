<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><</title>
</head>
<body>

<div class="container mt-3">
    <h2>Lihat PDF</h2>
    
    <embed src="data:application/pdf;base64,<?= $pdf_data ?>" width="100%" height="600px">
    
    <a href="<?= base_url('tabelpentest') ?>" class="btn btn-primary mt-3">Kembali</a>
</div>

</body>
</html>
