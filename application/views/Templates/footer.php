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

 <!-- datatables -->
 <script src="<?= base_url()?>assets/dist/js/jquery.min.js"></script>
 <script src="<?= base_url()?>assets/dist/js/jquery.dataTables.min.js"></script>
 <script src="<?= base_url()?>assets/dist/js/dataTables.bootstrap4.min.js"></script>

 <!-- Tabler Core -->
 <script src="<?= base_url('assets/'); ?>dist/js/tabler.min.js" defer></script>
 <script src="<?= base_url('assets/'); ?>dist/js/demo.min.js" defer></script>
 <script>
     $('#datatable1').DataTable({
        dom:('tp')
     });
 </script>

 </body>

 </html>