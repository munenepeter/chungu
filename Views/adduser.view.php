<?php include_once 'base.view.php'; ?>

<?php include_once 'sections/dash-nav.view.php'; ?>


<section class="p-4 bg-gray-50">
    <div class="fixed bottom-4 right-4 xl:right-20">
        <?php
        if (isset($e)) {
            foreach ($e as $error) {
                echo $error;
            }
        }
        ?>
    </div>


    <form method="post" class="bg-white container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-md ">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="font-medium">User information</p>
                <p class="text-xs">To create a new user please fill in all the details correctly</p>
            </div>
            <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                <div class="col-span-2 sm:col-span-3">
                    <label for="full_names" class="block mb-2 text-sm font-medium text-gray-900">Full Names</label>
                    <input id="full_names" name="full_names" type="text" placeholder="Full Names" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                </div>

                <div class="col-span-full sm:col-span-3">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <input id="username" name="username" type="text" placeholder="Username" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                </div>
                <div class="col-span-full sm:col-span-3">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input id="email" name="email" type="email" placeholder="Email" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                </div>
                <div class="col-span-full sm:col-span-3">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                </div>
                <div class="col-span-full sm:col-span-3">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 ">Role</label>
                    <div class="relative">
                        <select name="role" class="block appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                            <option class="text-gray-900 text-sm rounded-lg">--Select User--</option>
                            <option class="text-gray-900 text-sm rounded-lg" value="user">User</option>
                            <option class="text-gray-900 text-sm rounded-lg" value="admin">admin</option>
                            <option class="text-gray-900 text-sm rounded-lg" value="guest">guest</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                <div class="col-span-full sm:col-span-3">
                    <input type="submit" class="bg-indigo-500 text-white text-sm font-medium px-6 py-2 rounded uppercase cursor-pointer" value="Create User">
                </div>
                </div>
            </div>
        </fieldset>

    </form>
</section>