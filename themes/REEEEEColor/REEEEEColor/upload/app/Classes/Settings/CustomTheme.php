<?php

namespace App\Classes\Settings;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CustomTheme
{
    public function __construct()
    {
        return;
    }


    public function updateSettings(Request $request)
    {

        $request->validate([
            'background' => 'nullable|max:10000|mimes:jpg,png,jpeg',

        ]);

        if ($request->hasFile('background')) {
            $request->file('background')->storeAs('public', 'background.png');
        }
        $values = [
            //SETTINGS::VALUE => REQUEST-VALUE (coming from the html-form)
            "SETTINGS::CUSTOMTHEME:MAIN_COLOR" => "maincolor",
            "SETTINGS::CUSTOMTHEME:SECONDARY_COLOR" => "secondarycolor",
            "SETTINGS::CUSTOMTHEME:ACCENT_COLOR" => "accentcolor",
            "SETTINGS::CUSTOMTHEME:ENABLE-BG" => "enable-customtheme-bg",
        ];

        foreach ($values as $key => $value) {
            $param = $request->get($value);

            Settings::where('key', $key)->updateOrCreate(['key' => $key], ['value' => $param]);
            Cache::forget("setting" . ':' . $key);
        }



        return redirect(route('admin.settings.index') . '#customtheme')->with('success', __('Theme settings updated!'));
    }
}
