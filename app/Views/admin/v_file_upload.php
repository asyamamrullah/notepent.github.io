<!-- File: app/Views/pdf_upload.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload and PDF Viewer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Upload PDF File and View</h2>

        <form id="pdfForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pdfFile">Choose PDF File:</label>
                <input type="file" class="form-control-file" id="pdfFile" name="pdfFile" accept=".pdf" required>
            </div>
            <button type="button" class="btn btn-primary" onclick="uploadPDF()">Upload and View</button>
        </form>

        <div class="mt-3" id="pdfViewerContainer">
            <!-- PDF.js Viewer will be embedded here -->
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- PDF.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>

    <script>
    function uploadPDF() {
        var formData = new FormData(document.getElementById('pdfForm'));

        // Kirim data ke controller CodeIgniter menggunakan AJAX atau fetch API
        fetch('<?= site_url('pdf/upload') ?>', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Panggil fungsi untuk menampilkan PDF menggunakan PDF.js
                displayPDF(data.filePath);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function displayPDF(filePath) {
        // Konfigurasi PDF.js
        pdfjsLib.GlobalWorkerOptions.workerSrc =
            'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js';

        // Kode PDF.js untuk menampilkan PDF
        var pdfViewerContainer = document.getElementById('pdfViewerContainer');
        pdfViewerContainer.innerHTML = ''; // Hapus konten sebelumnya

        var pdfContainer = document.createElement('div');
        pdfContainer.style.width = '100%';
        pdfContainer.style.height = '500px';
        pdfViewerContainer.appendChild(pdfContainer);

        // Muat dan render PDF
        pdfjsLib.getDocument(filePath).promise.then(function(pdfDoc) {
            pdfDoc.getPage(1).then(function(page) {
                var viewport = page.getViewport({
                    scale: 1
                });
                var canvas = document.createElement('canvas');
                var context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                pdfContainer.appendChild(canvas);

                page.render({
                    canvasContext: context,
                    viewport: viewport
                });
            });
        });
    }
    </script>

</body>

</html>