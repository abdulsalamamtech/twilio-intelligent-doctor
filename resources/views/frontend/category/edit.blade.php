
@extends('frontend.layouts.master')

@section('content')

    <!-- Container -->
    <div class="p-4 sm:ml-64  mt-4">

        <div class="flex items-center justify-center mt-14 bg-gray-100 shadow-md sm:rounded-lg w-full">
            <div class="relative overflow-auto m-4">

                <!-- Button -->
                <div class="float-right mb-4">
                    <a href="categories.php" class="text-base w-full px-6 py-2 mt-4 focus:outline-none
                        flex justify-center rounded font-bold cursor-pointer
                        hover:bg-[#0c1c96]
                        bg-[#1f1f9f]
                        text-blue-100
                        border duration-200 ease-in-out
                        border-[#0c1c96] transition">
                        View Categories
                    </a>
                </div>

                <!-- Table Container -->
                <div class="p-4 rounded-lg dark:border-gray-700 mt-14 w-full">

                    <div class="flex items-center justify-center bg-gray-100 w-full">
                        <div class="px-8 py-6 mx-4 m-4 text-left bg-white shadow-lg w-full">
                    <h3 class="text-2xl font-bold text-center">Edit Category </h3>

                    <form action="{{route('category.update', $category->id)}}" method="post">
                        @csrf
                        @method('put')

                        <!-- MESSAGE FROM FORM VALIDATION -->
                        <div class="text-center text-3xs">
                            @session('error')
                                <span class="text-red-400">something went wrong!</span><br>
                            @endsession

                            @session('success')
                                <span class="text-green-400">success!</span>
                            @endsession
                            <br>
                        </div>

                        <div class="mt-0">
                            <!-- ENTER YOUR CATEGORY NAME -->
                            <div class="mt-0">
                                <label class="block" for="Name">Name<label>
                                        <input type="text" placeholder="eg. cloth, food" name="name"
                                            value="{{ old('name') ?? $category->name }}"
                                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600
                                            {{ $errors->first('name')? 'border-red-400' : 'border-green-400' }}">
                                        <!-- Error Message -->
                                        @error('name')
                                            <span class="text-xs text-center text-red-400">{{ $message ?? ''}}</span>
                                        @enderror
                            </div>
                            <!-- ENTER YOUR BUDGET AMOUNT -->
                            <div class="mt-4">
                                <label class="block" for="Name">Your Budget<label>
                                        <input type="number" placeholder="eg. 5000" name="budget"
                                            value="{{ $category->budget }}"
                                            {{-- value="{{ old('budget') }}" --}}
                                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                    <!-- Error Message -->
                                    @error('budget')
                                            <span class="text-xs text-center text-red-400">{{ $message ?? ''}}</span>
                                    @enderror
                            </div>
                            <button class="text-base w-full px-6 py-2 mt-4  hover:scale-105 focus:outline-none flex justify-center rounded font-bold cursor-pointer
                            hover:bg-[#0c1c96]
                            bg-[#1f1f9f]
                            text-blue-100
                            border duration-200 ease-in-out
                            border-[#0c1c96] transition" type="submit">Save
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        </div>
    </div>

@endsection
