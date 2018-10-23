<?php

namespace App\Http\Controllers\Admin;

use App\Models\Configs;
use Illuminate\Http\Request;
use App\Services\Interfaces\ConfigServiceInterface;

class ConfigController extends Controller
{
    protected $configService;

    public function __construct(ConfigServiceInterface $configService)
    {
        $this->configService = $configService;
    }

    public function getConfig()
    {
        $config = Configs::all();

        return view('admin.config.index', compact('config'));
    }

    public function getEdit($id)
    {
        $config = Configs::find($id);

        return view('admin.config.edit', compact('config'));
    }

    public function postEdit(Request $request, Configs $id)
    {
        if ($this->configService->editConfig($request->all(), $id)) {

            return redirect('config');
        }
        
        abort(500, 'Whoops ! Something went wrong !');
    }
}
