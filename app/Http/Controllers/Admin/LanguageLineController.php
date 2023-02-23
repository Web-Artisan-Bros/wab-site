<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\LanguageLine;

class LanguageLineController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return View
   */
  public function index(): View {
    $languageLines = LanguageLine::all();
    
    return view('admin.language-lines.index', compact("languageLines"));
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return View
   */
  public function create(): View {
    
    return view('admin.language-lines.create', []);
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
    $languageLine = LanguageLine::create($data);
    
    return redirect()->route('admin.language-lines.show', $languageLine->id);
  }
  
  /**
   * Display the specified resource.
   *
   * @param LanguageLine $language-line
   *
   * @return View
   */
  public function show(LanguageLine $languageLine): View {
    return view('admin.language-lines.show', compact("languageLine"));
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  LanguageLine  $language-line
   *
   * @return View
   */
  public function edit(LanguageLine $languageLine): View {
    
    return view('admin.language-lines.edit', [
      "languageLine" => $languageLine,
      
    ]);
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  Request $request
   * @param  LanguageLine $language-line
   *
   * @return RedirectResponse
   */
  public function update(Request $request, LanguageLine $languageLine): RedirectResponse {
    $data = $request->all();
    
    $languageLine->update($data);
    
    return redirect()->route('admin.language-lines.show', $languageLine->id);
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  LanguageLine  $language-line
   *
   * @return RedirectResponse
   */
  public function destroy(LanguageLine $languageLine): RedirectResponse {
    $languageLine->destroy();
    
    return redirect()->route('admin.language-lines.index');
  }
}
