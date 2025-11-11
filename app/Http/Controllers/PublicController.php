<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
class PublicController extends Controller
{
    public function index()
    {
        $cat = DB::table('tbl_cat')->where('status_cat',1)->get();
        $postinganbarang = DB::table('tbl_item')->get();
        $postinganblog = DB::table('tbl_blog')->get();
        return view('index',['cat'=>$cat, 'postinganbarang'=>$postinganbarang, 'postinganblog'=>$postinganblog]);
    }
    public function listproduct()
    {
        $data = DB::table('tbl_item')->where('status_item',1)->paginate(9);
        $jumlahdata = DB::table('tbl_item')->where('status_item',1)->count();
        $cat = DB::table('tbl_cat')->get();
        return view('shop.listproduct',['data'=>$data, 'cat'=>$cat , 'jumlahdata'=>$jumlahdata]);
    }
    public function listproductdetail($id)
    {
        $data = DB::table('tbl_item')->where('kd_item',$id)->get();
        return view('shop.productdetail',['data'=>$data]);
    }
    public function blogdetail($id)
    {
        $data = DB::table('tbl_blog')->where('kd_blog',$id)->get();
        return view('blog.blogdetail',['data'=>$data]);
    }

    public function blog()
    {
        $data = DB::table('tbl_blog')->get();
        return view('blog.view',['data'=>$data]);
    }
    public function contact()
    {
        return view('contact.view');
    }

    public function sendemail(Request $request)
    {
        $data = 'nama :'.$request->nama.'<br> email :'.$request->email.'<br> Pesan : '.$request->pesan;

        try{
            Mail::send('isiemail', array('pesan' => $data) , function($pesan) use($request){
                $pesan->to('jashherbs@gmail.com','Verifikasi')->subject('Pelanggan Baru');
                $pesan->from(env('MAIL_USERNAME','admin@jashherbs.com'),'Admin JASH HERBS ORGANIC | OFFICIAL');
            });
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }

        return redirect()->back();
    }
}
