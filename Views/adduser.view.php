<?php
include_once 'base.view.php';
include_once 'sections/admin-nav.view.php'
?>


<section id="User-form" class="p-4 bg-gray-50">
    <form method="post" class="bg-white container flex flex-col mx-auto space-y-12">
        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-md ">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="font-medium">User information</p>
                <p class="text-xs">To create a new user please fill in all the details correctly</p>

                <p class="text-xs text-pink-550">The rest of the data will be filled automatically e.g. password which the default pass is 1234</p>
            </div>
            <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3 items-center">
                <div class="col-span-full sm:col-span-3">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <input id="username" name="username" type="text" placeholder="Username" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                </div>
                <div class="col-span-full sm:col-span-3">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input id="email" name="email" type="email" placeholder="Email" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                </div>

                <div class="col-span-full sm:col-span-3">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 ">Role</label>
                    <select name="role" class="block appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                        <option class="text-gray-900 text-sm rounded-lg">--Select Role--</option>
                        <option class="text-gray-900 text-sm rounded-lg" value="user">User</option>
                        <option class="text-gray-900 text-sm rounded-lg" value="admin">Admin</option>
                        <option class="text-gray-900 text-sm rounded-lg" value="guest">guest</option>
                    </select>
                </div>

                <div class="col-span-full sm:col-span-3 mt-8">
                    <button type="submit" class="bg-blue-500 text-white text-sm font-medium px-6 py-2 rounded uppercase cursor-pointer">Create User</button>
                </div>

            </div>
        </fieldset>

    </form>
</section>