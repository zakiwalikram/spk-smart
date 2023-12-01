<footer class="main-footer">
  <!-- <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div> -->
  <strong>Copyright &copy; KPRI KOGUSSEL <?= date('Y'); ?></strong>
</footer>
</div>
<script src="<?= base_url() ?>/_assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>/_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>/_assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/_assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() ?>/_assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>/_assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/_assets/dist/js/adminlte.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#select_all').on('click', function() {
      if (this.checked) {
        $('.check').each(function() {
          this.checked = true;
        })
      } else {
        $('.check').each(function() {
          this.checked = false;
        })
      }
    });
    $('.check').on('click', function() {
      if ($('.check:checked').length == $('.check').length) {
        $('#select_all').prop('checked', true)
      } else {
        $('#select_all').prop('checked', false)
      }
    })
  })

  function edit() {
    document.proses.action = 'edit.php';
    document.proses.submit();
  }

  function hapus() {
    var conf = confirm('Yakin hapus data?');
    if (conf) {
      document.proses.action = 'del.php';
      document.proses.submit();
    }
  }
</script>
<script>
  $(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging': false,
      'lengthChange': false,
      'searching': false,
      'ordering': true,
      'info': false,
      'autoWidth': false
    })
  })
</script>
<script>
  $(function() {
    $('#nav a[href~="' + location.href + '"]').parents('li').addClass('active');
  });
</script>
</body>

</html>