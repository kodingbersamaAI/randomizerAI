<!-- jQuery -->
<script src="../../adminlte/plugins/jquery/jquery.min.js"></script>
<script src="../../adminlte/plugins/jquery/jquery.link.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../adminlte/js/adminlte.js"></script>
<!-- Parameter Remover -->
<script>
  // Mendeteksi event sebelum halaman dimuat ulang
  window.addEventListener('load', function (event) {
    // Lakukan sesuatu saat halaman dimuat ulang (misalnya refresh)
    console.log('Halaman dimuat ulang');
    // Hapus parameter dari URL jika dibutuhkan
    if (window.history.replaceState) {
        var newUrl = window.location.href.split('index.php')[0];
        window.history.replaceState({ path: newUrl }, '', newUrl);
    }
});
</script>