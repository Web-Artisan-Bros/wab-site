<?php
namespace App\Http\Controllers;

use App\Models\LanguageLine;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class LanguageLineController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return View
   */
  public function index(): View {
    $language-lines = LanguageLine::all();
    
    return view('language-lines.index', compact("language-lines"));
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return View
   */
  public function create(): View {
    
    return view('language-lines.create', []);
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
    $language-line = LanguageLine::create($data);
    
    return redirect()->route('language-lines.show', $language-line->id);
  }
  
  /**
   * Display the specified resource.
   *
   * @param LanguageLine $language-line
   *
   * @return View
   */
  public function show(LanguageLine $language-line): View {
    return view('language-lines.show', compact("language-line"));
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  LanguageLine  $language-line
   *
   * @return View
   */
  public function edit(LanguageLine $language-line): View {
    
    return view('language-lines.edit', [
      "language-line" => $language-line,
      
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
  public function update(Request $request, LanguageLine $language-line): RedirectResponse {
    $data = $request->all();
    
    $language-line->update($data);
    
    return redirect()->route('language-lines.show', $language-line->id);
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  LanguageLine  $language-line
   *
   * @return RedirectResponse
   */
  public function destroy(LanguageLine $language-line): RedirectResponse {
    $language-line->destroy();
    
    return redirect()->route('language-lines.index');
  }
}
