<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <!-- Page Container -->
    <div id="page-container" x-data="{ userDropdownOpen: false, mobileSidebarOpen: false, desktopSidebarOpen: true }"
        x-bind:class="{
            'flex flex-col mx-auto w-full min-h-screen bg-gray-50': true,
            'lg:pl-64': desktopSidebarOpen
        }">
        <!-- Page Sidebar -->

        <nav id="page-sidebar"
            x-bind:class="{
                'flex flex-col fixed top-0 left-0 bottom-0 w-[60%] lg:w-64 h-full bg-white border-r border-gray-200 z-50 backdrop-blur-sm transform transition-transform duration-500 ease-out': true,
                '-translate-x-full': !mobileSidebarOpen,
                'translate-x-0': mobileSidebarOpen,
                'lg:-translate-x-full': !desktopSidebarOpen,
                'lg:translate-x-0': desktopSidebarOpen,
            }"
            aria-label="Main Sidebar Navigation">
            <!-- Sidebar Header -->
            <div
                class="h-16 flex-none flex items-center justify-between lg:justify-center px-4 w-full border-b-2 border-gray-100">
                <!-- Brand -->
                <a href="javascript:void(0)"
                    class="inline-flex items-center space-x-2 font-bold text-lg tracking-wide text-gray-600 hover:text-gray-500">
                    <svg id="logo-15" class="w-5 h-5 text-gray-900" viewBox="0 0 49 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.5 12.75C24.5 18.9632 19.4632 24 13.25 24H2V12.75C2 6.53679 7.03679 1.5 13.25 1.5C19.4632 1.5 24.5 6.53679 24.5 12.75Z"
                            class="ccustom" fill="#17CF97"></path>
                        <path
                            d="M24.5 35.25C24.5 29.0368 29.5368 24 35.75 24H47V35.25C47 41.4632 41.9632 46.5 35.75 46.5C29.5368 46.5 24.5 41.4632 24.5 35.25Z"
                            class="ccustom" fill="#17CF97"></path>
                        <path
                            d="M2 35.25C2 41.4632 7.03679 46.5 13.25 46.5H24.5V35.25C24.5 29.0368 19.4632 24 13.25 24C7.03679 24 2 29.0368 2 35.25Z"
                            class="ccustom" fill="#17CF97"></path>
                        <path
                            d="M47 12.75C47 6.53679 41.9632 1.5 35.75 1.5H24.5V12.75C24.5 18.9632 29.5368 24 35.75 24C41.9632 24 47 18.9632 47 12.75Z"
                            class="ccustom" fill="#17CF97"></path>
                    </svg>
                    <span>Company</span>
                </a>
                <!-- END Brand -->

                <!-- Close Sidebar on Mobile -->
                <div class="lg:hidden">
                    <button type="button"
                        class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm rounded border-transparent  focus:ring focus:ring-gray-500 focus:ring-opacity-50 active:text-gray-700"
                        x-on:click="mobileSidebarOpen = false">

                        <svg class="inline-block w-6 h-6 -mx-1" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                fill="#12131A" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.70711 8.29289C9.31658 7.90237 8.68342 7.90237 8.29289 8.29289C7.90237 8.68342 7.90237 9.31658 8.29289 9.70711L10.5858 12L8.29289 14.2929C7.90237 14.6834 7.90237 15.3166 8.29289 15.7071C8.68342 16.0976 9.31658 16.0976 9.70711 15.7071L12 13.4142L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L13.4142 12L15.7071 9.70711C16.0976 9.31658 16.0976 8.68342 15.7071 8.29289C15.3166 7.90237 14.6834 7.90237 14.2929 8.29289L12 10.5858L9.70711 8.29289Z"
                                fill="#12131A" />
                        </svg>

                    </button>
                </div>
                <!-- END Close Sidebar on Mobile -->
            </div>
            <!-- END Sidebar Header -->

            <!-- Sidebar Navigation -->

            <div class="h-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
                <div class="p-4 w-full">
                    <nav class="space-y-1">
                        <a href="javascript:void(0)"
                            class="flex items-center space-x-3 px-3 font-medium rounded text-gray-700 bg-gray-100">
                            <span class="flex-none flex items-center opacity-50">

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.85714 3H4.14286C3.51167 3 3 3.51167 3 4.14286V9.85714C3 10.4883 3.51167 11 4.14286 11H9.85714C10.4883 11 11 10.4883 11 9.85714V4.14286C11 3.51167 10.4883 3 9.85714 3Z"
                                        class="fill-slate-500 dark:fill-navy-200"></path>
                                    <path
                                        d="M9.85714 12.8999H4.14286C3.51167 12.8999 3 13.4116 3 14.0428V19.757C3 20.3882 3.51167 20.8999 4.14286 20.8999H9.85714C10.4883 20.8999 11 20.3882 11 19.757V14.0428C11 13.4116 10.4883 12.8999 9.85714 12.8999Z"
                                        class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.3"></path>
                                    <path
                                        d="M19.757 3H14.0428C13.4116 3 12.8999 3.51167 12.8999 4.14286V9.85714C12.8999 10.4883 13.4116 11 14.0428 11H19.757C20.3882 11 20.8999 10.4883 20.8999 9.85714V4.14286C20.8999 3.51167 20.3882 3 19.757 3Z"
                                        class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.3"></path>
                                    <path
                                        d="M19.757 12.8999H14.0428C13.4116 12.8999 12.8999 13.4116 12.8999 14.0428V19.757C12.8999 20.3882 13.4116 20.8999 14.0428 20.8999H19.757C20.3882 20.8999 20.8999 20.3882 20.8999 19.757V14.0428C20.8999 13.4116 20.3882 12.8999 19.757 12.8999Z"
                                        class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.3"></path>
                                </svg>
                            </span>
                            <span class="py-2 grow">Dashboard</span>

                        </a>
                        <div class="px-3 pt-5 pb-2 text-xs font-medium uppercase tracking-wider text-gray-500">Projects
                        </div>
                        <a href="javascript:void(0)"
                            class="flex items-center space-x-3 px-3 font-medium rounded text-gray-600 hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">
                            <span class="flex-none flex items-center opacity-50">
                                <svg class=" inline-block w-5 h-5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.25"
                                        d="M13 6L12.4104 5.01732C11.8306 4.05094 10.8702 3.36835 9.75227 3.22585C8.83875 3.10939 7.66937 3 6.5 3C5.68392 3 4.86784 3.05328 4.13873 3.12505C2.53169 3.28325 1.31947 4.53621 1.19597 6.14628C1.09136 7.51009 1 9.43529 1 12C1 13.8205 1.06629 15.4422 1.15059 16.7685C1.29156 18.9862 3.01613 20.6935 5.23467 20.8214C6.91963 20.9185 9.17474 21 12 21C14.8253 21 17.0804 20.9185 18.7653 20.8214C20.9839 20.6935 22.7084 18.9862 22.8494 16.7685C22.9337 15.4422 23 13.8205 23 12C23 10.9589 22.9398 9.97795 22.8611 9.14085C22.7101 7.53313 21.4669 6.2899 19.8591 6.13886C19.0221 6.06022 18.0411 6 17 6H13Z"
                                        fill="#12131A" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13 6H1.21033C1.39381 4.46081 2.58074 3.27842 4.13877 3.12505C4.86788 3.05328 5.68396 3 6.50004 3C7.66941 3 8.83879 3.10939 9.75231 3.22585C10.8702 3.36835 11.8306 4.05094 12.4104 5.01732L13 6Z"
                                        fill="#12131A" />
                                </svg>

                            </span>
                            <span class="py-2 grow">File Manager</span>

                        </a>
                        <a href="javascript:void(0)"
                            class="flex items-center space-x-3 px-3 font-medium rounded text-gray-600 hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">
                            <span class="flex-none flex items-center opacity-50">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.25"
                                        d="M3 4C3 2.34315 4.34315 1 6 1H15.7574C16.553 1 17.3161 1.31607 17.8787 1.87868L20.1213 4.12132C20.6839 4.68393 21 5.44699 21 6.24264V20C21 21.6569 19.6569 23 18 23H6C4.34315 23 3 21.6569 3 20V4Z"
                                        fill="#12131A" />
                                    <path
                                        d="M15 1.89181C15 1.39927 15.3993 1 15.8918 1V1C16.6014 1 17.2819 1.28187 17.7836 1.78361L20.2164 4.21639C20.7181 4.71813 21 5.39863 21 6.10819V6.10819C21 6.60073 20.6007 7 20.1082 7H16C15.4477 7 15 6.55228 15 6V1.89181Z"
                                        fill="#12131A" />
                                    <path
                                        d="M9 12C8.44771 12 8 12.4477 8 13C8 13.5523 8.44771 14 9 14H15C15.5523 14 16 13.5523 16 13C16 12.4477 15.5523 12 15 12H9Z"
                                        fill="#12131A" />
                                    <path
                                        d="M9 16C8.44771 16 8 16.4477 8 17C8 17.5523 8.44771 18 9 18H12C12.5523 18 13 17.5523 13 17C13 16.4477 12.5523 16 12 16H9Z"
                                        fill="#12131A" />
                                </svg>
                            </span>
                            <span class="py-2 grow">Post</span>

                        </a>
                        <a href="javascript:void(0)"
                            class="flex items-center space-x-3 px-3 font-medium rounded text-gray-600 hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">
                            <span class="flex-none flex items-center opacity-50">
                                <svg class="hi-outline hi-users inline-block w-5 h-5" stroke="currentColor"
                                    fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>
                            <span class="py-2 grow">Clients</span>

                        </a>

                        {{-- Dropdown --}}

                        <div x-data="{ showDropdown: false }">
                            <a @click="showDropdown = !showDropdown"
                                class="flex items-center space-x-3 px-3 font-medium rounded text-gray-600
                            hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50"
                                href="javascript:void(0)">
                                <span class="flex-none flex items-center opacity-50">

                                    <svg class=" inline-block w-6 h-6 viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z"
                                            fill="#12131A" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z"
                                            fill="#12131A" />
                                    </svg>
                                </span>
                                <span class="py-2 grow">Add New</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <div x-show="showDropdown">
                                <ul class="z-10 p-1 mx-2 mt-4 w-aut origin-top-right rounded-md border border-gray-100 bg-gray-100 shadow-sm"
                                    role="menu">

                                    <li><a href="#"
                                            class="flex justify-between items-center px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform  hover:bg-white hover:rounded-lg ">
                                            view profile
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                                </svg>
                                            </span>
                                        </a></li>

                                    <li><a href="#"
                                            class="flex justify-between items-center px-4 py-3 text-sm text-gray-600 hover:text-gray-900 capitalize transition-colors duration-200 transform  hover:bg-white hover:rounded-lg ">
                                            view profile
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-5 w-5 rotate-45 hover:text-gray-900" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                                </svg>
                                            </span>
                                        </a></li>

                                    <li><a href="#"
                                            class="flex justify-between items-center px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform  hover:bg-white hover:rounded-lg ">
                                            view profile
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                                </svg>
                                            </span>
                                        </a></li>

                                </ul>
                            </div>
                        </div>



                        <div class="px-3 pt-5 pb-2 text-xs font-medium uppercase tracking-wider text-gray-500">Account
                        </div>
                        <a href="javascript:void(0)"
                            class="flex items-center space-x-3 px-3 font-medium rounded text-gray-600 hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">
                            <span class="flex-none flex items-center opacity-50">
                                <svg class=" inline-block w-5 h-5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 6C17 8.76142 14.7614 11 12 11C9.23858 11 7 8.76142 7 6C7 3.23858 9.23858 1 12 1C14.7614 1 17 3.23858 17 6Z"
                                        fill="#121319" />
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.818 14.1248C18.2016 13.4101 17.1428 13.4469 16.3149 13.9001C15.0338 14.6013 13.5635 15 12 15C10.4365 15 8.96618 14.6013 7.68505 13.9001C6.85717 13.4469 5.79841 13.4101 5.182 14.1248C3.82222 15.7014 3 17.7547 3 20V21C3 22.1045 3.89543 23 5 23H19C20.1046 23 21 22.1045 21 21V20C21 17.7547 20.1778 15.7014 18.818 14.1248Z"
                                        fill="#191213" />
                                </svg>

                            </span>
                            <span class="py-2 grow">Profile</span>
                        </a>
                        <a href="javascript:void(0)"
                            class="flex items-center space-x-3 px-3 font-medium rounded text-gray-600 hover:text-gray-700 hover:bg-gray-100 active:bg-gray-50">
                            <span class="flex-none flex items-center opacity-50">


                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.3"
                                        fill="currentColor"
                                        d="M2 12.947v-1.771c0-1.047.85-1.913 1.899-1.913 1.81 0 2.549-1.288 1.64-2.868a1.919 1.919 0 0 1 .699-2.607l1.729-.996c.79-.474 1.81-.192 2.279.603l.11.192c.9 1.58 2.379 1.58 3.288 0l.11-.192c.47-.795 1.49-1.077 2.279-.603l1.73.996a1.92 1.92 0 0 1 .699 2.607c-.91 1.58-.17 2.868 1.639 2.868 1.04 0 1.899.856 1.899 1.912v1.772c0 1.047-.85 1.912-1.9 1.912-1.808 0-2.548 1.288-1.638 2.869.52.915.21 2.083-.7 2.606l-1.729.997c-.79.473-1.81.191-2.279-.604l-.11-.191c-.9-1.58-2.379-1.58-3.288 0l-.11.19c-.47.796-1.49 1.078-2.279.605l-1.73-.997a1.919 1.919 0 0 1-.699-2.606c.91-1.58.17-2.869-1.639-2.869A1.911 1.911 0 0 1 2 12.947Z">
                                    </path>
                                    <path class="fill-slate-500 dark:fill-navy-200" fill="currentColor"
                                        d="M11.995 15.332c1.794 0 3.248-1.464 3.248-3.27 0-1.807-1.454-3.272-3.248-3.272-1.794 0-3.248 1.465-3.248 3.271 0 1.807 1.454 3.271 3.248 3.271Z">
                                    </path>
                                </svg>
                            </span>
                            <span class="py-2 grow">Settings</span>
                        </a>
                        <div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                    class="flex items-center space-x-3 px-3 font-medium rounded text-gray-600 hover:text-gray-700 hover:bg-red-50 active:bg-gray-50">
                                    <span class="flex-none flex items-center opacity-50">

                                        <svg class="inline-block w-5 h-5 " viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.25"
                                                d="M13.1409 21.8611C11.5331 21.7101 10.3267 20.4628 10.2092 18.8523C10.0992 17.3432 10 15.118 10 12C10 8.882 10.0992 6.65682 10.2092 5.14773C10.3267 3.5372 11.5331 2.2899 13.1408 2.13886C13.9779 2.06022 14.9589 2 16 2C17.0411 2 18.0221 2.06022 18.8592 2.13886C20.4669 2.2899 21.6733 3.53721 21.7908 5.14773C21.9008 6.65683 22 8.882 22 12C22 15.118 21.9008 17.3432 21.7908 18.8523C21.6733 20.4628 20.4669 21.7101 18.8591 21.8611C18.0221 21.9398 17.0411 22 16 22C14.9589 22 13.9779 21.9398 13.1409 21.8611Z"
                                                fill="#12131A" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.20711 14.7929C7.59763 15.1834 7.59763 15.8166 7.20711 16.2071C6.81658 16.5976 6.18342 16.5976 5.79289 16.2071L2.29289 12.7071C1.90237 12.3166 1.90237 11.6834 2.29289 11.2929L5.79289 7.79289C6.18342 7.40237 6.81658 7.40237 7.20711 7.79289C7.59763 8.18342 7.59763 8.81658 7.20711 9.20711L5.41421 11H15C15.5523 11 16 11.4477 16 12C16 12.5523 15.5523 13 15 13L5.41421 13L7.20711 14.7929Z"
                                                fill="#12131A" />
                                        </svg>
                                    </span>
                                    <span class="py-2 grow hover:text-red-500 ">
                                        {{ __('Log Out') }}</span>

                                </x-dropdown-link>
                            </form>

                        </div>

                    </nav>
                </div>
            </div>
            <!-- END Sidebar Navigation -->
        </nav>
        <!-- Page Sidebar -->

        <!-- Page Header -->
        <header id="page-header"
            x-bind:class="{
                'flex flex-none items-center h-16 bg-white shadow-sm fixed top-0 right-0 left-0 z-30': true,
                'lg:pl-64': desktopSidebarOpen
            }">
            <div class="flex justify-between max-w-10xl mx-auto px-4 lg:px-8 w-full">
                <!-- Left Section -->
                <div class="flex items-center space-x-2">
                    <!-- Toggle Sidebar on Desktop -->
                    <div class="hidden lg:block">
                        <button type="button"
                            class="inline-flex justify-center items-center space-x-2  font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none"
                            x-on:click="desktopSidebarOpen = !desktopSidebarOpen">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 9h16.5m-16.5 6.75h16.5" />
                            </svg>
                        </button>
                    </div>
                    <!-- END Toggle Sidebar on Desktop -->

                    <!-- Toggle Sidebar on Mobile -->
                    <div class="lg:hidden">
                        <button type="button"
                            class="inline-flex justify-center items-center space-x-2  font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none"
                            x-on:click="mobileSidebarOpen = true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 9h16.5m-16.5 6.75h16.5" />
                            </svg>


                        </button>
                    </div>
                    <!-- END Toggle Sidebar on Mobile -->

                    <!-- Search -->
                    <div class="hidden sm:block">
                        <form onsubmit="return false;">
                            <input type="text"
                                class="w-full block border border-gray-200 rounded px-3 py-2 leading-5 text-sm shadow-sm focus:ring-opacity-50"
                                id="tk-form-layouts-search" placeholder="Search.." />
                        </form>
                    </div>
                    <div class="sm:hidden">
                        <button type="button"
                            class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                            <svg class="hi-solid hi-search inline-block w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <!-- END Search -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="inline-flex justify-center items-center space-x-4">
                    <!-- Notifications -->
                    <div class="flex px-3 py-2">
                        <button
                            class="btn relative h-9 w-9 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-slate-500 inline-flex justify-center items-center"
                                stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15.375 17.556h-6.75m6.75 0H21l-1.58-1.562a2.254 2.254 0 01-.67-1.596v-3.51a6.612 6.612 0 00-1.238-3.85 6.744 6.744 0 00-3.262-2.437v-.379c0-.59-.237-1.154-.659-1.571A2.265 2.265 0 0012 2c-.597 0-1.169.234-1.591.65a2.208 2.208 0 00-.659 1.572v.38c-2.621.915-4.5 3.385-4.5 6.287v3.51c0 .598-.24 1.172-.67 1.595L3 17.556h12.375zm0 0v1.11c0 .885-.356 1.733-.989 2.358A3.397 3.397 0 0112 22a3.397 3.397 0 01-2.386-.976 3.313 3.313 0 01-.989-2.357v-1.111h6.75z">
                                </path>
                            </svg>

                            <span class="absolute -top-px -right-px flex h-3 w-3 items-center justify-center">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full  rounded-full bg-secondary opacity-80"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-500"></span>
                            </span>
                        </button>

                    </div>
                    <!-- END Notifications -->

                    <!-- User Dropdown -->
                    <div class="mx-auto my-auto">

                        <div class="relative inline-block justify-center items-center">

                            <!-- Dropdown Toggle Button -->

                            <button aria-haspopup="true" x-bind:aria-expanded="userDropdownOpen"
                                x-on:click="userDropdownOpen = true" class="avatar h-8 w-9 ">
                                <img class="rounded-full inline-flex justify-center items-center"
                                    src="https://lineone.piniastudio.com/images/avatar/avatar-12.jpg" alt="avatar">
                                <span
                                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-green-800"></span>

                            </button>
                            <!-- END Dropdown Toggle Button -->

                            <!-- Dropdown -->
                            <div x-show="userDropdownOpen" x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="transform opacity-0 scale-75"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-75"
                                x-on:click.outside="userDropdownOpen = false" role="menu"
                                aria-labelledby="tk-dropdown-layouts-user"
                                class="absolute right-0 origin-top-right mt-2 w-48 shadow-xl rounded z-1">
                                <div
                                    class="bg-white ring-1 ring-black ring-opacity-5 rounded divide-y divide-gray-100">
                                    <div class="p-2 space-y-1">
                                        <a role="menuitem" href="javascript:void(0)"
                                            class="flex items-center space-x-2 rounded py-2 px-3 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                                            <svg class=" inline-block w-5 h-5" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17 6C17 8.76142 14.7614 11 12 11C9.23858 11 7 8.76142 7 6C7 3.23858 9.23858 1 12 1C14.7614 1 17 3.23858 17 6Z"
                                                    fill="#121319" />
                                                <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M18.818 14.1248C18.2016 13.4101 17.1428 13.4469 16.3149 13.9001C15.0338 14.6013 13.5635 15 12 15C10.4365 15 8.96618 14.6013 7.68505 13.9001C6.85717 13.4469 5.79841 13.4101 5.182 14.1248C3.82222 15.7014 3 17.7547 3 20V21C3 22.1045 3.89543 23 5 23H19C20.1046 23 21 22.1045 21 21V20C21 17.7547 20.1778 15.7014 18.818 14.1248Z"
                                                    fill="#191213" />
                                            </svg>
                                            <span>Profile</span>
                                        </a>
                                        <a role="menuitem" href="javascript:void(0)"
                                            class="flex items-center space-x-2 rounded py-2 px-3 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">

                                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.25"
                                                    d="M1 6C1 4.34315 2.34315 3 4 3H20C21.6569 3 23 4.34315 23 6V18C23 19.6569 21.6569 21 20 21H4C2.34315 21 1 19.6569 1 18V6Z"
                                                    fill="#191213" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.23177 7.35984C5.58534 6.93556 6.2159 6.87824 6.64018 7.2318L11.3598 11.1648C11.7307 11.4739 12.2693 11.4739 12.6402 11.1648L17.3598 7.2318C17.7841 6.87824 18.4147 6.93556 18.7682 7.35984C19.1218 7.78412 19.0645 8.41468 18.6402 8.76825L13.9205 12.7013C12.808 13.6284 11.192 13.6284 10.0794 12.7013L5.35981 8.76825C4.93553 8.41468 4.87821 7.78412 5.23177 7.35984Z"
                                                    fill="#121319" />
                                            </svg>
                                            <span>Inbox</span>
                                        </a>
                                    </div>
                                    <div class="p-2 space-y-1">
                                        <a role="menuitem" href="javascript:void(0)"
                                            class="flex items-center space-x-2 rounded py-2 px-3 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                                            <svg class="hi-solid hi-cog inline-block w-5 h-5 opacity-50"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Settings</span>
                                        </a>
                                    </div>
                                    <div class="p-2 space-y-1">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                class="w-full text-left flex items-center space-x-2 rounded py-2 px-3 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700"
                                                onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                <svg class="hi-outline hi-lock-open inline-block w-5 h-5 text-red-600"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.25"
                                                        d="M13.1409 21.8611C11.5331 21.7101 10.3267 20.4628 10.2092 18.8523C10.0992 17.3432 10 15.118 10 12C10 8.882 10.0992 6.65682 10.2092 5.14773C10.3267 3.5372 11.5331 2.2899 13.1408 2.13886C13.9779 2.06022 14.9589 2 16 2C17.0411 2 18.0221 2.06022 18.8592 2.13886C20.4669 2.2899 21.6733 3.53721 21.7908 5.14773C21.9008 6.65683 22 8.882 22 12C22 15.118 21.9008 17.3432 21.7908 18.8523C21.6733 20.4628 20.4669 21.7101 18.8591 21.8611C18.0221 21.9398 17.0411 22 16 22C14.9589 22 13.9779 21.9398 13.1409 21.8611Z"
                                                        fill="#12131A" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.20711 14.7929C7.59763 15.1834 7.59763 15.8166 7.20711 16.2071C6.81658 16.5976 6.18342 16.5976 5.79289 16.2071L2.29289 12.7071C1.90237 12.3166 1.90237 11.6834 2.29289 11.2929L5.79289 7.79289C6.18342 7.40237 6.81658 7.40237 7.20711 7.79289C7.59763 8.18342 7.59763 8.81658 7.20711 9.20711L5.41421 11H15C15.5523 11 16 11.4477 16 12C16 12.5523 15.5523 13 15 13L5.41421 13L7.20711 14.7929Z"
                                                        fill="#12131A" />
                                                </svg>
                                                <span>{{ __('Sign Out') }}</span>

                                            </x-dropdown-link>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- END Dropdown -->

                        </div>

                    </div>

                    <!-- END User Dropdown -->
                </div>
                <!-- END Right Section -->
            </div>
        </header>
        <!-- END Page Header -->

        <!-- Page Content -->
        <main id="page-content" class="flex flex-auto flex-col max-w-full pt-16">
            <!-- Page Section -->
            <div class="max-w-screen mx-auto p-4 lg:p-8 w-full">
                <!--

    ADD YOUR MAIN CONTENT BELOW

    -->


                <!-- Placeholder -->
                <div class=" rounded-xl bg-white border-2 border-gray-100 text-gray-600 py-8 px-6">
                    Admin Content</div>


                <!--

    ADD YOUR MAIN CONTENT ABOVE

    -->
            </div>
            <!-- END Page Section -->
        </main>
        <!-- END Page Content -->

        <!-- Page Footer -->
        <footer id="page-footer" class="flex flex-none items-center bg-white">

        </footer>
        <!-- END Page Footer -->
    </div>
    <!-- END Page Container -->


</body>

</html>
