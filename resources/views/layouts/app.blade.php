<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="{{ asset("design/style.css") }}" />
    <script src="{{ asset("design/app.js") }}"></script>
    <title>Nukam Sports</title>
  </head>

  <body class="w-[100%] flex flex-col xl:flex-row items-center bg-[#002EBA]">
    <nav class="sticky top-0 z-50 glass bg-[#002EBA] w-full xl:hidden">
      <div
        class="max-w-screen-xl mx-auto px-5 xl:px-10 py-2.5 flex justify-between items-center text-white"
      >
        <div class="flex items-center">
          <img src="images/logo_nukam.png" class="h-10 xl:h-14" />
        </div>

        <div class="switch xl:hidden z-30">
          <input type="checkbox" id="checkbox" />
          <label for="checkbox" class="toggle">
            <div class="bars" id="bar1"></div>
            <div class="bars" id="bar2"></div>
            <div class="bars" id="bar3"></div>
          </label>
        </div>

        <ul
          id="mobile_menu"
          class="hidden xl:hidden bg-[#002EBA] bbg-opacity-95 h-screen w-full grid place-content-center gap-4 text-center text-sm xl:text-md z-[20] fixed top-0 right-0 rounded-tl-lg"
        >
          <li class="w-full">
            <a class="block p-5" href="">Home</a>
          </li>
          <li>
            <a class="block p-5" href="">About</a>
          </li>
          <li>
            <a class="block p-5" href=""> Academy </a>
          </li>
          <li>
            <a class="block p-5" href="">Events</a>
          </li>
          <li>
            <a class="block p-5" href="">Gallery</a>
          </li>
          <li>
            <a class="block p-5" href="">Contact us</a>
          </li>
        </ul>
      </div>
    </nav>

    <nav
      class="w-0 xl:w-[15%] h-screen text-white hidden xl:flex flex-col justify-between items-center py-10 px-5 fixed top-0"
    >
      <div class="flex flex-col items-center h-[100%]">
        <a href="/" class="cursor-pointer h-[20%]">
          <img
            class="w-full h-16 object-contain object-center"
            loading="lazy"
            src="{{ asset("design/images/logo_nukam.png") }}"
            alt="logo_nukam"
          />
        </a>



     
         
        @if($user->userType == App\Models\User::$isAdmin) 
        <div class="h-[80%] flex flex-col gap-3">
            <div
              class="flex items-center justify-start px-4 font-semibold py-2.5 w-full side_nav"
            >
              <i class="bi bi-list-ul mx-2 text-md font-extrabold"></i>
              <span class="truncate text-sm font-medium">Menu</span>
            </div>
            <div
              class="flex items-center justify-start px-4 font-semibold py-2.5 w-full side_nav"
            >
              <i class="bi bi-list-ul mx-2 text-md font-extrabold"></i>
              <span class="truncate text-sm font-medium">Manage Talents</span>
            </div>
            <div
              class="flex items-center justify-start px-4 font-semibold py-2.5 w-full side_nav"
            >
              <i class="bi bi-list-ul mx-2 text-md font-extrabold"></i>
              <span class="truncate text-sm font-medium">Approved Talents</span>
            </div>
       @else
       <div class="h-[80%] flex flex-col gap-3">
        <div
          class="flex items-center justify-start px-4 font-semibold py-2.5 w-full side_nav"
        >
          <i class="bi bi-list-ul mx-2 text-md font-extrabold"></i>
          <span class="truncate text-sm font-medium">Menu</span>
        </div>

        <div
          class="flex items-center justify-start px-4 font-semibold py-2.5 w-full side_nav"
        >
          <i class="bi bi-list-ul mx-2 text-md font-extrabold"></i>
          <span class="truncate text-sm font-medium">Application Status</span>
        </div>

        <div
        class="flex items-center justify-start px-4 font-semibold py-2.5 w-full side_nav"
      >
        <i class="bi bi-list-ul mx-2 text-md font-extrabold"></i>
        <span class="truncate text-sm font-medium">Update Application</span>
      </div>
     
       
       @endif



          <div class="flex items-center justify-center">
            <img
              class="p-3 w-50 h-60 object-contain object-center"
              src="{{ asset("design/images/dash_img.png") }}"
              alt="dash_img"
            />
          </div>

          <div
            class="flex items-center justify-start px-4 font-semibold py-2.5 w-full side_nav_logout"
          >
            <i class="bi bi-box-arrow-right mx-2 text-md font-extrabold"></i>
            <span class="truncate text-sm font-medium">Logout</span>
          </div>
        </div>
      </div>

      <label class="ui-switch hidden">
        <input type="checkbox" />
        <div class="slider">
          <div class="circle"></div>
        </div>
      </label>
    </nav>

    <main
      class="w-full xl:w-[85%] ms-0 xl:ms-[15%] mmin-h-screen py-10 px-2 md:px-5 xl:px-10 flex flex-col gap-10 bg-gray-50"
    >
      

      <div
        class="flex flex-col-reverse xl:flex-row items-center justify-between gap-4"
      >
        <form class="group w-full">
          <svg
            viewBox="0 0 24 24"
            aria-hidden="true"
            class="search_icon cursor-pointer"
          >
            <g>
              <path
                d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"
              ></path>
            </g>
          </svg>
          <input
            class="input box_shawdow text-sm placeholder:text-sm placeholder:lg:text-base"
            type="search"
            placeholder="Search here..."
          />
        </form>

        <div class="flex flex-col xl:flex-row items-center gap-2">
          <div class="relative">
            @if ($user->image != null)
            <img
            class="h-10 w-10 xxl:w-16 xxl:h-16 rounded-full"
            src="<?php $user->image ?>"
            alt="img_profile"
         />
            @else
            <img
            class="h-10 w-10 xxl:w-16 xxl:h-16 rounded-full"
            src="https://images.unsplash.com/photo-1633419798503-0b0c628f267c?q=80&w=2000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="img_profile"
         />
            @endif
          
            <span
              class="top-0 left-7 xxl:left-12 absolute w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"
            ></span>
          </div>
          <span class="capitalize text-sm xl:text-md font-medium text-gray-900">
            welcome, {{ $user->name }}
          </span>
        </div>
      </div>

      @yield("content")
      {{-- <section class="bg-white shadow-lg rounded-xl w-full py-10 px-5 xl:px-10">
        <h4 class="mb-2 text-2xl font-bold">Board</h4>

        <div class="overflow-x-auto">
          <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3">S/N</th>
                <th scope="col" class="px-6 py-3 sticky left-0 bg-gray-50">
                  USERNAME
                </th>
                <th scope="col" class="px-6 py-3">FULL NAMES</th>
                <th scope="col" class="px-6 py-3">PHONE NUMBER</th>
                <th scope="col" class="px-6 py-3">STATUS</th>
                <th scope="col" class="px-6 py-3">ACTION</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </section>

      <section
        class="bg-white shadow-lg rounded-xl flex flex-col py-10 px-5 xl:px-10"
      >
        <h1 class="mb-2 text-2xl font-bold">{{ $user->name }}</h1>
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-10 items-start">
          <div class="aspect-video">
            <!-- Replace 'VIDEO_ID' with the actual ID of the YouTube video -->
            <iframe
              class="w-full h-full"
              src="https://www.youtube.com/embed/TBArvE-1gAk"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
          <div class="flex flex-col gap-4">
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900"
                >Full Name</label
              >
              <input
                type="text"
                id="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                value="John Doe"
                required
              />
            </div>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900"
                >Email</label
              >
              <input
                type="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                value="johndoe@email.com"
                required
              />
            </div>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900"
                >Phone Number</label
              >
              <input
                type="text"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                value="+234 80 6771 2931"
                required
              />
            </div>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900"
                >Location</label
              >
              <input
                type="text"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                value="Lagos, Nigeria"
                required
              />
            </div>
            <div>
              <label
                for="message"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Short Bio</label
              >
              <textarea
                id="message"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Leave a comment..."
              ></textarea>
            </div>
            <div class="mt-10 flex items-center self-center gap-10">
              <button
                type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
              >
                Confirm Payment
              </button>
              <button
                type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
              >
                Approve Order
              </button>
            </div>
          </div>
        </div>
      </section>

      <section
        class="bg-white shadow-lg rounded-xl w-full flex flex-col gap-8 py-10 px-5 xl:px-10"
      >
        <h1 class="mb-2 text-2xl font-bold">Approved Talents</h1>
        <div class="overflow-x-auto">
          <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3">S/N</th>
                <th scope="col" class="px-6 py-3 sticky left-0 z-10 bg-gray-50">
                  USERNAME
                </th>
                <th scope="col" class="px-6 py-3">FULL NAMES</th>
                <th scope="col" class="px-6 py-3">PHONE NUMBER</th>
                <th scope="col" class="px-6 py-3">STATUS</th>
                <th scope="col" class="px-6 py-3">ACTION</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-white border-b">
                <th
                  scope="row"
                  class="font-medium text-gray-900 whitespace-nowrap px-6 py-4"
                >
                  1
                </th>
                <td class="px-6 py-4 bg-white sticky left-0 z-10">
                  Apple MacBook Pro 17"
                </td>
                <td class="px-6 py-4">John Doe</td>
                <td class="px-6 py-4">08067712931</td>
                <td class="px-6 py-4">
                  <div class="flex items-center">
                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                    Offline
                  </div>
                </td>
                <td class="px-6 py-4">
                  <button
                    type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
                  >
                    Add Now
                  </button>
                </td>
              </tr>
              <tr class="bg-white border-b">
                <th
                  scope="row"
                  class="font-medium text-gray-900 whitespace-nowrap px-6 py-4"
                >
                  2
                </th>
                <td class="px-6 py-4 bg-white sticky left-0 z-10">
                  Apple MacBook Pro 17"
                </td>
                <td class="px-6 py-4">John Doe</td>
                <td class="px-6 py-4">08067712931</td>
                <td class="px-6 py-4">
                  <div class="flex items-center">
                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                    Offline
                  </div>
                </td>
                <td class="px-6 py-4">
                  <button
                    type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    Remove
                  </button>
                </td>
              </tr>
              <tr class="bg-white border-b">
                <th
                  scope="row"
                  class="font-medium text-gray-900 whitespace-nowrap px-6 py-4"
                >
                  3
                </th>
                <td class="px-6 py-4 bg-white sticky left-0 z-10">
                  Apple MacBook Pro 17"
                </td>
                <td class="px-6 py-4">John Doe</td>
                <td class="px-6 py-4">08067712931</td>
                <td class="px-6 py-4">
                  <div class="flex items-center">
                    <div
                      class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"
                    ></div>
                    Online
                  </div>
                </td>
                <td class="px-6 py-4">
                  <button
                    type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
                  >
                    Add Now
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section
        class="bg-white shadow-lg rounded-xl w-full flex flex-col gap-8 py-10 px-5 xl:px-10"
      >
        <h1 class="mb-2 text-2xl font-bold">Programs</h1>

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-10 items-center">
          <div class="block relative flex flex-col self-start">
            <label
              for="message"
              class="block mb-2 text-sm font-medium text-gray-900"
              >Program Images/video</label
            >
            <label class="custum-file-upload" for="file">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill=""
                  viewBox="0 0 24 24"
                >
                  <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                  <g
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    id="SVGRepo_tracerCarrier"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      fill=""
                      d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                    ></path>
                  </g>
                </svg>
              </div>
              <div class="text">
                <span>Click to upload Images/videos</span>
              </div>
              <input type="file" id="file" />
            </label>
          </div>

          <div class="flex flex-col gap-4">
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900"
                >Program Title</label
              >
              <input
                type="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Title here"
                required
              />
            </div>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900"
                >Program Date</label
              >
              <input
                type="date"
                id="date"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required
              />
            </div>
            <div>
              <label
                for="message"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Short Bio</label
              >
              <textarea
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Leave a comment..."
              ></textarea>
            </div>
            <div>
              <label
                for="countries"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Program Category</label
              >
              <select
                id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option>United States</option>
                <option>Canada</option>
                <option>France</option>
                <option>Germany</option>
              </select>
            </div>

            <button
              type="submit"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-10"
            >
              Save
            </button>
          </div>
        </div>
      </section> --}}


    </main>
  </body>
</html>

