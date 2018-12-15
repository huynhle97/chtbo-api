<?php

namespace App\Http\Controllers;
use App\sanpham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
	// Load danh sach
    public function getAll(){
    	return sanpham::all();
    }
    // Xem chi tiet
    public function getById($id){
    	return sanpham::find($id);
    }
    // Them moi sp
    public function add(Request $request){
    	$sanphammoi = new sanpham();
    	$sanphammoi->tensp = $request['tensp'];
    	$sanphammoi->giatien=$request['giatien'];
    	$sanphammoi->mota=$request['mota'];
    	$sanphammoi->hinhanh=$request['hinhanh'];
    	if($sanphammoi->save()){
    		return sanpham::all();
    	}
    	return 0;
    }
    //Xoa sp
    public function delete($id){
    	if(sanpham::find($id)->delete()){
    		return sanpham::all();
    	}
    	return 0;
    }

    //Sua sp
    public function edit($id,Request $request){
    	$sp = sanpham::find($id);
    	if($request['tensp']){
    		$sp->tensp = $request['tensp'];
    	}
    	if($request['giatien']){
    		$sp->giatien = $request['giatien'];
    	}
    	if($request['hinhanh']){
    		$sp->hinhanh = $request['hinhanh'];
    	}
    	if($request['Mota']){
    		$sp->Mota = $request['Mota'];
    	}
    	if($sp->save()){
    		return sanpham::find($id);//Tim sp da sua
    	}
    	return 0;
    }
}
