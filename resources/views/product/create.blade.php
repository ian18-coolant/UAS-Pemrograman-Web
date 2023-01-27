<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif
        <div class="simple-form max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
                <ul class="list-none bg-red-500 rounded-lg my-10">
                    @foreach ($errors->all() as $error)
                        <li class="text-white py-2 px-4 font-semibold">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route("products.store") }}" enctype="multipart/form-data" method="post">
                @csrf
                <p>
                    <label for="">Kode Produk</label>
                    <input type="text" name="product_code" id="" />
                </p>
                <p>
                    <label for="">Nama Produk</label>
                    <input type="text" name="product_name" id="" />
                </p>
                <p>
                    <label for="">Deskripsi</label>
                    <textarea name="product_description" id="" cols="30" rows="10"></textarea>
                </p>
                <p>
                    <label for="">Harga</label>
                    <input type="number" name="product_price" id="" />
                </p>
                <p>
                    <label for="">Gambar Produk</label>
                    <input type="file" name="product_image" id="" />
                </p>
                <button type="submit" class="btn bg-blue-400 text-white px-5 py-2">Save</button>
            </form>
        </div>
    </div>
</x-app-layout>
