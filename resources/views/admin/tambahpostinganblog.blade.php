<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css" />
<div class="card">

    <div class="card-header text-uppercase">Tambah Data Postingan Blog</div>
    <div class="card-body">
        <form class="row" method="POST" action="{{ url('postinganblog/posttambah', []) }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Judul Blog</label>
                <input type="text" name="judul_blog" class="form-control" autofocus >
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Kategori Barang</label>
                <select name="kategori_barang" id="" class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach ($cat as $cat)
                        <option value="{{$cat->kd_cat}}">{{$cat->nama_cat}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control" autofocus>
            </div>


            <div class="col-md-12">
                <label for="inputZip" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="summernoteEditor" cols="30" rows="10"></textarea>
            </div>
            <div class="col-md-12">
                <div class="icheck-material-primary">
                    <input type="checkbox" id="user-checkbox1" checked="" />
                    <label for="user-checkbox1">I Agree Terms & Conditions</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary px-5"><i class="fa fa-save"></i> Simpan & Posting</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{ url('assets/plugins/summernote/dist/summernote-bs4.min.js', []) }}"></script>
<script>
    $('#summernoteEditor').summernote({
        height: 400,
        tabsize: 2
    });
</script>
