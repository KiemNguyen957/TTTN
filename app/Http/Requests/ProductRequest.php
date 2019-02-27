<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function attributes(){
        return [
            'name' => 'Tên sản phẩm',
            'price' => 'Giá',
            'sale'=> 'Giảm giá',
            'screen' => 'Màn hình',
            'operating_system' => 'Hệ điều hành',
            'camera'=>'Camera',
            'cpu'=>'Cpu',
            'ram' => 'Ram',
            'memory' => 'Bộ nhớ trong',
            'memory_card' => 'Thẻ nhớ',
            'pin' => 'Pin',
            'category_id' => 'Hãng',
        ];
    }
    public function messages(){
        return [
            'required' => ':attribute không được để trống',
            'max' => ':attribute không được quá :max ký tự',
            'min' => ':attribute không được ít hơn :min ký tự',
            'numeric' => ':attribute phải là số',
        ];
    }
    public function rules()
    {
        return [
            'name' => 'required|min:6|max:255',
            'price' => 'required|numeric',
            'sale' =>'numeric',
            'screen' => 'required',
            'operating_system' => 'required',
            'camera'=>'required',
            'cpu'=>'required',
            'ram' => 'required',
            'memory' => 'required',
            'memory_card' => 'required',
            'pin' => 'required',
            'category_id' => 'required',
        ];
    }
}
