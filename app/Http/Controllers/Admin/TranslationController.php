<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\LanguageLine;

class TranslationController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return View
   */
  public function index(): View {
    
    
    return view('admin.translations.index');
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return View
   */
  public function create(): View {
    
    return view('admin.translations.create', []);
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   *
   * @return RedirectResponse
   */
  public function store(Request $request): RedirectResponse {
    $data = $request->all();
    $translation = LanguageLine::create($data);
    
    return redirect()->route('admin.translations.show', $translation->id);
  }
  
  /**
   * Display the specified resource.
   *
   * @param LanguageLine $translation
   *
   * @return View
   */
  public function show(LanguageLine $translation): View {
    return view('admin.translations.show', compact("translation"));
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  LanguageLine  $translation
   *
   * @return View
   */
  public function edit(LanguageLine $translation): View {
    
    return view('admin.translations.edit', [
      "translation" => $translation,
      
    ]);
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  Request $request
   * @param  LanguageLine $translation
   *
   * @return RedirectResponse
   */
  public function update(Request $request, LanguageLine $translation): RedirectResponse {
    $data = $request->all();
    
    $translation->update($data);
    
    return redirect()->route('admin.translations.show', $translation->id);
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  LanguageLine  $translation
   *
   * @return RedirectResponse
   */
  public function destroy(LanguageLine $translation): RedirectResponse {
    $translation->destroy();
    
    return redirect()->route('admin.translations.index');
  }
}
