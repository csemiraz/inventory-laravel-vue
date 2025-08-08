<?php 

namespace App\Repositories\SystemSetting;

use App\Models\SystemSetting;

class SystemSettingRepository implements SystemSettingInterface
{
   /**
     * Display a listing of the resource.
     */
    public function all()
    {
        $data = SystemSetting::firstOrFail();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($request_data)
    {
        $data = SystemSetting::create([
            'site_name' => $request_data->site_name,
            "site_logo" => $request_data->site_logo,
            "site_favicon" => $request_data->site_favicon,
            'site_phone' => $request_data->site_phone,
            'site_email' => $request_data->site_email,
            "site_facebook_link" => $request_data->site_facebook_link,
            "meta_keywords" => $request_data->meta_keywords,
            "meta_description" => $request_data->meta_description
        ]);

        return $this->show($data->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = SystemSetting::findOrFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request_data, $id)
    {
        $data = SystemSetting::findOrFail($id);
        $data->update([
            'site_name' => $request_data->site_name,
            "site_logo" => $request_data->site_logo,
            "site_favicon" => $request_data->site_favicon,
            'site_phone' => $request_data->site_phone,
            'site_email' => $request_data->site_email,
            "site_facebook_link" => $request_data->site_facebook_link,
            "meta_keywords" => $request_data->meta_keywords,
            "meta_description" => $request_data->meta_description
        ]);

        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data = $this->show($id);
        $data->delete();
        return true;
    }

}
