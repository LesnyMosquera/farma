<!-- Main navigation container -->
<nav
  class="relative flex flex-wrap items-center justify-between w-full py-2 bg-blue-500 shadow-lg text-neutral-200 lg:flex-wrap lg:justify-start lg:py-4"data-te-navbar-ref>
  <div class="flex flex-wrap items-center justify-between w-full px-3">
    <!-- Hamburger button for mobile view -->
    <button
      class="block px-2 bg-transparent border-0 text-neutral-200 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
      type="button"
      data-te-collapse-init
      data-te-target="#navbarSupportedContent4"
      aria-controls="navbarSupportedContent4"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <!-- Hamburger icon -->
      <span class="[&>svg]:w-7">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="h-7 w-7">
          <path
            fill-rule="evenodd"
            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>

    <!-- Collapsible navigation container -->
    <div
      class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
      id="navbarSupportedContent4"
      data-te-collapse-item>
      <!-- Navbar title -->
      <a class="pr-2 text-xl font-semibold text-white" href="#">Droguería Santa cecilia</a>
      <!-- Left navigation links -->
      <ul
        class="flex flex-col pl-0 mr-auto list-style-none lg:flex-row"
        data-te-navbar-nav-ref>
        <!-- Dashboard link -->
        <li class="my-4 lg:my-0 lg:pr-2" data-te-nav-item-ref>
          <a
            class="text-white disabled:text-black/30 lg:px-2 [&.active]:text-black/90"
            href="#"
            data-te-nav-link-ref
            >Dashboard</a
          >
        </li>
        <!-- Team link -->
        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
          <a
            class="p-0 text-white opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90"
            href="#"
            data-te-nav-link-ref
            >Team</a
          >
        </li>
        <!-- Projects link -->
        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
          <a
            class="p-0 text-white opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90"
            href="#"
            data-te-nav-link-ref
            >Projects</a
          >
        </li>
      </ul>
    </div>

    <!-- Right elements -->
    <div class="relative flex items-center">
      <!-- Cart Icon -->
      <a
        class="mr-4 text-white opacity-60 hover:opacity-80 focus:opacity-80"
        href="#">
        <span class="[&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="w-5 h-5">
            <path
              d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
          </svg>
        </span>
      </a>

      <!-- Container with two dropdown menus -->
      <div class="relative" data-te-dropdown-ref>
        <!-- First dropdown trigger -->
        <a
          class="flex items-center mr-4 text-white hidden-arrow opacity-60 hover:opacity-80 focus:opacity-80"
          href="#"
          id="dropdownMenuButton1"
          role="button"
          data-te-dropdown-toggle-ref
          aria-expanded="false">
          <!-- Dropdown trigger icon -->
          <span class="[&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="w-5 h-5">
              <path
                fill-rule="evenodd"
                d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                clip-rule="evenodd" />
            </svg>
          </span>
          <!-- Notification counter -->
          <span
            class="absolute -mt-2.5 ml-2 rounded-full bg-red-700 px-1.5 py-0 text-xs text-white"
            >1</span
          >
        </a>
        <!-- First dropdown menu -->
        <ul
          class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
          aria-labelledby="dropdownMenuButton1"
          data-te-dropdown-menu-ref>
          <!-- First dropdown menu items -->
          <li>
            <a
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
              href="#"
              data-te-dropdown-item-ref
              >Action</a
            >
          </li>
          <li>
            <a
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
              href="#"
              data-te-dropdown-item-ref
              >Another action</a
            >
          </li>
          <li>
            <a
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
              href="#"
              data-te-dropdown-item-ref
              >Something else here</a
            >
          </li>
        </ul>
      </div>

      <!-- Second dropdown container -->
      <div class="relative" data-te-dropdown-ref>
        <!-- Second dropdown trigger -->
        <a
          class="flex items-center transition duration-150 ease-in-out hidden-arrow whitespace-nowrap motion-reduce:transition-none"
          href="#"
          id="dropdownMenuButton2"
          role="button"
          data-te-dropdown-toggle-ref
          aria-expanded="false">
          <!-- User avatar -->
          <img
            src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg"
            class="rounded-full"
            style="height: 25px; width: 25px"
            alt=""
            loading="lazy" />
        </a>
        <!-- Second dropdown menu -->
        <ul
          class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
          aria-labelledby="dropdownMenuButton2"
          data-te-dropdown-menu-ref>
          <!-- Second dropdown menu items -->
          <li>
            <a
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
              href="#"
              data-te-dropdown-item-ref
              >Action</a
            >
          </li>
          <li>
            <a
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
              href="#"
              data-te-dropdown-item-ref
              >Another action</a
            >
          </li>
          <li>
            <a
              class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
              href="#"
              data-te-dropdown-item-ref
              >Something else here</a
            >
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
</nav>