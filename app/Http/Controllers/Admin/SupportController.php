<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function __construct(protected SupportService $service)
    {

    }
    public function index(Request $request)
    {
        $supports = $this->service->paginate(page: $request->get('page',1), totalPerPage: $request->get('per_page', 15), filter: $request->filter);

        return view('admin.supports.index', compact('supports'));
    }

    public function show($id)
    {
        if(!$support = $this->service->findOne($id)) {
               return redirect()->back();
        };

        return view('admin.supports.show', compact('support'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(StoreUpdateSupportRequest $request, Support $support)
    {
        $this->service->new(CreateSupportDTO::makeFromRequest($request));

        return redirect()->route('supports.index');
    }

    public function edit(Support $support, $id)
    {
        if (!$support = $this->service->findOne($id)){
            return redirect()->back();
        }

        return view('admin.supports.edit', compact('support'));
    }

    public function update(StoreUpdateSupportRequest $request, Support $support, $id)
    {
        $support = $this->service->update(UpdateSupportDTO::makeFromRequest($request));

        if (!$support) {
            return redirect()->back();
        }

        return redirect()->route('supports.index');
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return redirect()->route('supports.index');
    }

}
