<!-- Off-canvas menu for mobile -->
<div class="lg:hidden">
  <div class="fixed inset-0 flex z-40">
    <div class="fixed inset-0">
      <div class="absolute inset-0 bg-cool-gray-600 opacity-75"></div>
    </div>
    <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-pine-600">
      <div class="absolute top-0 right-0 -mr-14 p-1">
        <button
          class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-cool-gray-600"
          aria-label="Close sidebar">
          <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex-shrink-0 flex items-center px-4">
        <img class="h-8 w-auto" src="{{ asset('img/mddlogo.png') }}" alt="Easywire logo">
      </div>
      <div class="mt-5 overflow-y-auto">
        <nav class="px-2 space-y-1">
          <a href="/home"
            class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-pine-700 focus:outline-none focus:bg-pine-500 transition ease-in-out duration-150">
            <!-- Heroicon name: home -->
            <svg class="mr-4 h-6 w-6 text-pine-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Home
          </a>

          <a href="/history"
            class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-pine-100 hover:text-white hover:bg-pine-500 focus:outline-none focus:bg-pine-500 transition ease-in-out duration-150">
            <!-- Heroicon name: clock -->
            <svg class="mr-4 h-6 w-6 text-pine-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            History
          </a>

          <a href="#"
            class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-pine-100 hover:text-white hover:bg-pine-500 focus:outline-none focus:bg-pine-500 transition ease-in-out duration-150">
            <!-- Heroicon name: document-report -->
            <svg class="mr-4 h-6 w-6 text-pine-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Metrics
          </a>
        </nav>
      </div>
      <div class="mt-6 flex-1 h-0 overflow-y-auto">
        <nav class="px-2 space-y-1">
          <a href="#"
            class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-pine-100 hover:text-white hover:bg-pine-500 focus:outline-none focus:bg-pine-500 transition ease-in-out duration-150">
            <!-- Heroicon name: cog -->
            <svg
              class="mr-4 h-6 w-6 text-pine-200 group-hover:text-pine-200 group-focus:text-pine-200 transition ease-in-out duration-150"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Customize
          </a>

          <a href="#"
            class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-pine-100 hover:text-white hover:bg-pine-500 focus:outline-none focus:bg-pine-500 transition ease-in-out duration-150">
            <!-- Heroicon name: question-mark-circle -->
            <svg
              class="mr-4 h-6 w-6 text-pine-300 group-hover:text-pine-200 group-focus:text-pine-200 transition ease-in-out duration-150"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Help
          </a>

          <a href="#"
            class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-pine-100 hover:text-white hover:bg-pine-500 focus:outline-none focus:bg-pine-500 transition ease-in-out duration-150">
            <!-- Heroicon name: shield-check -->
            <svg
              class="mr-4 h-6 w-6 text-pine-300 group-hover:text-pine-200 group-focus:text-pine-200 transition ease-in-out duration-150"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
            Privacy
          </a>
        </nav>
      </div>
    </div>
    <div class="flex-shrink-0 w-14">
      <!-- Dummy element to force sidebar to shrink to fit close icon -->
    </div>
  </div>
</div>