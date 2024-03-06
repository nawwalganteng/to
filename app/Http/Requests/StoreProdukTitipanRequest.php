<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdukTitipanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_produk' => 'required',
            'nama_supplier' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'stok' => 'required'
        ];
    }

    public function massages()
    {
        return [
            'nama_produk.required' => 'Nama harus diisi.',
            'nama_supplier.required' => 'Nama harus diisi.',
            'harga_jual.required' => 'Harga harus diisi.',
            'harga_beli.required' => 'Harga harus diisi.',
            'stok.required' => 'Stok harus diisi.',
        ];
    }
}