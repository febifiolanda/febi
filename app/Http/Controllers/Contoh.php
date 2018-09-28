<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contoh extends Controller
{
   function index(){
	   return view('index');
   }
   function tambah (){
	   echo 'controller contoh fx tambah';
   }
   function view (){
	   echo 'controller contoh fx view';
   }
   function halaman2(){
	   return view('halamandua');
   }
   function halaman3(){
	   return view('halamantiga');
   }
}
