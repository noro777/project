<?php

namespace App\Http\Controllers\Login\Institution;

use App\Http\Controllers\Controller;
use App\Http\Request\Login\Institution\StoreRequest;
use App\Models\Login\Institution;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Institution::create($data);
        return redirect()->route('institution.index');
    }
}
