<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postingan_barang;
use Illuminate\Support\Str;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $databarang = DB::table('tbl_item')->get();
        $datablog = DB::table('tbl_blog')->get();
        return view('home',[
            'databarang'=>$databarang,
            'datablog'=>$datablog
        ]);
    }
    public function tambahbarang()
    {
        $cat = DB::table('tbl_cat')->get();
        return view('admin.tambahpostinganbarang',['cat'=>$cat]);
    }
    public function posttambahbarang(Request $request)
    {
        $kd_item = "item-".Str::random(10);
        DB::table('tbl_item')->insert(
            [
                'kd_item' => $kd_item,
                'kd_cat' => $request->input('kategori_barang'),
                'nama_item' => $request->input('nama_barang'),
                'harga_item' => $request->input('harga_barang'),
                'deskripsi_item' => $request->input('deskripsi_barang'),
                'file_barang' => $request->file('gambar_barang')->storeAs('data_file/fileuploaditem/'.$kd_item,Str::random(10).'postbarang.jpg'),
                'status_item' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        return redirect()->back();
    }
    public function posteditbarang(Request $request)
    {
        if ($request->file('gambar_barang') == NULL) {
            DB::table('tbl_item')
            ->where('kd_item', $request->input('kd_barang'))
            ->update([
                'nama_item' => $request->input('nama_barang'),
                'harga_item' => $request->input('harga_barang'),
                'deskripsi_item' => $request->input('deskripsi_barang'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        } else {
            DB::table('tbl_item')
            ->where('kd_item', $request->input('kd_barang'))
            ->update([
                'nama_item' => $request->input('nama_barang'),
                'harga_item' => $request->input('harga_barang'),
                'deskripsi_item' => $request->input('deskripsi_barang'),
                'file_barang' => $request->file('gambar_barang')->storeAs('data_file/fileuploaditem/'.$request->input('kd_barang'),Str::random(10).'postbarang.jpg'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

        return redirect()->back();
    }
    public function posthapusbarang(Request $request)
    {
        DB::table('tbl_item')->where('kd_item', $request->input('kd_barang'))->delete();

        return redirect()->back();
    }
    public function deletedatabarang($id)
    {
        $cekdata = DB::table('tbl_item')->where('kd_item',$id)->get();

        return view('admin.postingbarang.deletedata',['data'=>$cekdata]);
    }
    public function lihatdata($id)
    {
        $cekdata = DB::table('tbl_item')->where('kd_item',$id)->get();

        return view('admin.postingbarang.showdata',['data'=>$cekdata]);
    }
    public function editdatabarang($id)
    {

        $cekdata = DB::table('tbl_item')->where('kd_item',$id)->get();

        return view('admin.postingbarang.editdata',['data'=>$cekdata]);
    }


    public function tambahblog()
    {
        $cat = DB::table('tbl_cat')->get();
        return view('admin.tambahpostinganblog',['cat'=>$cat]);
    }
    public function posttambahblog(Request $request)
    {
        $kd_item = "blog-".Str::random(10);
        DB::table('tbl_blog')->insert(
            [
                'kd_blog' => $kd_item,
                'kd_cat' => $request->input('kategori_barang'),
                'judul_blog' => $request->input('judul_blog'),
                'deskripsi' => $request->input('deskripsi'),
                'file' => $request->file('gambar')->storeAs('data_file/fileuploadblog/'.$kd_item,Str::random(10).'postbarang.jpg'),
                'status_blog' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        return redirect()->back();
    }

    public function lihatdatablog($id)
    {
        $cekdata = DB::table('tbl_blog')->where('kd_blog',$id)->get();
        return view('admin.postinganblog.showdata',['data'=>$cekdata]);
    }
    public function editdatablog()
    {

    }
    public function deletedatablog()
    {

    }
}
