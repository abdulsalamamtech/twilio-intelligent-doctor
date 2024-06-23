

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">

        <!-- Logo -->
        <a href="index.php" class="flex items-center shadow p-3 text-xl text-gray-100 rounded-lg
                        dark:text-white dark:hover:bg-gray-700 group sm:text-center
                        hover:bg-[#0c1c96] bg-[#1f1f9f] text-blue-100 font-bold leading">
            <div
                class="flex-shrink-0 w-8 h-5 text-gray-100 dark:text-gray-400 group-hover:text-gray-200 dark:group-hover:text-white">
                <i class="fa fa-area-chart"></i>
            </div>
            <span class="flex-1 ms-3 whitespace-nowrap dark:text-white">Twilio Intelligent Doctor</span>
        </a>

        <div class="flex space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
            <div class="flex justify-between">
                <a href="{{ route('login') }}" type="button"
                    class="mr-2 text-[#0c1c96] bg-gray-100 border-2 border-[#0c1c96]  hover:text-white hover:bg-[#0c1c96] bg-[#1f1f9f] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-blue dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Login</a>
                <a href="{{ route('register') }}" type="button"
                    class="text-white bg-[#0c1c96] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Register</a>
            </div>
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul
                class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/"
                        class="block px-3 py-2 text-white bg-blue-700 rounded md:p-0 md:bg-transparent md:text-blue-700 md:dark:text-blue-500"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-gray-900 rounded md:p-0 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="https://facebook.com/abdulsalamamtech"
                        class="block px-3 py-2 text-gray-900 rounded md:p-0 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
