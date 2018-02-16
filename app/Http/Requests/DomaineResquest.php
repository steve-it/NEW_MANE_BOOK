<?php
/*__rester vrai__*/
 namespace App\Http\Requests; use Illuminate\Foundation\Http\FormRequest; class DomaineResquest extends FormRequest { public function authorize() { return true; } public function rules() { return array("\116\157\155\x44\x6f\155\141\151\x6e\145\x73" => "\x72\145\161\165\151\162\x65\x64\x7c\165\x6e\151\161\165\x65\72\144\157\155\x61\x69\x6e\x65\x73\174\x6d\141\170\72\62\x35\x35"); } }
