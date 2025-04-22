@extends('admin.layouts.admin')

@section('title', 'Edit Page Settings')
@section('header', 'Edit Page Settings')

@section('content')
@if (session('success'))
    <div class="alert alert-success mb-4">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6">
    @csrf
    @method('PUT')

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">
            Page Settings
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Site Name</label>
                <input type="text" name="sitename" value="{{ old('sitename', $setting->sitename) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                @error('sitename')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Slogan</label>
                <input type="text" name="slogan" value="{{ old('slogan', $setting->slogan) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                @error('slogan')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Slogan Description</label>
                <textarea id="slogan_desc" name="slogan_desc" rows="10" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('slogan_desc', $setting->slogan_desc) }}</textarea>
                @error('slogan_desc')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Periode Description</label>
                <textarea id="periode_desc" name="periode_desc" rows="10" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('periode_desc', $setting->periode_desc) }}</textarea>
                @error('periode_desc')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Persayratan Description</label>
                <textarea id="persayratan_desc" name="persayratan_desc" rows="10" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('persayratan_desc', $setting->persayratan_desc) }}</textarea>
                @error('persayratan_desc')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Contact Description</label>
                <textarea id="contact_desc" name="contact_desc" rows="10" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('contact_desc', $setting->contact_desc) }}</textarea>
                @error('contact_desc')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Footer Description</label>
                <textarea id="footer_desc" name="footer_desc" rows="10" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('footer_desc', $setting->footer_desc) }}</textarea>
                @error('footer_desc')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $setting->phone ?? '') }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                @error('phone')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email', $setting->email ?? '') }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Website</label>
                <input type="url" name="website" value="{{ old('website', $setting->website ?? '') }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                @error('website')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                <textarea id="address" name="address" rows="3" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('address', $setting->address ?? '') }}</textarea>
                @error('address')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Operational Hours</label>
                <textarea id="operational_hours" name="operational_hours" rows="3" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('operational_hours', $setting->operational_hours ?? '') }}</textarea>
                @error('operational_hours')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Vision</label>
                <textarea id="vision" name="vision" rows="3" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('vision', $setting->vision ?? '') }}</textarea>
                @error('vision')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Mission</label>
                <textarea id="mission" name="mission" rows="3" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('mission', $setting->mission ?? '') }}</textarea>
                @error('mission')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">About Description</label>
                <textarea id="desc_about" name="desc_about" rows="3" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('desc_about', $setting->desc_about ?? '') }}</textarea>
                @error('desc_about')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <div class="flex justify-end">
        <button type="submit" class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition">
            Simpan Perubahan
        </button>
    </div>
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create( document.querySelector( '#slogan_desc' ) )
    .catch( error => {
        console.error( error );
    } );
  ClassicEditor
    .create( document.querySelector( '#periode_desc' ) )
    .catch( error => {
        console.error( error );
    } );
  ClassicEditor
    .create( document.querySelector( '#persayratan_desc' ) )
    .catch( error => {
        console.error( error );
    } );
  ClassicEditor
    .create( document.querySelector( '#contact_desc' ) )
    .catch( error => {
        console.error( error );
    } );
  ClassicEditor
    .create( document.querySelector( '#footer_desc' ) )
    .catch( error => {
        console.error( error );
    } );
  ClassicEditor
    .create( document.querySelector( '#address' ) )
    .catch( error => {
        console.error( error );
    } );
  ClassicEditor
    .create( document.querySelector( '#operational_hours' ) )
    .catch( error => {
        console.error( error );
    } );
  ClassicEditor
    .create( document.querySelector( '#vision' ) )
    .catch( error => {
        console.error( error );
    } );
  ClassicEditor
    .create( document.querySelector( '#mission' ) )
    .catch( error => {
        console.error( error );
    } );
  ClassicEditor
    .create( document.querySelector( '#desc_about' ) )
    .catch( error => {
        console.error( error );
    } );
</script>

@endsection
