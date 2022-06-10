<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Auth;
// use Session;

class SettingController extends Controller
{

    public function index(){
        $setting = Setting::find(1);

        return view('admin.footer', compact('setting'));
    }

    public function updateFooter(Request $request){
        //dd($request->file());

        try{

            $data = [
                'footer_top_left' =>  $request->footer_top_left,
                'footer_top_right' => $request->footer_top_right,
                'footer_description' => $request->footer_description,
                'footer_quick_link' => $request->footer_quick_link,
                'footer_content_right' => $request->footer_content_right,
                'footer_btn_text' => $request->subscribe_btn_text
            ];
        //dd($data);
            $setting = Setting::first();

            if($request->hasfile("footer_logo")){
                $file = $request->file("footer_logo");
                $extenssion = $file->getClientOriginalExtension();
                $foter_logo = "footer-logo-". rand()  . "." .  $extenssion;
                $data['footer_logo'] = $foter_logo;
                $destinationPath = public_path('footer');
                $file->move($destinationPath, $foter_logo);
            }
            else{
                $data['footer_logo'] = $setting->footer_logo;
            }

            if($request->hasfile("footer_cards")){
                $file = $request->file("footer_cards");
                $extenssion = $file->getClientOriginalExtension();
                $footer_card = "footer-card-". rand()  . "." .  $extenssion;
                $data['footer_cards'] = $footer_card;
                $destinationPath1 = public_path('footer');
                $file->move($destinationPath1, $footer_card);
            }
            else{
                $data['footer_cards'] = $setting->footer_cards;
            }

             //dd($data);
            (new Setting)->updateFooter($data, $setting->id);

            session()->flash("success", "Logo saved successfully!");
            return back();

        } catch (\Exception $e){
            return back()->withError('error', $e->getMessage());
        }


    }

    public function saveSection4(Request $request){
        //dd($request->file());
        // return $request;
        if($request->hasfile("file")){
            // return "helo";
            $file = $request->file("file");
            $extenssion = $file->getClientOriginalExtension();
            $name1 = "section-". rand()  . "." .  $extenssion;
            //$path = ('sections');
            $destinationPath = public_path('sections');
            $file->move($destinationPath, $name1);
        }
        else{
            $name = Setting::find(1);
            $name1 = $name->section4_background;
        }

        if($request->hasfile("sub_file1")){
            // return "helo";
            $file = $request->file("sub_file1");
            $extenssion = $file->getClientOriginalExtension();
            $name2 = "section-". rand()  . "." .  $extenssion;
            $destinationPath1 = public_path('sections');
           // $path = ('sections');
            $file->move($destinationPath1, $name2);
        }else{
            $name = Setting::find(1);
            $name2 = $name->sub_s4_img1;
        }

        if($request->hasfile("sub_file2")){
            // return "helo";
            $file = $request->file("sub_file2");
            $extenssion = $file->getClientOriginalExtension();
            $name3 = "section-". rand()  . "." .  $extenssion;
            $destinationPath2 = public_path('sections');
            //$path = ('sections');
            $file->move($destinationPath2, $name3);
        }else{
            $name = Setting::find(1);
            $name3 = $name->sub_s4_img2;
        }

        if($request->hasfile("sub_file3")){
            // return "helo";
            $file = $request->file("sub_file3");
            $extenssion = $file->getClientOriginalExtension();
            $name4 = "section-". rand()  . "." .  $extenssion;
            $destinationPath3 = public_path('sections');
            //$path = ('sections');
            $file->move($destinationPath3, $name4);
        }else{
            $name = Setting::find(1);
            $name4 = $name->sub_s4_img3;
        }

        $s4_descrip = $request->s4_descrip;
        $sub_s4_title1 = $request->sub_s4_title1;
        $btn_text1 = $request->btn_text1;
        $sub_s4_title2 = $request->sub_s4_title2;
        $btn_text2 = $request->btn_text2;
        $sub_s4_title3 = $request->sub_s4_title3;
        $btn_text3 = $request->btn_text3;


        Setting::where("id","1")->update([
            "section4_background" => $name1,
            's4_descrip' => $s4_descrip,
            'sub_s4_img1' => $name2,
            'sub_s4_title1' => $sub_s4_title1,
            'sub_s4_btn1' => $btn_text1,
            'sub_s4_img2' => $name3,
            'sub_s4_title2'=> $sub_s4_title2,
            'sub_s4_btn2' => $btn_text2,
            'sub_s4_img3' => $name4,
            'sub_s4_title3' => $sub_s4_title3,
            'sub_s4_btn3' => $btn_text3
        ]);
        session()->flash("success", "Logo saved successfully!");
        return back();
    }

    public function saveSection3 (Request $request){
        //dd($request->input());
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
            'section3_head_title' => strip_tags($request->head_title),
            "section3_title" => $request->title,
            "product_image1" => $name1,
            "product_image2" => $name2,
            // "product_name1" => $request->p1_title,
            // "product_name2" => $request->p2_title,
            "product_detail1" => $request->p1_detail,
            "product_detail2" => $request->p2_detail,
        ]);
        session()->flash("success", "Logo saved successfully!");
        return back();

    }

    public function saveSection2(Request $request){

        $setting = Setting::first();

        if($request->hasfile("file")){
            // return "helo";
            $file = $request->file("file");
            $extenssion = $file->getClientOriginalExtension();
            $name = "section-". rand()  . "." .  $extenssion;
            $path = ('sections');
            $file->move($path, $name);
        }
        else{
            $name = Setting::find(1);
            $name = $name->section2_background;
        }

        if(!empty( $request->section1_title)){
            $section1_title = $request->section1_title;
        }
        else{
            $section1_title = $setting->section1_title;
        }
        if(!empty($request->section1_description)){
            $section1_description = $request->section1_description;
        }
        else{
             $section1_description = $setting->section1_description;
        }

        if(!empty($request->section2_title)){
            $section2_title = $request->section2_title;
        }
        else{
            $section2_title = $setting->section2_title;
        }
        if(!empty($request->section2_description)){
            $section2_description = $request->section2_description;
        }
        else{
             $section2_description = $setting->section2_description;
        }

        if(!empty($request->section3_title)){
            $section3_title = $request->section3_title;
        }
        else{
            $section3_title = $setting->section3_title;
        }
        if(!empty($request->section3_description)){
            $section3_description = $request->section3_description;
        }
        else{
            $section3_description = $setting->section3_description;
        }

        if(!empty($request->section4_title)){
            $section4_title = $request->section4_title;
        }
        else{
            $section4_title = $setting->section4_title;
        }
        if(!empty($request->section4_description)){
            $section4_description = $request->section4_description;
        }
        else{
            $section4_description = $setting->section4_description;
        }

        Setting::where("id","1")->update([
            "section2_background" => $name,
            "section1_title" => $section1_title,
            "section1_description" => $section1_description,
            "section2_title" => $section2_title,
            "section2_description" => $section2_description,
            "section3_title" => $section3_title,
            "section3_description" => $section3_description,
            "section4_title" => $section4_title,
            "section4_description" => $section4_description,
        ]);
        session()->flash("success", "Logo saved successfully!");
        return back();
    }

    public function saveHeader(Request $request){
        // dd($request->input());
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
