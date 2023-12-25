<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $links = ["url1"=>"about_us","url2"=>"contact_page"];
        return view('home',compact('links'));
    }
    public function about()
    {
        $tex="    Что такое Тензор? Это вектор. И мы движемся вперед с 1996 года как в работе, так и просто по жизни.
    «Тензор» – аккредитованный ФНС, ПФ и Росстатом оператор электронного документооборота, сертифицированный EDI‑провайдер.

    А еще это один из крупнейших удостоверяющих центров в России. Это значит, что 50% всех электронных ключей, используемых для сдачи электронной отчетности, участия в торгах и получения госуслуг, выданы нами.";
        $about = ["url"=>"about_us","text"=>$tex];
        return view('about',compact('about'));
    }
    public function contact()
    {
        $contact_us=["fio"=>"Алферин Станислав","number_phone"=>"8(988)423-32-21"];
        return view('contact',compact('contact_us'));
    }
    public function result(Request $request)
    {
        $phone = $request->input('number_phone');
        $fio = $request->input('fio');
        $links = ["url1"=>"about_us","url2"=>"contact_page"];
        if (empty($phone) || empty($fio)){
            return view('home',compact('links'));
        }
        else{
            return view('home',compact('links','fio','phone'));
        }

    }
}
