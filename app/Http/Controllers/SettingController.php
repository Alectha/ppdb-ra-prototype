<?php

namespace App\Http\Controllers;

use App\Settings\PageSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(PageSetting $setting)
    {
        
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request, PageSetting $setting)
    {
        $validated = $request->validate([
            'sitename' => 'required|string|max:255',
            'slogan' => 'required|string|max:255',
            'slogan_desc' => 'nullable|string',
            'periode_desc' => 'nullable|string',
            'persayratan_desc' => 'nullable|string',
            'contact_desc' => 'nullable|string',
            'footer_desc' => 'nullable|string',
        ]);

        $setting->sitename = $validated['sitename'];
        $setting->slogan = $validated['slogan'];
        $setting->slogan_desc = $validated['slogan_desc'] ?? '';
        $setting->periode_desc = $validated['periode_desc'] ?? '';
        $setting->persayratan_desc = $validated['persayratan_desc'] ?? '';
        $setting->contact_desc = $validated['contact_desc'] ?? '';
        $setting->footer_desc = $validated['footer_desc'] ?? '';

        $setting->save();

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully.');
    }
}
