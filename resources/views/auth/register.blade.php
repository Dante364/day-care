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
<!-- component -->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css" rel="stylesheet">
    </head>
    <body class="bg-white rounded-lg py-5">    
        <div class="container flex flex-col mx-auto bg-white rounded-lg pt-12 my-5">
           <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
      <div class="flex items-center justify-center w-full lg:p-12">
        <div class="flex items-center xl:p-10">
          <form class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl" action="{{ route('register') }}" method="POST">
            @csrf
            <h3 class="mb-3 text-4xl font-extrabold text-dark-grey-900">Sign In</h3>
            <p class="mb-4 text-grey-700">Enter your email and password</p>
            <a class="flex items-center justify-center w-full py-4 mb-6 text-sm font-medium transition duration-300 rounded-2xl text-grey-900 bg-grey-300 hover:bg-grey-400 focus:ring-4 focus:ring-grey-300">
              <img class="h-5 mr-2" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/logos/logo-google.png" alt="">
              Sign in with Google
            </a>
            <div class="flex items-center mb-3">
              <hr class="h-0 border-b border-solid border-grey-500 grow">
              <p class="mx-4 text-grey-600">or</p>
              <hr class="h-0 border-b border-solid border-grey-500 grow">
            </div>
            <label for="name" class="mb-2 text-sm text-start text-grey-900">Name*</label>
            <input id="name" name="name" type="text" placeholder="Enter your name" class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none focus:bg-grey-400 mb-7 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl"/>
            <label for="email" class="mb-2 text-sm text-start text-grey-900">Email*</label>
            <input id="email" name="email" type="email" placeholder="mail@loopple.com" class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none focus:bg-grey-400 mb-7 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl"/>
            <label for="phone" class="mb-2 text-sm text-start text-grey-900">Phone*</label>
            <input id="phone" name="phone" type="number" placeholder="Enter your phone number" class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none focus:bg-grey-400 mb-7 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl"/>
            <label for="password" class="mb-2 text-sm text-start text-grey-900">Password*</label>
            <input id="password" name="password" type="password" placeholder="Enter a password" class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl"/>
            <label for="password_confirmation" class="mb-2 text-sm text-start text-grey-900">Confirm Password*</label>
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm your password" class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl"/>
            <div class="flex flex-row justify-between mb-8">
              <label class="relative inline-flex items-center mr-3 cursor-pointer select-none">
                <input type="checkbox" checked value="" class="sr-only peer">
                <div
                  class="w-5 h-5 bg-white border-2 rounded-sm border-grey-500 peer peer-checked:border-0 peer-checked:bg-purple-blue-500">
                  <img class="" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/icons/check.png" alt="tick">
                </div>
                <span class="ml-3 text-sm font-normal text-grey-900">Keep me logged in</span>
              </label>
              <a href="javascript:void(0)" class="mr-4 text-sm font-medium text-purple-blue-500">Forget password?</a>
            </div>
            <input class="w-full px-6 py-5 mb-5 text-sm font-bold leading-none text-white transition duration-300 md:w-96 rounded-2xl hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 bg-purple-blue-500" value="Get Started" type="submit" />
            <p class="text-sm leading-relaxed text-grey-900">Not registered yet? <a href="javascript:void(0)" class="font-bold text-grey-700">Create an Account</a></p>
          </form>
        </div>
      </div>
    </div>
        </div>
        <div class="flex flex-wrap -mx-3 my-5">
            <div class="w-full max-w-full sm:w-3/4 mx-auto text-center">
                <p class="text-sm text-slate-500 py-1">
                    Tailwind CSS Component from <a href="https://www.loopple.com/theme/motion-landing-library?ref=tailwindcomponents" class="text-slate-700 hover:text-slate-900" target="_blank">Motion Landing Library</a> by <a href="https://www.loopple.com" class="text-slate-700 hover:text-slate-900" target="_blank">Loopple Builder</a>.
                </p>
            </div>
        </div>
    </body>

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