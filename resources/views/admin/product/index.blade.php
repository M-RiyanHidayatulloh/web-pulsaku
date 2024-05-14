<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-3">
                <a href="{{ route('admin.product.create') }}">
                    <button type="button" class="btn btn-success">Create</button>
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">description</th>
                                <th scope="col">price</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        <img src="{{ $product->provider->image }}" class="w-10 h-10 inline"
                                            alt="">
                                        {{ $product->name }}
                                    </td>
                                    <td>{{ $product->description }}</td>
                                    @php
                                        $convert = number_format($product->price, 2, ',', '.');
                                    @endphp
                                    <td> Rp.{{ $convert }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('admin.product.edit', $product) }}">
                                            <button type="button" class="btn btn-warning">Edit</button>
                                        </a>
                                        <form action="{{ route('admin.product.destroy', $product) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
