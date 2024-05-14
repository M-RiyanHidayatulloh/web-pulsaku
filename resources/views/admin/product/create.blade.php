<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-3">
                <a href="{{ route('admin.product.index') }}">
                    <button type="button" class="btn btn-success">Back</button>
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.product.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">provider</label><br>
                            <select name="provider_id" required>
                                <option disabled value="" selected>pilih provider</option>
                                @foreach ($providers as $provider)
                                    <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">name</label>
                            <input required name="name" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">description</label>
                            <input required name="description" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">price</label>
                            <input required name="price" type="number" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>