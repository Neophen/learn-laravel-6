@extends('default')

@section('content')
<div class="flex justify-center items-center h-full">
  <div class="w-full max-w-lg my-12">
    <h1 class="text-4xl mb-4">Edit {{ $article->title }}</h1>
    <form class=""
      method="POST"
      action="{{ route('articles.update', $article) }}">
      @csrf
      @method('PUT')
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2"
          for="title">
          Title
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror"
          id="title"
          name="title"
          type="text"
          placeholder="title"
          value="{{ old('title', $article->title) }}">
        @error('title')
        <p class="text-red-500 text-xs italic mt-2"">{{ $errors->first('title') }}</p>
        @enderror
      </div>
      <div class="
          mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2"
            for="excerpt">
            Excerpt
          </label>
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('excerpt') border-red-500 @enderror"
            id="excerpt"
            name="excerpt"
            type="text"
            placeholder="write a short excerpt"
            value="{{ old('excerpt', $article->excerpt) }}">
          @error('excerpt')
          <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('excerpt') }}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2"
          for="body">
          Body
        </label>
        <textarea
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('body') border-red-500 @enderror"
          id="body"
          name="body"
          rows="10"
          cols="100"
          placeholder="write your post here">{{ old('body', $article->body) }}</textarea>
        @error('body')
        <p class="text-red-500 text-xs italic mt-2"">{{ $errors->first('body') }}</p>
        @enderror
      </div>
      <div class="
          flex
          items-center
          justify-end">
          <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit">
            Update
          </button>
      </div>
    </form>
    <form class=""
      method="POST"
      action="{{ route('articles.destroy', $article) }}">
      @csrf
      @method('DELETE')
      <div class="
        mt-4
        flex
        items-center
        justify-end">
        <button
          class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          type="submit">
          Delete
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
