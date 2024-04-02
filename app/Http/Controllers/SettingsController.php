<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Settings;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function index()
    {
        return view('settingshotel.index');
    }

        //
        public function index1()
        {
            return view('settingshotel.index1');
        }
        


        public function indexlanguage()
        {
            return view('settingshotel.indexlan');
        }
        
        public function indexcontract()
        {
            return view('settingshotel.indexcon');
        }

        public function indexmeals()
        {
            return view('settingshotel.indexmeals');
        }

        public function indexfacilities()
        {
            return view('settingshotel.indexfac');
        }

        public function indexchild()
        {
            return view('settingshotel.indexchild');
        }

        // public function roomset()
        // {
        //     return view('settingroom.index1');
        // }
       
        public function roomtypeset()
        {

            
            $settings = Settings::all();
    
    
            return view('settingroom.index', compact('settings'));
        }

        public function roomset()
        {
    
    
            $settings = Settings::all();
    
            // dd(\DB::getQueryLog());
    
            return view('settingroom.index1', compact('settings'));
        }

                
        public function services()
        {
    
    
            $settings = Settings::all();
    
            // dd(\DB::getQueryLog());
    
            return view('settingservices.index');    //, compact('settings'));
        }
       

        public function category()
        {
    
    
            $settings = Settings::all();
    
            // dd(\DB::getQueryLog());
    
            return view('settingservices.index1');    //, compact('settings'));
        }
       

        
        public function deals()
        {
    
    
    
            return view('settingsdeals.index');    //, compact('settings'));
        }

        
        public function department()
        {
    
    
    
            return view('settingsdepartment.index');    //, compact('settings'));
        }

      
       
        
}
