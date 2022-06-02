<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Auth;
// use Session;

class SettingController extends Controller
{

    public function saveSection4(Request $request){
        // return $request;
        if($request->hasfile("file")){
            // return "helo";
            $file = $request->file("file");
            $extenssion = $file->getClientOriginalExtension();
            $name1 = "section-". rand()  . "." .  $extenssion;
            $path = ('sections');
            $file->move($path, $name1);
        }else{
            $name = Setting::find(1);
            $name1 = $name->product_image1;
        }

        Setting::where("id","1")->update([
            "section3_background" => $name1,
            "section3_text" => $request->text,
            
        ]);
        session()->flash("success", "Logo saved successfully!");
        return back();
    }

    public function saveSection3 (Request $request){
        // return $request;
        if($request->hasfile("product1")){
            // return "helo";
            $file = $request->file("product1");
            $extenssion = $file->getClientOriginalExtension();
            $name1 = "section-". rand()  . "." .  $extenssion;
            $path = ('products');
            $file->move($path, $name1);
        }else{
            $name = Setting::find(1);
            $name1 = $name->product_image1;
        }

        if($request->hasfile("product1")){
            // return "helo";
            $file = $request->file("product2");
            $extenssion = $file->getClientOriginalExtension();
            $name2 = "section-". rand()  . "." .  $extenssion;
            $path = ('products');
            $file->move($path, $name2);
        }else{
            $name = Setting::find(1);
            $name2 = $name->product_image2;
        }

        Setting::where("id","1")->update([
            "section3_title" => $request->title,
            "product_image1" => $name1,
            "product_image2" => $name2,
            "product_name1" => $request->p1_title,
            "product_name2" => $request->p2_title,
            "product_detail1" => $request->p1_detail,
            "product_detail2" => $request->p2_detail,
        ]);
        session()->flash("success", "Logo saved successfully!");
        return back();
        
    }

    public function saveSection2(Request $request){
        // return $request;
        if($request->hasfile("file")){
            // return "helo";
            $file = $request->file("file");
            $extenssion = $file->getClientOriginalExtension();
            $name = "section-". rand()  . "." .  $extenssion;
            $path = ('sections');
            $file->move($path, $name);
        }else{
            $name = Setting::find(1);
            $name = $name->section2_background;
        }

        Setting::where("id","1")->update([
            "section2_background" => $name,
            "stepbox_title" => $request->title,
            "ans_of_q1" => $request->q1,
            "ans_of_q2" => $request->q2,
            "search" => $request->search
        ]);
        session()->flash("success", "Logo saved successfully!");
        return back();
    }

    public function saveHeader(Request $request){
        // return $request;
        if($request->hasfile("header")){
            // return "helo";
            $file = $request->file("header");
            $extenssion = $file->getClientOriginalExtension();
            $name = "header-". rand()  . "." .  $extenssion;
            $path = ('header');
            $file->move($path, $name);
        }else{
            $name = Setting::find(1);
            $name = $name->header_background;
        }

        // return $name;
        Setting::where("id","1")->update(["header_background" => $name]);
        session()->flash("success", "Logo saved successfully!");
        return back();
    }

    public function saveLogo(Request $request){
        // return $request;
        if($request->hasfile("logo")){
            // return "helo";
            $file = $request->file("logo");
            $extenssion = $file->getClientOriginalExtension();
            $name = "logo-". rand()  . "." .  $extenssion;
            $path = ('site_logo');
            $file->move($path, $name);
        }else{
            $name = Setting::find(1);
            $name = $name->site_logo;
        }

        // return $name;
        Setting::where("id","1")->update(["site_logo" => $name]);
        session()->flash("success", "Logo saved successfully!");
        return back();
    }

    public function siteLogo (Request $request){
        $data = Setting::find(1);
        $return = ["setting" => $data];
        return view("admin.logo", $return);
    }

    public function siteHeader (Request $request){
        $data = Setting::find(1);
        $return = ["setting" => $data];
        return view("admin.header", $return);
    }

    // public function section1 (Request $request){
    //     return view("admin.section2");
    // }

    public function section2 (Request $request){
        $data = Setting::find(1);
        $return = ["setting" => $data];
        return view("admin.section2", $return);
    }

    public function section3 (Request $request){
        $data = Setting::find(1);
        $return = ["setting" => $data];
        return view("admin.section3", $return);
    }

    public function section4 (Request $request){
        $data = Setting::find(1);
        $return = ["setting" => $data];
        return view("admin.section4", $return);
    }
}
