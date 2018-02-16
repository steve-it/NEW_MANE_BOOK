<?php
/*__rester vrai__*/
 namespace App\Http\Requests; use Illuminate\Foundation\Http\FormRequest; class DomaineResquest extends FormRequest { public function authorize() { return true; } public function rules() { return array("\116\157\155\104\x6f\155\x61\x69\156\145\x73" => "\162\x65\161\165\x69\x72\x65\x64\174\165\156\x69\161\x75\145\72\144\x6f\155\x61\x69\x6e\x65\163\x7c\x6d\x61\x78\x3a\62\x35\65"); } }
