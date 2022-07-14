<!-- Sidebar -->
<aside
                class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-primary-darker dark:bg-darker md:block">
                <div class="flex flex-col h-full">
                    <!-- Sidebar links -->
                    <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
                        <!-- Dashboards links -->
                        <div x-data="{ isActive: false, open: false}">
                            <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                                :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm"> Dashboards </span>
                                <span class="ml-auto" aria-hidden="true">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="{{route('admin.home')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                                    Home
                                </a>
                                <a href="{{route('admin.userinsert')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Add  newspaper profile
                                </a>
                                <a href="{{route('Admin.stories')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Wedding stories
                                </a>
                            </div>
                        </div>

                        <!-- Components links -->
                        <div x-data="{ isActive: false, open: false }">
                            <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                                :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm"> modals </span>
                                <span aria-hidden="true" class="ml-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="{{route('admin.casteindex')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                    Castes
                                </a>
                                <a href="{{route('admin.religionindex')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                  Religions
                                </a>
                                <a href="{{route('admin.Mothertongueindex')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    Mother Tongue
                                </a>
                                <a href="{{route('admin.Occupationindex')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    Occupation
                                </a>

                                <a href="{{route('admin.Countryindex')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    Countries
                                </a>
                                <a href="{{route('admin.Stateindex')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    States
                                </a>
                                <a href="#" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    Cities
                                </a>
                                <a href="{{route('admin.Educationindex')}}" role="menuitem"
                                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Education
                            </a>
                            </div>
                        </div>

                        <!-- Pages links -->


                        <!-- Authentication links -->
                        <div x-data="{ isActive: false, open: false}">
                            <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                                :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm"> Authentication </span>
                                <span aria-hidden="true" class="ml-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="{{route('admin.index')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                  Admins
                                </a>
                                <a href="{{route('admin.userIndex')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    Users
                                </a>




                            </div>
                        </div>
                        <!---Blog links-->
                        <div x-data="{ isActive: false, open: false}">
                            <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                                :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                                      </svg>
                                </span>
                                <span class="ml-2 text-sm"> Blogs </span>
                                <span aria-hidden="true" class="ml-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="{{route('Blog.create.view')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Create Blog
                                </a>
                                <a href="{{route('Blog.index')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                   Blog Index
                                </a>




                            </div>
                        </div>

                        <!-- Enquiry links -->
                        <div x-data="{ isActive: false, open: false}">
                            <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                                :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                      </svg>
                                </span>
                                <span class="ml-2 text-sm"> Enquiries </span>
                                <span aria-hidden="true" class="ml-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->

                                <a href="{{route('EnquiryMail.index')}}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                   Enquiries
                                </a>




                            </div>
                        </div>

                    </nav>

                    <!-- Sidebar footer -->
                    <div class="flex-shrink-0 px-2 py-4 space-y-2">
                        <button @click="openSettingsPanel" type="button"
                            class="flex items-center justify-center w-full px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark">
                            <span aria-hidden="true">
                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </span>
                            <span>Customize</span>
                        </button>
                    </div>
                </div>
            </aside>


            <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">
