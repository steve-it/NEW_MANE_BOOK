<?php
/*__rester vrai__*/
 namespace App\Http\Controllers; use App\Categorie; use Illuminate\Http\Request; use Illuminate\Http\Response; class CategorieController extends Controller { public function index() { $categories = Categorie::all(); return view("\143\x61\x74\145\147\x6f\162\151\145\x73\56\x6c\x69\163\x74", compact("\x63\141\164\145\147\x6f\162\151\x65\163")); } public function NewCategories(Request $request) { goto u03hryfNEwBoXTMU; KHiAhVYx4n6FfKk5: xp4wY: goto wBPwDx2u9DHwxoT6; mvUtJTMH3GdRiC_A: TAW26: goto bRIGMKJxFFwun2su; MxygSaL9JKdRnBkY: goto qDxlW; goto SVF22fdVl9nkUqFb; xTGaI5dL_w6pM76t: return response()->json($categories); goto rnS4BxPmlzseD7Sr; tDu9h_JlK8Z7lU30: goto TAW26; goto BmfOPUvYm06IjHcx; SVF22fdVl9nkUqFb: gXRRW: goto G7W1gygqqF1FrHOc; u03hryfNEwBoXTMU: goto d4FlX; goto z1YvGtQvt0hCn_hA; rnS4BxPmlzseD7Sr: goto qyOUI; goto vXFsmSrN50jZy71J; B7Y_s7itZq9pVzhM: CxMSZDifRCCHtIlg: goto tDu9h_JlK8Z7lU30; Y1e2hoNF3BTs51pJ: goto xp4wY; goto B7Y_s7itZq9pVzhM; wBPwDx2u9DHwxoT6: goto gXRRW; goto mvUtJTMH3GdRiC_A; BmfOPUvYm06IjHcx: qDxlW: goto xTGaI5dL_w6pM76t; z1YvGtQvt0hCn_hA: d4FlX: goto AHIXigmkxU7PI6i9; bRIGMKJxFFwun2su: $categories = Categorie::create($request->all()); goto MxygSaL9JKdRnBkY; AHIXigmkxU7PI6i9: if ($request->ajax()) { goto CxMSZDifRCCHtIlg; } goto Y1e2hoNF3BTs51pJ; vXFsmSrN50jZy71J: qyOUI: goto KHiAhVYx4n6FfKk5; G7W1gygqqF1FrHOc: } public function create() { } public function store() { } public function show($id) { } public function edit($id) { } public function update($id) { } public function destroy($id) { } public function delete(Request $request) { Categorie::destroy($request->id); } } ?>
