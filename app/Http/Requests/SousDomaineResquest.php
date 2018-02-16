<?php
/*__rester vrai__*/
 namespace App\Http\Requests; use Illuminate\Foundation\Http\FormRequest; class SousDomaineResquest extends FormRequest { public function authorize() { return true; } public function rules() { return array("\116\x6f\x6d\x53\x6f\x75\x73\x44\157\155\x61\x69\x6e\x65\x73" => "\162\x65\x71\165\151\x72\145\144\x7c\165\x6e\151\x71\165\145\72\x73\x6f\x75\x73\144\157\x6d\141\x69\x6e\x65\163\x7c\x6d\141\170\72\62\x35\x35"); } }
