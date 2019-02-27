<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'fullname'=>'Họ và tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'password_confirmation' => 'Mật khẩu nhập lại',
            'phone'=>'Số điện thoại',
        ];
    }
    public function messages(){
        return [
            'required' => ':attribute không được để trống',
            'max' => ':attribute không được quá :max ký tự',
            'min' => ':attribute không được ít hơn :min ký tự',
            'confirmed' => 'Xác nhận mật khẩu phải trùng nhau',
            'email' => 'Địa chỉ email không hợp lệ',
            'unique' => ':attribute đã tồn tại'
        ];
    }
    public function rules()
    {
        return [
            'fullname'=>'required',
            'email' => 'required|min:6|max:255|email|unique:users',
            'password' => 'required|min:6|max:12|confirmed',
            'password_confirmation'=> 'required|min:6|max:12',
            'phone'=>'required',
        ];
    }
}
