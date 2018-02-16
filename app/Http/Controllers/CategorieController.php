<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:53              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers; use App\Categorie; use Illuminate\Http\Request; use Illuminate\Http\Response; class CategorieController extends Controller { public function index() { $categories = Categorie::all(); return view("\143\141\164\145\147\x6f\x72\151\x65\163\x2e\154\x69\x73\x74", compact("\143\x61\164\145\x67\x6f\162\x69\x65\163")); } public function NewCategories(Request $request) { goto d4FlX; d4FlX: if (!$request->ajax()) { goto xp4wY; } goto TAW26; qDxlW: return response()->json($categories); goto qyOUI; qyOUI: xp4wY: goto gXRRW; TAW26: $categories = Categorie::create($request->all()); goto qDxlW; gXRRW: } public function create() { } public function store() { } public function show($id) { } public function edit($id) { } public function update($id) { } public function destroy($id) { } public function delete(Request $request) { Categorie::destroy($request->id); } } ?>
