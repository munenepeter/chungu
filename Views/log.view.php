<?php
include_once 'base.view.php';
include_once 'sections/admin-nav.view.php';

$all = implode(",", $logs);
?>

<div class="bg-gray-100 m-4 rounded-md">

    <!-- btns & search -->
    <div class="w-full p-4">

        <div class="w-full flex items-center py-2">
            <div class="hidden md:flex items-center">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Debug
                    <?= substr_count($all, 'Debug') ?></button>
                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Info
                    <?= substr_count($all, 'Info') ?></button>
                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Errors
                    <?= substr_count($all, 'Error') ?></button>
                <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:focus:ring-yellow-900">Warnings
                    <?= substr_count($all, 'Warning') ?></button>
            </div>
            <div class="ml-auto flex items-center">
                <form class="mr-8">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search ..." required="">
                    </div>
                </form>

                <button type="button" class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:focus:ring-red-900">Delete Logs</button>
            </div>


        </div>


        <div class="overflow-y-auto relative shadow-md sm:rounded-lg" style="height: 459px ;">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 " x-data="{selected:null}">
                <thead class=" sticky top-0 text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-2 md:px-6">
                            Level
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Time
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Env
                        </th>
                        <th scope="col" class="py-3 px-2 md:px-6">
                            Description
                        </th>

                    </tr>
                </thead>
                <tbody class="">
                    <?php $count = 0;?>
                    <?php foreach ($logs as $log) : ?>
                        <?php $log = json_decode($log); ?>
                        <tr @click="selected !== <?=$count;?> ? selected = <?=$count;?> : selected = null" class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-4 px-2 md:px-6 flex items-center">
                                <?php if ($log->level === "Error") : ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span class="pl-2 font-medium text-red-600 whitespace-nowrap dark:text-white"><?= $log->level; ?></span>
                                <?php elseif ($log->level === "Debug") : ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-blue-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span class="pl-2 font-medium text-blue-600 whitespace-nowrap dark:text-white"><?= $log->level; ?></span>
                                <?php elseif ($log->level === "Warning") : ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span class="pl-2 font-medium text-yellow-600 whitespace-nowrap dark:text-white"><?= $log->level; ?></span>
                                <?php else : ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span class="md:pl-2 font-medium text-green-600 whitespace-nowrap dark:text-white"><?= $log->level; ?></span>
                                <?php endif; ?>
                            </th>
                            <td class="py-4 px-6 font-bold">
                                <?= $log->time; ?>
                            </td>
                            <td class="py-4 px-6">
                                <?= ENV; ?>
                            </td>
                            <td class="py-4 px-2 md:px-6">
                                <?= $log->desc; ?>
                            </td>

                        </tr>
                        <tr x-show="selected == <?=$count;?>">
                            <td class="bg-green-100 border-b" colspan="4">
                                //=> <i><?= $log->desc; ?></i><br>
                                *Request* <?= $log->more->method; ?> <?= $log->more->uri; ?><br>
                                *Agent*: <?= $log->more->agent; ?>
                            </td>
                        </tr>
                        <?php $count++;?>
                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>

    </div>



</div>
</body>

</html>