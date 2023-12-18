@extends('admin.layouts.main')
@section('container')
<button class="uk-button uk-button-default" type="button" uk-toggle="target: #modal-example">Hapus Data</button>

  <!-- Modal -->
  <div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
      <h2 class="uk-modal-title">Konfirmasi Hapus</h2>
      <p>Apakah Anda yakin ingin menghapus data ini?</p>
      <p class="uk-text-right">
        <button class="uk-button uk-button-default uk-modal-close" type="button">Batal</button>
        <button class="uk-button uk-button-danger" type="button" onclick="hapusData()">Hapus</button>
      </p>
    </div>
  </div>
  <script>
  function hapusData() {
    // Tempatkan logika penghapusan data di sini
    onclick('Data dihapus!');
    // Tutup modal setelah penghapusan data berhasil
    UIkit.modal('#modal-example').hide();
  }
</script>
@endsection