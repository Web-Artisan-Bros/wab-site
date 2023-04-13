<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\QrUpsertRequest;
use App\Models\QrType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Qr;

class QrController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return View
   */
  public function index(): View {
    $qrs = Qr::all();
    
    
    return view('admin.qrs.index', compact("qrs"));
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return View
   */
  public function create(): View {
    $qrTypes = QrType::all();
    $slug    = Qr::generateSlug();
    
    return view('admin.qrs.create', [
      "qrTypes" => $qrTypes,
      "slug"    => $slug,
    ]);
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   *
   * @return RedirectResponse
   */
  public function store(QrUpsertRequest $request): RedirectResponse {
    $data = $request->all();
    
    $qr = Qr::create($data);
    
    return redirect()->route('admin.qrs.show', $qr->id);
  }
  
  /**
   * Display the specified resource.
   *
   * @param  Qr  $qr
   *
   * @return View
   */
  public function show(Qr $qr): View {
    return view('admin.qrs.show', compact("qr"));
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  Qr  $qr
   *
   * @return View
   */
  public function edit(Qr $qr): View {
    $qrTypes = QrType::all();
    
    return view('admin.qrs.edit', [
      "qr"      => $qr,
      "qrTypes" => $qrTypes,
    ]);
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  Request  $request
   * @param  Qr       $qr
   *
   * @return RedirectResponse
   */
  public function update(QrUpsertRequest $request, Qr $qr): RedirectResponse {
    $data = $request->except(["slug"]);
    
    $qr->update($data);
    
    return redirect()->route('admin.qrs.show', $qr->id);
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  Qr  $qr
   *
   * @return RedirectResponse
   */
  public function destroy(Qr $qr): RedirectResponse {
    $qr->delete();
    
    return redirect()->route('admin.qrs.index');
  }
  
  public function fields(Request $request) {
    $typeId = $request->get('qr_type_id');
    $type   = QrType::findOrFail($typeId);
    
    $qr = new Qr($request->all());
    $qr->type()->associate($type);
    
    return view('admin.qrs.forms.upsert', [
      "qr"      => $qr,
      "action"  => "",
      "method"  => "",
      "qrTypes" => []
    ])->fragment('qr_type_fields');
  }
}
