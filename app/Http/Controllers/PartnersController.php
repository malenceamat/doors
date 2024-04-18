<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\PartnersRequest;
use App\Models\Partners;
use Illuminate\Support\Facades\Storage;

class PartnersController extends Controller
{
    public function index($id = null)
    {
        $partners = $id ? Partners::find($id) : new Partners;
        return view('admin.content.partners.partners_create', compact('partners'));
    }
    public function create(PartnersRequest $req)
    {
        $helper = new BaseHelperController();
        Partners::create(['image' => $helper->store_base64_image($req['image'])]);
        return redirect()->route('partners_show');
    }
    public function show()
    {
        $partners = Partners::get();
        return view('admin.content.partners.partners_show',compact('partners'));
    }
    public function update(PartnersRequest $req)
    {
        $helper = new BaseHelperController();
        $partners = Partners::find($req['id']);
        if (!empty($partners) && $req['image'] != $partners['image']) {
            Storage::disk('public')->delete('image', $partners['image']);
            $partners['image']  = $helper->store_base64_image($req['image']);
        }
        $partners->update(['image' => $partners['image']]);
        return redirect()->route('partners_show');
    }
    public function delete($id)
    {
        $delete = Partners::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();
        return redirect()->route('partners_show');
    }
}
