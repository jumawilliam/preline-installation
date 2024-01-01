<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <!-- ========== HEADER ========== -->
<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-blue-600 text-sm py-3 sm:py-0">
    <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
      <div class="flex items-center justify-between">
        <a class="flex-none text-xl font-semibold text-white" href="#" aria-label="Brand">Brand</a>
        <div class="sm:hidden">
          <button type="button" class="hs-collapse-toggle w-9 h-9 flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-white/20 text-white hover:border-white/40 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
            <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          </button>
        </div>
      </div>
      <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">
          <a class="font-medium text-white sm:py-6" href="#" aria-current="page">Landing</a>
          <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Account</a>
          <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Work</a>
          <a class="font-medium text-white/[.8] hover:text-white sm:py-6" href="#">Blog</a>

          <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
            <button type="button" class="flex items-center w-full text-white/[.8] hover:text-white font-medium">
              Dropdown
              <svg class="flex-shrink-0 ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>

            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5">
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                About
              </a>
              <div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                <button type="button" class="w-full flex justify-between w-full items-center text-sm text-gray-800 rounded-lg py-2 px-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                  Sub Menu
                  <svg class="sm:-rotate-90 flex-shrink-0 ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute sm:border before:-end-5 before:top-0 before:h-full before:w-5 top-0 end-full !mx-[10px]">
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    About
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Downloads
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Team Account
                  </a>
                </div>
              </div>

              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                Downloads
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                Team Account
              </a>
            </div>
          </div>

          <a class="flex items-center gap-x-2 font-medium text-white/[.8] hover:text-white sm:border-s sm:border-white/[.3] sm:my-6 sm:ps-6" href="#">
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            Log in
          </a>
        </div>
      </div>
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->
  <!-- Hero -->
<div class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:w-full before:h-full before:-z-[1] before:transform before:-translate-x-1/2 dark:before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element-dark.svg')]">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
      <!-- Announcement Banner -->
      <div class="flex justify-center">
        <a class="inline-flex items-center gap-x-2 bg-white border border-gray-200 text-sm text-gray-800 p-1 ps-3 rounded-full transition hover:border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:hover:border-gray-600 dark:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
          PRO release - Join to waitlist
          <span class="py-1.5 px-2.5 inline-flex justify-center items-center gap-x-2 rounded-full bg-gray-200 font-semibold text-sm text-gray-600 dark:bg-gray-700 dark:text-gray-400">
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </span>
        </a>
      </div>
      <!-- End Announcement Banner -->

      <!-- Title -->
      <div class="mt-5 max-w-2xl text-center mx-auto">
        <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
          Let's Build
          <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">Together</span>
        </h1>
      </div>
      <!-- End Title -->

      <div class="mt-5 max-w-3xl text-center mx-auto">
        <p class="text-lg text-gray-600 dark:text-gray-400">Preline UI is an open-source set of prebuilt UI components, ready-to-use examples and Figma design system based on the utility-first Tailwind CSS framework.</p>
      </div>

      <!-- Buttons -->
      <div class="mt-8 gap-3 flex justify-center">
        <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-1 focus:ring-gray-600 py-3 px-4 dark:focus:ring-offset-gray-800" href="#">
          Get started
          <svg class="flex-shrink-0 w-4 h-4" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </a>
        <button type="button" class="relative group p-2 ps-3 inline-flex items-center gap-x-2 text-sm font-mono rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
          $ npm i preline
          <span class="flex justify-center items-center bg-gray-200 rounded-md w-7 h-7 dark:bg-gray-700 dark:text-gray-400">
            <svg class="flex-shrink-0 w-4 h-4 group-hover:rotate-6 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/></svg>
          </span>
        </button>
      </div>
      <!-- End Buttons -->

      <div class="mt-5 flex justify-center items-center gap-x-1 sm:gap-x-3">
        <span class="text-sm text-gray-600 dark:text-gray-400">Package Manager:</span>
        <span class="text-sm font-bold text-gray-900 dark:text-white">npm</span>
        <svg class="h-5 w-5 text-gray-300 dark:text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"/>
        </svg>
        <a class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium" href="#">
          Installation Guide
          <svg class="flex-shrink-0 w-4 h-4" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-2">
      <!-- Icon Block -->
      <a class="group flex flex-col justify-center hover:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-slate-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
        <div class="flex justify-center items-center w-12 h-12 bg-blue-600 rounded-xl">
          <svg class="flex-shrink-0 w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="10" height="14" x="3" y="8" rx="2"/><path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4"/><path d="M8 18h.01"/></svg>
        </div>
        <div class="mt-5">
          <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">Responsive</h3>
          <p class="mt-1 text-gray-600 dark:text-gray-400">Responsive, and mobile-first project on the web</p>
          <span class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline font-medium">
            Learn more
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </span>
        </div>
      </a>
      <!-- End Icon Block -->

      <!-- Icon Block -->
      <a class="group flex flex-col justify-center hover:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-slate-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
        <div class="flex justify-center items-center w-12 h-12 bg-blue-600 rounded-xl">
          <svg class="flex-shrink-0 w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7h-9"/><path d="M14 17H5"/><circle cx="17" cy="17" r="3"/><circle cx="7" cy="7" r="3"/></svg>
        </div>
        <div class="mt-5">
          <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">Customizable</h3>
          <p class="mt-1 text-gray-600 dark:text-gray-400">Components are easily customized and extendable</p>
          <span class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline font-medium">
            Learn more
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </span>
        </div>
      </a>
      <!-- End Icon Block -->

      <!-- Icon Block -->
      <a class="group flex flex-col justify-center hover:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-slate-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
        <div class="flex justify-center items-center w-12 h-12 bg-blue-600 rounded-xl">
          <svg class="flex-shrink-0 w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
        </div>
        <div class="mt-5">
          <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">Documentation</h3>
          <p class="mt-1 text-gray-600 dark:text-gray-400">Every component and plugin is well documented</p>
          <span class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline font-medium">
            Learn more
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </span>
        </div>
      </a>
      <!-- End Icon Block -->

      <!-- Icon Block -->
      <a class="group flex flex-col justify-center hover:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-slate-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
        <div class="flex justify-center items-center w-12 h-12 bg-blue-600 rounded-xl">
          <svg class="flex-shrink-0 w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z"/><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/></svg>
        </div>
        <div class="mt-5">
          <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">24/7 Support</h3>
          <p class="mt-1 text-gray-600 dark:text-gray-400">Contact us 24 hours a day, 7 days a week</p>
          <span class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline font-medium">
            Learn more
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </span>
        </div>
      </a>
      <!-- End Icon Block -->
    </div>
  </div>
  <!-- End Icon Blocks -->
  <!-- Pricing -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
      <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Pricing</h2>
      <p class="mt-1 text-gray-600 dark:text-gray-400">Whatever your status, our offers evolve according to your needs.</p>
    </div>
    <!-- End Title -->

    <!-- Switch -->
    <div class="flex justify-center items-center">
      <label class="min-w-[3.5rem] text-sm text-gray-500 me-3 dark:text-gray-400">Monthly</label>

      <input type="checkbox" id="hs-basic-with-description" class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600

      before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-white" checked>

      <label class="relative min-w-[3.5rem] text-sm text-gray-500 ms-3 dark:text-gray-400">
        Annual
        <span class="absolute -top-10 start-auto -end-28">
          <span class="flex items-center">
            <svg class="w-14 h-8 -me-6" width="45" height="25" viewBox="0 0 45 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M43.2951 3.47877C43.8357 3.59191 44.3656 3.24541 44.4788 2.70484C44.5919 2.16427 44.2454 1.63433 43.7049 1.52119L43.2951 3.47877ZM4.63031 24.4936C4.90293 24.9739 5.51329 25.1423 5.99361 24.8697L13.8208 20.4272C14.3011 20.1546 14.4695 19.5443 14.1969 19.0639C13.9242 18.5836 13.3139 18.4152 12.8336 18.6879L5.87608 22.6367L1.92723 15.6792C1.65462 15.1989 1.04426 15.0305 0.563943 15.3031C0.0836291 15.5757 -0.0847477 16.1861 0.187863 16.6664L4.63031 24.4936ZM43.7049 1.52119C32.7389 -0.77401 23.9595 0.99522 17.3905 5.28788C10.8356 9.57127 6.58742 16.2977 4.53601 23.7341L6.46399 24.2659C8.41258 17.2023 12.4144 10.9287 18.4845 6.96211C24.5405 3.00476 32.7611 1.27399 43.2951 3.47877L43.7049 1.52119Z" fill="currentColor" class="fill-gray-300 dark:fill-gray-700"/>
            </svg>
            <span class="mt-3 inline-block whitespace-nowrap text-[11px] leading-5 font-semibold tracking-wide uppercase bg-blue-600 text-white rounded-full py-1 px-2.5">Save up to 10%</span>
          </span>
        </span>
      </label>
    </div>
    <!-- End Switch -->

    <!-- Grid -->
    <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:items-center">
      <!-- Card -->
      <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-gray-700">
        <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Free</h4>
        <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-gray-200">Free</span>
        <p class="mt-2 text-sm text-gray-500">Forever free</p>

        <ul class="mt-7 space-y-2.5 text-sm">
          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              1 user
            </span>
          </li>

          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              Plan features
            </span>
          </li>

          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              Product support
            </span>
          </li>
        </ul>

        <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-blue-900 dark:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
          Sign up
        </a>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8 dark:border-blue-700">
        <p class="mb-3"><span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-blue-100 text-blue-800 dark:bg-blue-600 dark:text-white">Most popular</span></p>
        <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Startup</h4>
        <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-gray-200">
          <span class="font-bold text-2xl -me-2">$</span>
          39
        </span>
        <p class="mt-2 text-sm text-gray-500">All the basics for starting a new business</p>

        <ul class="mt-7 space-y-2.5 text-sm">
          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              2 users
            </span>
          </li>

          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              Plan features
            </span>
          </li>

          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              Product support
            </span>
          </li>
        </ul>

        <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://github.com/htmlstreamofficial/preline/tree/main/examples/html">
          Sign up
        </a>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-gray-700">
        <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Team</h4>
        <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-gray-200">
          <span class="font-bold text-2xl -me-2">$</span>
          89
        </span>
        <p class="mt-2 text-sm text-gray-500">Everything you need for a growing business</p>

        <ul class="mt-7 space-y-2.5 text-sm">
          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              5 users
            </span>
          </li>

          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              Plan features
            </span>
          </li>

          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              Product support
            </span>
          </li>
        </ul>

        <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-blue-900 dark:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
          Sign up
        </a>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-gray-700">
        <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Enterprise</h4>
        <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-gray-200">
          <span class="font-bold text-2xl -me-2">$</span>
          149
        </span>
        <p class="mt-2 text-sm text-gray-500">Advanced features for scaling your business</p>

        <ul class="mt-7 space-y-2.5 text-sm">
          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              10 users
            </span>
          </li>

          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              Plan features
            </span>
          </li>

          <li class="flex space-x-2">
            <svg class="flex-shrink-0 mt-0.5 h-4 w-4 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span class="text-gray-800 dark:text-gray-400">
              Product support
            </span>
          </li>
        </ul>

        <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-blue-900 dark:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
          Sign up
        </a>
      </div>
      <!-- End Card -->
    </div>
    <!-- End Grid -->

    <!-- Comparison table -->
    <div class="mt-20 lg:mt-32">
      <div class="lg:text-center mb-10 lg:mb-20">
        <h3 class="text-2xl font-semibold dark:text-white">Compare plans</h3>
      </div>

      <!-- xs to lg -->
      <div class="space-y-24 lg:hidden">
        <section>
          <div class="px-4 mb-4">
            <h2 class="text-lg leading-6 font-medium text-gray-800">Free</h2>
          </div>
          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              Financial data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Open/High/Low/Close</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Price-volume difference indicator</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              On-chain data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Network growth</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Average token age consumed</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Exchange flow</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total ERC20 exchange funds flow</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Transaction volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total circulation (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Velocity of tokens (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">ETH gas used</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              Social data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Dev activity</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Topic search</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Relative social dominance</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total social volume</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>
        </section>

        <section>
          <div class="px-4 mb-4">
            <h2 class="text-lg leading-6 font-medium text-gray-800">Startup</h2>
          </div>
          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              Financial data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Open/High/Low/Close</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Price-volume difference indicator</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              On-chain data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Network growth</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Average token age consumed</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Exchange flow</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total ERC20 exchange funds flow</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Transaction volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total circulation (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Velocity of tokens (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">ETH gas used</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              Social data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Dev activity</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Topic search</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Relative social dominance</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total social volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>
        </section>

        <section>
          <div class="px-4 mb-4">
            <h2 class="text-lg leading-6 font-medium text-gray-800">Team</h2>
          </div>
          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              Financial data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Open/High/Low/Close</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Price-volume difference indicator</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              On-chain data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Network growth</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Average token age consumed</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Exchange flow</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total ERC20 exchange funds flow</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Transaction volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total circulation (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Velocity of tokens (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">ETH gas used</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              Social data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Dev activity</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Topic search</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Relative social dominance</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total social volume</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>
        </section>

        <section>
          <div class="px-4 mb-4">
            <h2 class="text-lg leading-6 font-medium text-gray-800">Enterprise</h2>
          </div>
          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              Financial data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Open/High/Low/Close</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Price-volume difference indicator</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              On-chain data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Network growth</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Average token age consumed</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Exchange flow</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total ERC20 exchange funds flow</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Transaction volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total circulation (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Velocity of tokens (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">ETH gas used</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-gray-700 dark:border-gray-700 dark:text-white">
              Social data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Dev activity</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Topic search</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Relative social dominance</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-gray-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total social volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="flex-shrink-0 ms-auto h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>
        </section>
      </div>
      <!-- End xs to lg -->

      <!-- lg+ -->
      <div class="hidden lg:block">
        <table class="w-full h-px">
          <caption class="sr-only">
            Pricing plan comparison
          </caption>
          <thead class="sticky top-0 inset-x-0 bg-white dark:bg-slate-900">
            <tr>
              <th class="py-4 ps-6 pe-6 text-sm font-medium text-gray-800 text-start" scope="col">
                <span class="sr-only">Feature by</span>
                <span class="dark:text-white">Plans</span>
              </th>

              <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white" scope="col">Free</th>
              <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white" scope="col">Startup</th>
              <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white" scope="col">Team</th>
              <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white" scope="col">Enterprise</th>
            </tr>
          </thead>
          <tbody class="border-t border-gray-200 divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
            <tr>
              <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-slate-800 dark:text-white" colspan="5" scope="colgroup">Financial data</th>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Open/High/Low/Close</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Price-volume difference indicator</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-slate-800 dark:text-white" colspan="5" scope="colgroup">On-chain data</th>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Network growth</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Average token age consumed</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Exchange flow</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total ERC20 exchange funds flow</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Transaction volume</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Total circulation (beta)</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Velocity of tokens (beta)</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">ETH gas used</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-slate-800 dark:text-white" colspan="5" scope="colgroup">Social data</th>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Dev activity</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Topic search</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Relative social dominance</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Minus -->
                <!-- Minus -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Minus -->
                <!-- Minus -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-gray-400" scope="row">Relative social dominance</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto flex-shrink-0 h-5 w-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- End lg+ -->
    </div>
    <!-- End Comparison table -->
  </div>
  <!-- End Pricing -->


  <footer class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <!-- Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 mb-10">
      <div class="col-span-full hidden lg:col-span-1 lg:block">
        <a class="flex-none text-xl font-semibold dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#" aria-label="Brand">Brand</a>
        <p class="mt-3 text-xs sm:text-sm text-gray-600 dark:text-gray-400">© 2022 Preline.</p>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-gray-100">Product</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Pricing</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Changelog</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Docs</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Download</a></p>
        </div>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-gray-100">Company</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">About us</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Blog</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Careers</a> <span class="inline text-blue-600 dark:text-blue-500">— We're hiring</span></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Customers</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Newsroom</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Sitemap</a></p>
        </div>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-gray-100">Resources</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Community</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Help & Support</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">eBook</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">What's New</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Status</a></p>
        </div>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-gray-100">Developers</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Api</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Status</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">GitHub</a> <span class="inline text-blue-600 dark:text-blue-500">— New</span></p>
        </div>

        <h4 class="mt-7 text-xs font-semibold text-gray-900 uppercase dark:text-gray-100">Industries</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Financial Services</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Education</a></p>
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->

    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
      <div class="sm:flex sm:justify-between sm:items-center">
        <div class="flex items-center gap-x-3">
          <!-- Language Dropdown -->
          <div class="hs-dropdown relative inline-flex [--placement:top-left]">
            <button id="footer-language-dropdown" type="button" class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
              <svg class="w-3 h-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us1" viewBox="0 0 512 512">
                <g fill-rule="evenodd">
                  <g stroke-width="1pt">
                    <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                    <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                  </g>
                  <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/>
                  <path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/>
                </g>
              </svg>
              English (US)
              <svg class="hs-dropdown-open:rotate-180 flex-shrink-0 w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </button>

            <div class="hs-dropdown-menu w-40 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700" aria-labelledby="footer-language-dropdown">
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                <svg class="flex-shrink-0 w-3.5 h-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                  <g fill-rule="evenodd">
                    <g stroke-width="1pt">
                      <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                      <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                    </g>
                    <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/>
                    <path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/>
                  </g>
                </svg>
                English (US)
              </a>
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                <svg class="w-3 h-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                  <path fill="#ffce00" d="M0 341.3h512V512H0z"/>
                  <path d="M0 0h512v170.7H0z"/>
                  <path fill="#d00" d="M0 170.7h512v170.6H0z"/>
                </svg>
                Deutsch
              </a>
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                <svg class="w-3 h-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-dk" viewBox="0 0 512 512">
                  <path fill="#c8102e" d="M0 0h512.1v512H0z"/>
                  <path fill="#fff" d="M144 0h73.1v512H144z"/>
                  <path fill="#fff" d="M0 219.4h512.1v73.2H0z"/>
                </svg>
                Dansk
              </a>
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                <svg class="w-3 h-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
                  <g fill-rule="evenodd" stroke-width="1pt">
                    <path fill="#fff" d="M0 0h512v512H0z"/>
                    <path fill="#009246" d="M0 0h170.7v512H0z"/>
                    <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/>
                  </g>
                </svg>
                Italiano
              </a>
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                <svg class="w-3 h-3 rounded-full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
                  <defs>
                    <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/>
                  </defs>
                  <path fill="#de2910" d="M0 0h512v512H0z"/>
                  <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/>
                  <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/>
                  <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/>
                  <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/>
                  <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/>
                </svg>
                中文 (繁體)
              </a>
            </div>
          </div>
          <!-- End Language Dropdown -->

          <div class="space-x-4 text-sm ms-4">
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Terms</a>
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Privacy</a>
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">Status</a>
          </div>
        </div>

        <div class="flex justify-between items-center">
          <div class="mt-3 sm:hidden">
            <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">Brand</a>
            <p class="mt-1 text-xs sm:text-sm text-gray-600 dark:text-gray-400">© 2022 Preline.</p>
          </div>

          <!-- Social Brands -->
          <div class="space-x-4">
            <a class="inline-block text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#">
              <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg>
            </a>
            <a class="inline-block text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#">
              <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
              </svg>
            </a>
            <a class="inline-block text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#">
              <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
              </svg>
            </a>
          </div>
          <!-- End Social Brands -->
        </div>
        <!-- End Col -->
      </div>
    </div>
  </footer>

    <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>
