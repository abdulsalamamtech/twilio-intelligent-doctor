
 @extends('frontend.layouts.master')

 @section('content')

    <!-- Container -->
    <div class="p-4 sm:ml-64  mt-4">

        <div class="flex items-center justify-center mt-14 bg-gray-100 shadow-md sm:rounded-lg w-full">
            <div class="relative overflow-auto m-4">

                <!-- Button -->
                <div class="float-right mb-4">
                    <a href="add-category.php" class="text-base w-full px-6 py-2 mt-4 focus:outline-none
                        flex justify-center rounded font-bold cursor-pointer
                        hover:bg-[#0c1c96]
                        bg-[#1f1f9f]
                        text-blue-100
                        border duration-200 ease-in-out
                        border-[#0c1c96] transition">
                        Add Category
                    </a>
                </div>

                <!-- Table Container -->
                <div class="w-auto mb-8 mx-2">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <td class="text-xl text-center py-3 border-b font-bold" colspan="4">Categories</td>
                            </tr>
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Category name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    No. of expenses
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Budget
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($categories as $category){ ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $category['name'] ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= ($category['id']) ?>
                                </td>
                                <td class="px-6 py-4">
                                    NGN. <?= $category['budget'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('category.edit',$category['id']) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>


@endsection
