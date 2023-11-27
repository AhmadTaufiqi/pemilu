<!-- Footer -->

<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">

                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<!-- modal sukses simpan start -->
<div class="modal fade" id="sukses_simpan" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <span class="iconify" data-icon="icon-park-solid:check-one" style="color: #37d750;" data-width="62.5"></span>
                    <i class="fe fe-check-circle fe-24 text-success" style="font-size:112px;"></i>
                    <h3 class="text-center mt-3" style="color: #37d750;">Success Change Data</h3>
                    <p class="text-center"><?= $this->session->flashdata('message') ?? 'Berhasil Menyimpan Data' ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal sukses simpan end -->

<!-- datatables -->
<?php if ($this->session->flashdata('message')) : ?>
    <script>
        $(function() {
            $('#sukses_simpan').modal('show')
        })
    </script>
<?php endif; ?>
<script src="<?= base_url() ?>assets/dist/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/dist/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/dist/js/dataTables.bootstrap4.min.js"></script>

<!-- Tabler Core -->
<script src="<?= base_url('assets/'); ?>dist/js/tabler.min.js" defer></script>
<script src="<?= base_url('assets/'); ?>dist/js/demo.min.js" defer></script>
<script src="<?= base_url('assets/'); ?>dist/js/tom-select.complete.min.js" defer></script>
<script>
    $('#datatable1').DataTable({
        dom: ('tp')
    });
</script>

</body>

</html>