<!-- views/admin/v_lihat_pdf.php -->

<?= $this->extend('admin/v_lihat_pdf'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View PDF</div>

                <div class="card-body">
                    <?php if ($pentest['pdf_data']) : ?>
                        <embed src="data:application/pdf;base64,<?= $pentest['pdf_data']; ?>" type="application/pdf" width="100%" height="600px" />
                    <?php else : ?>
                        <p>PDF file not found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
