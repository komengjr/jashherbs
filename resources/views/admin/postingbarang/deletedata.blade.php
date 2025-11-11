<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css" />
<div class="modal-header">
    <h5 class="modal-title">Apakah Anda Yakin Untuk Menghapus Permantn ?</h5>
    <button type="button" class=" btn-danger" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

</div>
    <div class="card-body">
        <form class="row" method="POST" action="{{ url('postinganbarang/posthapusbarang', []) }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" value="{{$data[0]->nama_item}}" autofocus>
                <input type="text" name="kd_barang" class="form-control" value="{{$data[0]->kd_item}}" hidden>
            </div>

            <div class="col-md-12">
                <div class="icheck-material-primary">
                    <input type="checkbox" id="user-checkbox1" checked="" />
                    <label for="user-checkbox1">I Agree Terms & Conditions</label>
                </div>
            </div>
            <br><br>
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-danger px-5"><i class="fa fa-trash"></i> Hapus Posting</button>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ url('assets/plugins/summernote/dist/summernote-bs4.min.js', []) }}"></script>
    <script>
        $('#summernoteEditor').summernote({
            height: 400,
            tabsize: 2
        });
    </script>
