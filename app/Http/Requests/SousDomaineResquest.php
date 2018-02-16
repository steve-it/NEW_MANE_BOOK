<?php
/*__rester vrai__*/
 namespace App\Http\Requests; use Illuminate\Foundation\Http\FormRequest; class SousDomaineResquest extends FormRequest { public function authorize() { return true; } public function rules() { return array("\116\157\x6d\x53\x6f\165\163\x44\x6f\x6d\141\x69\x6e\145\163" => "\162\145\x71\165\151\162\x65\x64\174\x75\156\151\161\165\x65\x3a\163\157\165\163\x64\157\155\x61\x69\156\x65\x73\x7c\x6d\141\x78\x3a\62\65\x35"); } }
