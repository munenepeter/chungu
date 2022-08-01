<?php
include_once 'base.view.php';
include_once 'sections/admin-nav.view.php';

?>

<div class="container mx-auto my-2">
    <div class="md:flex no-wrap md:-mx-2 ">
        <!-- Left Side -->
        <div class="w-full md:w-3/12 md:mx-2">
            <!-- Profile Card -->
            <div class="bg-white p-2 border-t-4 border-green-400">
                <div class="image overflow-hidden">
                    <img class="h-auto w-full mx-auto rounded-md" src="https://ui-avatars.com/api/?name=<?= $user->username; ?>&bold=true&format=svg" alt="">
                </div>
                <h1 class="text-pink-550 font-bold text-xl leading-8 my-1"><?= ucfirst($user->username); ?></h1>
                <h3 class="text-green-550 font-lg text-semibold leading-6">A system <?= ucfirst($user->role); ?> at Chungu.</h3>
                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit.</p>
                <ul class="bg-green-100 text-green-550 hover:text-pink-550 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">

                    <li class="flex items-center py-3">
                        <span>Member since</span>
                        <span class="ml-auto"><?= format_date($user->created_at); ?></span>
                    </li>
                </ul>
            </div>
            <!-- End of profile card -->
        </div>
        <!-- Right Side -->
        <div class="w-full md:w-9/12 mx-2 h-64">
            <!-- Profile tab -->
            <!-- About Section -->
            <div class="bg-white p-3 shadow-sm rounded-sm border-t-4 border-green-400">
                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                    <span clas="text-green-500">
                        <svg class="text-pink-550 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span class="tracking-wide text-pink-550">About</span>
                </div>
                <div class="text-gray-700">
                    <div class="grid md:grid-cols-2 text-sm">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold text-pink-550">First Name</div>
                            <div class="px-4 py-2 text-green-550">Jane</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold text-pink-550">Last Name</div>
                            <div class="px-4 py-2 text-green-550">Doe</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold text-pink-550">Gender</div>
                            <div class="px-4 py-2 text-green-550">Female</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold text-pink-550">Contact No.</div>
                            <div class="px-4 py-2 text-green-550">NULL</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold text-pink-550">Current Address</div>
                            <div class="px-4 py-2 text-green-550">NULL</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold text-pink-550">Permanent Address</div>
                            <div class="px-4 py-2 text-green-550">NULL</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold text-pink-550">Email.</div>
                            <div class="px-4 py-2">
                                <a class="text-blue-800" href="mailto:<?= $user->email; ?>"><?= $user->email; ?></a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold text-pink-550">Birthday</div>
                            <div class="px-4 py-2 text-green-550">NULL</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of about section -->

            <!-- Other Contacts -->
            <div class="bg-white p-3 shadow-sm rounded-sm border-t-4 border-green-400">
                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                    <span clas="text-green-500">
                        <svg class="text-pink-550 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
 
                    </span>
                    <span class="tracking-wide text-pink-550">Others in Chungu</span>
                </div>
                <div class="text-gray-700">
                    
                </div>
            </div>
            <!-- End of Other Contacts section -->
        </div>
    </div>
</div>
</div>