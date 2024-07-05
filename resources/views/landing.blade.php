<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div
    class="ezy__nav2 light py-6 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative"
    >
    <nav>
        <div class="container px-4">
        <div class="flex justify-between items-center">
            <a class="font-black text-3xl" href="#"> Kindy Joy </a>
            <button
            class="block lg:hidden cursor-pointer h-10 z-20"
            type="button"
            id="hamburger"
            >
            <div
                class="h-0.5 w-7 bg-black dark:bg-white -translate-y-2"
            ></div>
            <div class="h-0.5 w-7 bg-black dark:bg-white"></div>
            <div class="h-0.5 w-7 bg-black dark:bg-white translate-y-2"></div>
            </button>
            <ul
            class="flex flex-col lg:flex-row justify-center items-center text-3xl gap-6 lg:text-base lg:gap-2 absolute h-screen w-screen top-0 left-full lg:left-0 lg:relative lg:h-auto lg:w-auto bg-white dark:bg-[#0b1727] lg:bg-transparent"
            id="navbar"
            >
            <li>
                <a href="/login">
                <button
                class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white py-1.5 px-4 rounded"
                >
                Log In
                </button>
                </a>
            </li>
            <li>
                <a href="/register">
                <button
                class="border border-blue-600 bg-blue-600 text-white hover:bg-opacity-90 py-1.5 px-4 rounded"
                >
                Get Started
                </button>
                </a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    </div>

    <section
    class="ezy__header37 light py-28 md:py-[300px] bg-[#d9d4d0] text-zinc-900 relative overflow-hidden z-10"
    >
    <div
        class="absolute top-0 right-0 bottom-0 h-full w-[85%] bg-center bg-cover bg-no-repeat -z-10"
        style="
        background-image: url(https://cdn.easyfrontend.com/pictures/hero/header-child-bg.png);
        "
    ></div>
    <!-- shape one -->
    <div class="absolute top-12 left-12">
        <img
        src="https://cdn.easyfrontend.com/pictures/hero/header36-abstract1.png"
        alt=""
        class="max-w-full h-auto"
        />
    </div>
    <!-- shape two -->
    <div class="absolute bottom-12 left-12">
        <img
        src="https://cdn.easyfrontend.com/pictures/hero/header39-abstract2.png"
        alt=""
        class="max-w-full h-auto"
        />
    </div>
    <!-- shape three -->
    <div class="absolute top-1/2 left-1/2">
        <img
        src="https://cdn.easyfrontend.com/pictures/hero/header39-abstract3.png"
        alt=""
        class="max-w-full h-auto"
        />
    </div>

    <div class="container px-4 mx-auto">
        <div class="flex max-w-xl items-center justify-center">
        <div>
            <h2
            class="text-[40px] lg:text-[64px] leading-tight font-bold mb-6 md:mb-12"
            >
            Bring Your Own Rainbow
            </h2>
            <button
            type="button"
            class="text-base font-bold bg-blue-600 text-white rounded-lg py-4 px-10 leading-none cursor-pointer hover:bg-opacity-90"
            >
            Sign Up
            </button>
        </div>
        </div>
    </div>
    </section>

    @if($errors->has('email'))
    <div class="fixed inset-x-0 top-0 flex items-end justify-right px-4 py-6 justify-end">
            <div
                class="max-w-sm w-full shadow-lg rounded px-4 py-3 rounded relative bg-red-400 border-l-4 border-red-700 text-white">
                <div class="p-2">
                    <div class="flex items-start">
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="text-sm leading-5 font-medium">
                            {{ $errors->first('email') }}
                            </p>
                        </div>
                        <div class="ml-4 flex-shrink-0 flex">
                            <button class="inline-flex text-white transition ease-in-out duration-150"
                            onclick="return this.parentNode.parentNode.parentNode.parentNode.remove()"
                            >
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

</body>
</html>