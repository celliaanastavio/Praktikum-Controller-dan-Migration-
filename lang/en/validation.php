<?php

return [
    'required' => ':attribute wajib diisi.',
    'string'   => ':attribute harus berupa teks.',
    'integer'  => ':attribute harus berupa bilangan bulat.',
    'date'     => ':attribute bukan format tanggal yang valid.',

    'min' => [
        'numeric' => ':attribute minimal :min.',
        'file'    => ':attribute minimal :min kilobyte.',
        'string'  => ':attribute minimal :min karakter.',
        'array'   => ':attribute minimal :min item.',
    ],

    'max' => [
        'numeric' => ':attribute tidak boleh lebih dari :max.',
        'file'    => ':attribute tidak boleh lebih dari :max kilobyte.',
        'string'  => ':attribute tidak boleh lebih dari :max karakter.',
        'array'   => ':attribute tidak boleh lebih dari :max item.',
    ],

    'custom' => [],

    'attributes' => [
        'nama_menu' => 'Nama menu',
        'kategori'  => 'Kategori',
        'deskripsi' => 'Deskripsi',
        'harga'     => 'Harga',
        'tgl_rilis' => 'Tanggal rilis',
    ],
];