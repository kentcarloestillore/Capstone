<div class="w-fit h-screen flex mx-auto bg-white shadow-lg">
    <section class="text-white w-64 flex-shrink-0 flex flex-col h-full" style="background-color: #183F54;">
        <div id="brand" class="flex items-center justify-center text-xl font-medium min-h-16 px-6">
            <img src="{{ asset('images/logo.jpg') }}" alt="logo" class="h-10 inline-block mr-2 rounded-full"> Church Connect
        </div>
        <hr>
        <nav id="main-nav" class="flex flex-col overflow-auto">

            <div class="flex align-middle w-full text-lg">
                <a href="/dashboard" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/dashboard.svg') }}" alt="dashboard" class="h-10 inline-block mr-2 rounded-full">{{ __('Dashboard') }}
                </a>
            </div>

            {{-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link> --}}

            <!-- Register Dropdown Trigger -->
            <div class="text-lg">
                <div class="py-3 px-6 hover:bg-blue-600 cursor-pointer w-full" onclick="toggleDropdownRegister()">
                    <img src="{{ asset('icons/register.svg') }}" alt="register" class="h-10 inline-block mr-2 rounded-full">Register
                </div>
            </div>

            <!-- Register Dropdown Content -->
            <div id="registerdropdownContent" class="flex flex-col bg-gray-500 rounded-lg left-0 mt-2 z-10 hidden mx-2">
                <a href="/register/baptismal/create" class="hover:bg-blue-500 p-2">Baptismal</a>
                <a href="/register/confirmation/create" class="hover:bg-blue-500 p-2">Confirmation</a>
                <a href="/register/marriage/create" class="hover:bg-blue-500 p-2">Marriage</a>
                <a href="/register/death/create" class="hover:bg-blue-500 p-2">Death</a>
            </div>

            <!-- Retrieve Dropdown Trigger -->
            <div class="text-lg">
                <div class="py-3 px-6  hover:bg-blue-600 cursor-pointer" onclick="toggleDropdownRetrieve()">
                    <img src="{{ asset('icons/retrieve.svg') }}" alt="retrieve" class="h-10 inline-block mr-2 rounded-full">Retrieve
                </div>

            </div>

            <!-- Retrieve Dropdown Content -->
            <div id="retrievedropdownContent" class="flex flex-col bg-gray-500 rounded-lg left-0 mt-2 z-10 hidden mx-2">
                <a href="/retrieve/baptismals" class="hover:bg-blue-500 p-2">Baptismal</a>
                <a href="/retrieve/confirmations" class="hover:bg-blue-500 p-2">Confirmation</a>
                <a href="/retrieve/marriages" class="hover:bg-blue-500 p-2">Marriage</a>
                <a href="/retrieve/deaths" class="hover:bg-blue-500 p-2">Death</a>
            </div>

            <div class="flex align-middle w-full text-lg">
                <a href="/donations" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/donation.svg') }}" alt="donations" class="h-10 inline-block mr-2 rounded-full">Donations
                </a>
            </div>
            <div class="flex align-middle w-full text-lg">
                <a href="/pss" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/pss.svg') }}" alt="PSS" class="h-10 inline-block mr-2 rounded-full">PSS
                </a>
            </div>
            <div class="flex align-middle w-full text-lg">
                <a href="/receipts" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/receipts.svg') }}" alt="receipts" class="h-10 inline-block mr-2 rounded-full">Receipts
                </a>
            </div>
            <div class="flex align-middle w-full text-lg">
                <a href="/schedules" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/schedule.svg') }}" alt="schedule" class="h-10 inline-block mr-2 rounded-full">Schedule
                </a>

            </div>
            <div class="flex align-middle w-full text-lg">
                <a href="/earnings" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/earning.svg') }}" alt="earning" class="h-10 inline-block mr-2 rounded-full">Earning
                </a>
            </div>
            <div class="flex align-middle w-full text-lg">
                <a href="/pamisa" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/pamisa.svg') }}" alt="pamisa" class="h-10 inline-block mr-2 rounded-full">Pamisa
                </a>
            </div>

            {{-- Parish Admin --}}
            @can('view_routes_admin')

                <div class="mt-2 w-full flex flex-col items-center">
                    <hr class="w-[90%] border-gray-400">
                    <label class="text-gray-400 font-bold">Admin</label>
                </div>

                <div class="flex align-middle w-full text-lg">
                    <a href="/users" class="py-3 px-6 hover:bg-blue-600 w-full">
                        <img src="{{ asset('icons/user.svg') }}" alt="pamisa" class="h-10 inline-block mr-2 rounded-full">Users
                    </a>
                </div>

                <div class="flex align-middle w-full text-lg">
                    <a href="/chapels/{{ Auth::user()->church->id }}" class="py-3 px-6 hover:bg-blue-600 w-full">
                        <img src="{{ asset('icons/church.svg') }}" alt="pamisa" class="h-10 inline-block mr-2 rounded-full">Chapels
                    </a>
                </div>

                <div class="flex align-middle w-full text-lg">
                    <a href="/clusters/{{ Auth::user()->church->id }}" class="py-3 px-6 hover:bg-blue-600 w-full">
                        <img src="{{ asset('icons/cluster.svg') }}" alt="pamisa" class="h-10 inline-block mr-2 rounded-full">Clusters
                    </a>
                </div>

                <div class="flex align-middle w-full text-lg">
                    <a href="/pamisa" class="py-3 px-6 hover:bg-blue-600 w-full">
                        <img src="{{ asset('icons/logs.svg') }}" alt="pamisa" class="h-10 inline-block mr-2 rounded-full">Logs
                    </a>
                </div>
            @endcan

            @can('view_routes_DioceseAdmin')

                <div class="mt-2 w-full flex flex-col items-center">
                    <hr class="w-[90%] border-gray-400">
                    <label class="text-gray-400 font-bold">Diocese Admin</label>
                </div>

                <div class="flex align-middle w-full text-lg">
                    <a href="/pamisa" class="py-3 px-6 hover:bg-blue-600 w-full">
                        <img src="{{ asset('icons/user.svg') }}" alt="pamisa" class="h-10 inline-block mr-2 rounded-full">Users
                    </a>
                </div>

                <div class="flex align-middle w-full text-lg">
                    <a href="/pamisa" class="py-3 px-6 hover:bg-blue-600 w-full">
                        <img src="{{ asset('icons/church.svg') }}" alt="pamisa" class="h-10 inline-block mr-2 rounded-full">Church
                    </a>
                </div>

                <div class="flex align-middle w-full text-lg">
                    <a href="/pamisa" class="py-3 px-6 hover:bg-blue-600 w-full">
                        <img src="{{ asset('icons/logs.svg') }}" alt="pamisa" class="h-10 inline-block mr-2 rounded-full">Logs
                    </a>
                </div>
            @endcan

        </nav>
        {{-- <iframe width="478" height="849" src="https://www.youtube.com/embed/n9lEd_QdWsw" title="In 2011, Iran Captured a Stealth US Drone RQ-170" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
    </section>
</div>

<script>
    //function to show the register drop down content
    function toggleDropdownRegister() {
        const dropdown = document.getElementById('registerdropdownContent');
        dropdown.classList.toggle('hidden');
    }

    //function to show the retrieve drop down content
    function toggleDropdownRetrieve() {
        const dropdown = document.getElementById('retrievedropdownContent');
        dropdown.classList.toggle('hidden');
    }
</script>
