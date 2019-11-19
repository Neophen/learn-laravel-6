@extends('default')

@section('content')
<div class="flex justify-center items-center h-full">
  <div class="w-full max-w-lg my-12">
    <h1 class="text-4xl mb-4">Create an article</h1>
    <form class=""
      method="POST"
      action="{{ route('articles.store') }}">
      @csrf
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2"
          for="title">
          Title
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="title"
          name="title"
          type="text"
          placeholder="title"
          value="{{ old('title') }}">
        <p class="text-red-500 text-xs italic">{{ $errors->first('title') }}</p>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2"
          for="excerpt">
          Excerpt
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          id="excerpt"
          name="excerpt"
          type="text"
          placeholder="write a short excerpt"
          value="{{ old('excerpt') }}">
        <p class="text-red-500 text-xs italic">{{ $errors->first('excerpt') }}</p>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2"
          for="body">
          Body
        </label>
        <textarea
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          id="body"
          name="body"
          rows="10"
          placeholder="write your post here">{{ old('body') }}</textarea>
        <p class="text-red-500 text-xs italic">{{ $errors->first('body') }}</p>
      </div>
      <div class="flex items-center justify-end">
        <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          type="submit">
          Post article
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
