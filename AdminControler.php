<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminControler extends Controller
{
    public function index (){
        $room =Room::all();
    if (Auth::check())
    {
        $usertype = Auth()->user()->usertype;
        if($usertype == 'user')
        {
            return view('home.index',compact('room'));
        }else if ($usertype == 'admin'){
            return view ('admin.index');
        }else {
            return redirect()->route('login');
        }
    }
    }

    public function home()
    {
        $room = Room::all();
        
        return view('home.index', compact('room'));
    }
    public function create_kamar()
    {
        return view(view: 'admin.create_kamar');
    }
    public function tambah_kamar(request $request){
        $data =new Room;
        $data->nama_kamar = $request->kamar;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->wifi = $request->wifi;
        $data->type_kamar = $request->type;
        $gambar=$request->gambar;
        if($gambar)
        {
            $gambarnama=time().'.'.$gambar->getClientOriginalExtention();
            $request->gambar->move('room',$gambarnama);
            $data->gambar=$gambarnama;
        }
        $data->save();
        return redirect()->back()->with('success','Data Berhasil Ditambahkan');
    }
    public function data_kamar() {
        $data = Room::all();
        return view('admin.data_kamar',compact('data'));
    }
    public function kamar_update($id){
        $data = Room::find($id);
        return view('admin.update_kamar',compact('data'));
    }
    public function edit_kamar(Request $request, $id){
        $data = Room::find($id);

        $data->nama_kamar = $request->kamar;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->wifi = $request->wifi;
        $data->type_kamar = $request->type;
        $gambar=$request->gambar;
        if($gambar)
        {
            $gambarnama=time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('room',$gambarnama);
            $data->gambar=$gambarnama;
        }
        $data->save();
        return redirect('data_kamar')->with('success','Kamar Berhasil Diupdate');
    }
    public function kamar_delete($id){
        $data = Room::find($id);
        $data->delete();
        return redirect()->back()->with('succes','room berhasil di hapus');
    }
    public function data_booking(){
        
        $bookings = Booking::with('room')->get();
        return view ('admin.data_booking', compact('bookings'));
    }
    public function booking_update($id){
        
        $bookings = Booking::find($id);
        return view ('admin.update_booking', compact('bookings'));
    }
    public function edit_booking(Request $request , $id){

        $bookings = Booking::find($id);
        $bookings->nama = $request->nama;
        $bookings->email = $request->email;
        $bookings->telepon = $request->telepon;
        $bookings->status = $request->status;
        $bookings->start_date = $request->start_date;
        $bookings->end_date = $request->end_date;
        $bookings->save();
        return redirect('data_booking')->with('success','Booking berhasil di update');
    }
    public function booking_delete($id){
        $bookings = Booking::find($id);
        $bookings->delete();
        return redirect()->back()->with('success','kamar berhasil di hapus');
    }
}

