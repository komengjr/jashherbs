<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css" />
<div class="modal-header">
    <h5 class="modal-title">Edit Data</h5>
    <button type="button" class=" btn-danger" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

</div>
    <div class="card-body">
        <form class="row" method="POST" action="{{ url('postinganbarang/posteditbarang', []) }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" value="{{$data[0]->nama_item}}" autofocus>
                <input type="text" name="kd_barang" class="form-control" value="{{$data[0]->kd_item}}" hidden>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Harga Barang</label>
                <input type="text" name="harga_barang" class="form-control" value="{{$data[0]->harga_item}}"  autofocus>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Kategori Barang</label>
                <select name="kategori_barang" id="" class="form-control">
                    <option value="{{$data[0]->kd_cat}}">{{$data[0]->kd_cat}}</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Gambar Barang</label>
                <input type="file" name="gambar_barang" id="gambar_barang" class="form-control" autofocus>
            </div>


            <div class="col-md-12">
                <label for="inputZip" class="form-label">Deskripsi</label>
                <textarea name="deskripsi_barang" id="summernoteEditor" cols="30" rows="10">
                    @php
                        echo $data[0]->deskripsi_item
                    @endphp
                </textarea>
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
                    <button type="submit" class="btn btn-primary px-5"><i class="fa fa-save"></i> Ubah & Posting</button>
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
