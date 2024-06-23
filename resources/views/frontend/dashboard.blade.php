@extends('frontend.layouts.master')

@section('content')

    <!-- Container -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <!-- Statistics -->
            <div class="grid grid-cols-12 gap-6 my-5 dashbord">
                <!-- Categories -->
                <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
                    href="category.php">
                    <div class="p-5">
                        <div class="flex justify-between p-2 text-3xl">
                            <div class="mt-3 font-bold leading-8 text-blue-400 h-7 w-7">
                                <!-- ICON -->
                                <i class='fa fa-th-large'></i>
                            </div>
                            <div class="mt-3 font-bold leading-8">
                                <!-- Number -->
                                {{ Number::abbreviate(Auth()->user()->categories->count()) ?? '0'}}
                            </div>
                        </div>
                        <!-- Name of box -->
                        <div class="w-full text-center break-words my-2 text-3xl lg:text-4xl
                                font-['Helvetica'] font-normal pt-6 text-gray-600">No. Categories
                        </div>
                    </div>
                </a>
                <!-- Expenses -->
                <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
                    href="#">
                    <div class="p-5">
                        <div class="flex justify-between p-2 text-3xl">
                            <div class="mt-3 font-bold leading-8 text-pink-400 h-7 w-7">
                                <!-- ICON -->
                                <i class='fa fa-bar-chart'></i>
                            </div>
                            <div class="mt-3 font-bold leading-8">
                                <!-- Number -->
                                {{ Number::abbreviate(Auth()->user()->expenses->count()) ?? '0'}}
                            </div>
                        </div>
                        <!-- Name of box -->
                        <div class="w-full text-center break-words my-2 text-3xl lg:text-4xl
                                font-['Helvetica'] font-normal pt-6 text-gray-600">No. Expenses
                        </div>
                    </div>
                </a>
                <!-- Budget -->
                <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
                    href="#">
                    <div class="p-5">
                        <div class="flex justify-between p-2 text-3xl">
                            <div class="mt-3 font-bold leading-8 text-yellow-400 h-7 w-7">
                                <!-- ICON -->
                                <i class="fa fa-bars"></i></i>
                            </div>
                            <div class="mt-3 font-bold leading-8">
                                <!-- Number -->
                                <span class="text-xl">NGN.</span>
                                @php
                                    $user_cat = Auth()->user()->categories;
                                    $budget = [];
                                    foreach ($user_cat as $user_bud) {
                                        $budget[] =  $user_bud->budget;
                                    }
                                    echo Number::abbreviate(array_sum($budget), 2) ?? 0;
                                @endphp
                            </div>
                        </div>
                        <!-- Name of box -->
                        <div class="w-full text-center break-words my-2 text-3xl lg:text-4xl
                                font-['Helvetica'] font-normal pt-6 text-gray-600">My Budget
                        </div>
                    </div>
                </a>

                <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
                    href="expenses.php">
                    <div class="p-5">
                        <div class="flex justify-between p-2 text-3xl">
                            <div class="mt-3 font-bold leading-8 text-green-400 h-7 w-7">
                                <!-- ICON -->
                                <i class="fa fa-area-chart"></i>
                            </div>
                            <div class="mt-3 font-bold leading-8">
                                <!-- Number -->
                                <span class="text-xl">NGN.</span>
                                @php
                                    $user_cat = Auth()->user()->expenses;
                                    $budget = [];
                                    foreach ($user_cat as $user_bud) {
                                        $budget[] =  $user_bud->price;
                                    }
                                    echo Number::abbreviate(array_sum($budget), 2) ?? 0;
                                @endphp
                            </div>
                        </div>
                        <!-- Name of box -->
                        <div class="w-full text-center break-words my-2 text-3xl lg:text-4xl
                                font-['Helvetica'] font-normal pt-6 text-gray-600">My Expenses
                        </div>
                    </div>
                </a>
            </div>
            <!-- End of Statistics -->


            <!-- Charts Container -->
            <div class="grid grid-cols-12 gap-6 my-5">

                <!-- Bar Chart -->
                <div
                    class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 md:col-span-12 xl:col-span-6 intro-y">


                    <div class="w-full p-4 bg-white rounded-lg shadow min-w-sm dark:bg-gray-800 md:p-6">
                        <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <div
                                    class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-lg dark:bg-gray-700 me-3">
                                    <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                                        <path
                                            d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                        <path
                                            d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="pb-1 text-2xl font-bold leading-none text-gray-900 dark:text-white">3.4k</h5>
                                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Leads generated per week
                                    </p>
                                </div>
                            </div>
                            <div>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
                                    </svg>
                                    42.5%
                                </span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <dl class="flex items-center">
                                <dt class="text-sm font-normal text-gray-500 dark:text-gray-400 me-1">Money spent:</dt>
                                <dd class="text-sm font-semibold text-gray-900 dark:text-white">$3,232</dd>
                            </dl>
                            <dl class="flex items-center justify-end">
                                <dt class="text-sm font-normal text-gray-500 dark:text-gray-400 me-1">Conversion rate:</dt>
                                <dd class="text-sm font-semibold text-gray-900 dark:text-white">1.2%</dd>
                            </dl>
                        </div>

                        <div id="column-chart"></div>
                        <div
                            class="grid items-center justify-between grid-cols-1 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center justify-between pt-5">
                                <!-- Button -->
                                <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                                    data-dropdown-placement="bottom"
                                    class="inline-flex items-center text-sm font-medium text-center text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                                    type="button">
                                    Last 7 days
                                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="lastDaysdropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                7 days</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                30 days</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                90 days</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-semibold text-blue-600 uppercase rounded-lg hover:text-blue-700 dark:hover:text-blue-500 hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                    Leads Report
                                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <script>
                        // ApexCharts options and config
                        window.addEventListener("load", function () {
                            const options = {
                                colors: ["#1A56DB", "#FDBA8C"],
                                series: [{
                                        name: "Organic",
                                        color: "#1A56DB",
                                        data: [{
                                                x: "Mon",
                                                y: 231
                                            },
                                            {
                                                x: "Tue",
                                                y: 122
                                            },
                                            {
                                                x: "Wed",
                                                y: 63
                                            },
                                            {
                                                x: "Thu",
                                                y: 421
                                            },
                                            {
                                                x: "Fri",
                                                y: 122
                                            },
                                            {
                                                x: "Sat",
                                                y: 323
                                            },
                                            {
                                                x: "Sun",
                                                y: 111
                                            },
                                        ],
                                    },
                                    {
                                        name: "Social media",
                                        color: "#FDBA8C",
                                        data: [{
                                                x: "Mon",
                                                y: 232
                                            },
                                            {
                                                x: "Tue",
                                                y: 113
                                            },
                                            {
                                                x: "Wed",
                                                y: 341
                                            },
                                            {
                                                x: "Thu",
                                                y: 224
                                            },
                                            {
                                                x: "Fri",
                                                y: 522
                                            },
                                            {
                                                x: "Sat",
                                                y: 411
                                            },
                                            {
                                                x: "Sun",
                                                y: 243
                                            },
                                        ],
                                    },
                                ],
                                chart: {
                                    type: "bar",
                                    height: "320px",
                                    fontFamily: "Inter, sans-serif",
                                    toolbar: {
                                        show: false,
                                    },
                                },
                                plotOptions: {
                                    bar: {
                                        horizontal: false,
                                        columnWidth: "70%",
                                        borderRadiusApplication: "end",
                                        borderRadius: 8,
                                    },
                                },
                                tooltip: {
                                    shared: true,
                                    intersect: false,
                                    style: {
                                        fontFamily: "Inter, sans-serif",
                                    },
                                },
                                states: {
                                    hover: {
                                        filter: {
                                            type: "darken",
                                            value: 1,
                                        },
                                    },
                                },
                                stroke: {
                                    show: true,
                                    width: 0,
                                    colors: ["transparent"],
                                },
                                grid: {
                                    show: false,
                                    strokeDashArray: 4,
                                    padding: {
                                        left: 2,
                                        right: 2,
                                        top: -14
                                    },
                                },
                                dataLabels: {
                                    enabled: false,
                                },
                                legend: {
                                    show: false,
                                },
                                xaxis: {
                                    floating: false,
                                    labels: {
                                        show: true,
                                        style: {
                                            fontFamily: "Inter, sans-serif",
                                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                                        }
                                    },
                                    axisBorder: {
                                        show: false,
                                    },
                                    axisTicks: {
                                        show: false,
                                    },
                                },
                                yaxis: {
                                    show: false,
                                },
                                fill: {
                                    opacity: 1,
                                },
                            }

                            if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
                                const chart = new ApexCharts(document.getElementById("column-chart"), options);
                                chart.render();
                            }
                        });
                    </script>


                </div>
                <!-- End of Bar Chart -->


                <!-- Pie Chart -->
                <div
                    class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 md:col-span-12 xl:col-span-6 intro-y">


                    <div class="w-full p-4 bg-white rounded-lg shadow min-w-sm dark:bg-gray-800 md:p-6">

                        <div class="flex items-start justify-between w-full">
                            <div class="flex-col items-center">
                                <div class="flex items-center mb-1">
                                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white me-1">Website
                                        traffic</h5>
                                    <svg data-popover-target="chart-info" data-popover-placement="bottom"
                                        class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ms-1"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z" />
                                    </svg>
                                    <div data-popover id="chart-info" role="tooltip"
                                        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth -
                                                Incremental</h3>
                                            <p>Report helps navigate cumulative growth of community activities. Ideally, the
                                                chart should have a growing trend, as stagnating chart signifies a
                                                significant decrease of community activity.</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                                <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown"
                                    data-dropdown-ignore-click-outside-class="datepicker" type="button"
                                    class="inline-flex items-center font-medium text-blue-700 dark:text-blue-600 hover:underline">31
                                    Nov - 31 Dev <svg class="w-3 h-3 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <div id="dateRangeDropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">
                                    <div class="p-3" aria-labelledby="dateRangeButton">
                                        <div date-rangepicker datepicker-autohide class="flex items-center">
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </div>
                                                <input name="start" type="text"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Start date">
                                            </div>
                                            <span class="mx-2 text-gray-500 dark:text-gray-400">to</span>
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </div>
                                                <input name="end" type="text"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="End date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end">
                                <button id="widgetDropdownButton" data-dropdown-toggle="widgetDropdown"
                                    data-dropdown-placement="bottom" type="button"
                                    class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-500 rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700"><svg
                                        class="w-3.5 h-3.5 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                        <path
                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                    </svg><span class="sr-only">Open dropdown</span>
                                </button>
                                <div id="widgetDropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="widgetDropdownButton">
                                        <li>
                                            <a href="#"
                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                    class="w-3 h-3 me-2" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279" />
                                                </svg>Add Expenses
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Line Chart -->
                        <div class="py-6" id="pie-chart"></div>

                        <div
                            class="grid items-center justify-between grid-cols-1 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center justify-between pt-5">
                                <!-- Button -->
                                <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                                    data-dropdown-placement="bottom"
                                    class="inline-flex items-center text-sm font-medium text-center text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                                    type="button">
                                    Last 7 days
                                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <div id="lastDaysdropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                7 days</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                30 days</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                90 days</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-semibold text-blue-600 uppercase rounded-lg hover:text-blue-700 dark:hover:text-blue-500 hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                    Traffic analysis
                                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <script>
                        // ApexCharts options and config
                        window.addEventListener("load", function () {
                            const getChartOptions = () => {
                                return {
                                    series: [52.8, 26.8, 20.4],
                                    colors: ["#1C64F2", "#16BDCA", "#9061F9"],
                                    chart: {
                                        height: 420,
                                        width: "100%",
                                        type: "pie",
                                    },
                                    stroke: {
                                        colors: ["white"],
                                        lineCap: "",
                                    },
                                    plotOptions: {
                                        pie: {
                                            labels: {
                                                show: true,
                                            },
                                            size: "100%",
                                            dataLabels: {
                                                offset: -25
                                            }
                                        },
                                    },
                                    labels: ["Direct", "Organic search", "Referrals"],
                                    dataLabels: {
                                        enabled: true,
                                        style: {
                                            fontFamily: "Inter, sans-serif",
                                        },
                                    },
                                    legend: {
                                        position: "bottom",
                                        fontFamily: "Inter, sans-serif",
                                    },
                                    yaxis: {
                                        labels: {
                                            formatter: function (value) {
                                                return value + "%"
                                            },
                                        },
                                    },
                                    xaxis: {
                                        labels: {
                                            formatter: function (value) {
                                                return value + "%"
                                            },
                                        },
                                        axisTicks: {
                                            show: false,
                                        },
                                        axisBorder: {
                                            show: false,
                                        },
                                    },
                                }
                            }

                            if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
                                const chart = new ApexCharts(document.getElementById("pie-chart"),
                                    getChartOptions());
                                chart.render();
                            }
                        });
                    </script>


                </div>
                <!-- End of Pie Chart -->

            </div>
            <!-- End of Charts Container-->



            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>

        </div>
    </div>

@endsection
