<?php

use Chungu\Models\User;

include_once 'base.view.php';
include_once 'sections/admin-nav.view.php';

?>

<div class="container mx-auto my-2 p-2">
       <div class="md:flex no-wrap md:-mx-2 ">
              <!-- Left Side -->
              <div class="w-full md:w-3/12 md:mx-2">
                     <!-- Profile Card -->

                     <div class="max-w-sm bg-white rounded-lg border border-green-400 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex flex-col items-center py-10 px-2">
                                   <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="https://ui-avatars.com/api/?name=<?= $user->username; ?>&bold=true&format=svg" alt=""" alt=" Bonnie image">
                                   <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?= ucfirst($user->username); ?></h5>
                                   <span class="text-sm text-gray-500 dark:text-gray-400"><?= $user->email; ?></span>
                            </div>
                     </div>
                     <ul class="mt-4 md:mt-6 bg-green-100 border-b-2 border-green-400 text-green-550 hover:text-pink-550 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                            <li class="flex items-center py-3">
                                   <span>Member since</span>
                                   <span class="ml-auto"><?= format_date($user->created_at); ?></span>
                            </li>
                     </ul>
                     <!-- End of profile card -->
              </div>
              <!-- Right Side -->
              <div class="w-full md:w-9/12 md:mx-2 h-64">
                     <!-- Profile tab -->
                     <!-- About Section -->
                     <div class="mt-6 md:mt-0 bg-white md:p-3 bg-white rounded-lg border shadow-md shadow-sm rounded-sm border-green-400">
                            <div class="flex justify-between items-center space-x-2 font-semibold border-b-2 p-2 border-green-400 text-gray-900 leading-8">
                                   <span class="tracking-wide text-pink-550">Account Details</span>
                                   <a href="/-/account/edit" class="text-green-550">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                 <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                 <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                          </svg>
                                   </a>
                            </div>
                            <div class="text-gray-700">
                                   <div class="grid md:grid-cols-2 text-sm">
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">First Name</div>
                                                 <div class="px-4 py-2 text-green-550"><?= $user->first_name ?? "N/A"; ?></div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Last Name</div>
                                                 <div class="px-4 py-2 text-green-550"><?= $user->last_name ?? "N/A"; ?></div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Gender</div>
                                                 <div class="px-4 py-2 text-green-550"><?= $user->gender ?? "N/A"; ?></div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Contact No.</div>
                                                 <div class="px-4 py-2 text-green-550"><?= $user->phone_no ?? "N/A"; ?></div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Current Address</div>
                                                 <div class="px-4 py-2 text-green-550"><?= $user->address ?? "N/A"; ?></div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Permanent Address</div>
                                                 <div class="px-4 py-2 text-green-550"><?= $user->address ?? "N/A"; ?></div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Email.</div>
                                                 <div class="px-4 py-2">
                                                        <a class="text-blue-800" href="mailto:<?= $user->email; ?>"><?= $user->email; ?></a>
                                                 </div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Birthday</div>
                                                 <div class="px-4 py-2 text-green-550"><?= format_date($user->birthday) ?? "N/A"; ?></div>
                                          </div>
                                   </div>
                            </div>
                     </div>
                     <!-- End of about section -->

                     <!-- Other Contacts -->
                     <div class="mt-6 bg-white p-3 bg-white rounded-lg border shadow-md shadow-sm rounded-sm border-green-400">
                            <div class="flex justify-between items-center space-x-2 font-semibold border-b-2 p-2 border-green-400 text-gray-900 leading-8">
                                   <span class="tracking-wide text-pink-550">Other Users</span>
                                   <span class="text-green-550">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                 <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                          </svg>
                                   </span>
                            </div>
                            <div class="text-gray-700">

                                   <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                                          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                 <thead class="text-xs text-green-550 uppercase bg-green-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                               <th scope="col" class="py-3 px-6">
                                                                      User
                                                               </th>
                                                               <th scope="col" class="py-3 px-6">
                                                                      Role
                                                               </th>
                                                               <th scope="col" class="py-3 px-6">
                                                                      Phone
                                                               </th>
                                                               <th scope="col" class="py-3 px-6">
                                                                      Address
                                                               </th>

                                                        </tr>
                                                 </thead>
                                                 <?php foreach (User::all() as $user) : ?>
                                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                               <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                      <p><?= ucwords($user->first_name . " " .$user->last_name) ?? $user->username ; ?></p>
                                                                      <p class="text-xs"><?= $user->email; ?></p>
                                                               </th>
                                                               <td class="py-4 px-6">
                                                                      <?= $user->role; ?>
                                                               </td>
                                                               <td class="py-4 px-6">
                                                                      <?= $user->phone_no ?? "N/A"; ?>
                                                               </td>
                                                               <td class="py-4 px-6">
                                                                      <?= $user->address ?? "N/A"; ?>
                                                               </td>

                                                        </tr>
                                                 <?php endforeach; ?>
                                                 </tbody>
                                          </table>
                                   </div>

                            </div>
                     </div>
                     <!-- End of Other Contacts section -->
              </div>
       </div>
</div>
</div>