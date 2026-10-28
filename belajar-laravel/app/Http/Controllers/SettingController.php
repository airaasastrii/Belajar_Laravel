<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        $title = "Manajemen Pengaturan - PPKD Sticker";
        $setting = Setting::all()->keyBy('key');
        return view('admin.setting.index', compact('title', 'setting'));
    }
    public function update(Request $request) {
        $validated = $request->validate([
            'site_name' => 'nullable|string|max:255',
            'site_tagline' => 'nullable|string|max:255',
            'site_description' => 'nullable|string|max:255',
            'site_logo' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',

            'phone' => 'nullable|string|max:100',
            'email_upload' => 'nullable|email|max:255',
            'email_order' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:1000',

            'url_shopee' => 'nullable|url|max:255',
            'url_facebook' => 'nullable|url|max:255',
            'url_instagram' => 'nullable|url|max:255',
            'url_youtube' => 'nullable|url|max:255',
            'url_tiktok' => 'nullable|url|max:255',
        ]);

        $ignoreKeys = ['site_logo'];

            foreach ($validated as $key => $value) {
                // return $key;
                if (in_array($key, $ignoreKeys)) {
                    continue;
                }

                Setting::updateOrCreate(
                    ['key'=> $key],
                    [
                        'value'=> $value,
                        'label'=> ucwords(str_replace('_',' ', $key)),
                        // ucwords untuk mengubah huruf kapital (site_name menjadi, Site_Name)
                        'group'=> 'general',
                        'type' => 'text'
                    ]
                );
            }

            return redirect()->route('admin.settings')->with('success', 'Pengaturan Website PPKD Sticker Berhasil disimpan!');
    }
}
