<?php


include_once 'base.view.php';
include_once 'sections/admin-nav.view.php';

?>

<div class="container mx-auto my-2 p-2">
       <form id="edit-account" action="" method="post" class="md:flex no-wrap md:-mx-2 ">
              <!-- Left Side -->
              <div class="w-full md:w-3/12 md:mx-2">
                     <!-- Profile Card -->

                     <div class="max-w-sm bg-white rounded-lg border border-green-400 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex flex-col items-center py-10 px-2">
                                   <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="https://ui-avatars.com/api/?name=<?= $user->username; ?>&bold=true&format=svg" alt="" alt=" Bonnie image">
                                   <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?= ucfirst($user->username); ?></h5>
                                   <span class="text-sm text-gray-500 dark:text-gray-400"><?= $user->email; ?></span>
                                   <button type="submit" class="mt-6 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Save Changes</button>

                            </div>
                     </div>

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
                                                 <div class="px-1 py-2 text-green-550">
                                                        <input name="first_name" type="text" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" placeholder="First Name" value="<?= $user->first_name; ?>">
                                                 </div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Last Name</div>
                                                 <div class="px-1 py-2 text-green-550">
                                                        <input name="last_name" type="text" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" placeholder="Last Name" value="<?= $user->last_name; ?>">
                                                 </div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Gender</div>
                                                 <div class="px-1 py-2 text-green-550">
                                                        <input name="gender" type=" text" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" placeholder="Gender" value="<?= $user->gender; ?>">
                                                 </div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Contact No.</div>
                                                 <div class="px-1 py-2 text-green-550">
                                                        <input name="phone_no" type=" text" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" placeholder="Contact No." value="<?= $user->phone_no; ?>">
                                                 </div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Current Address</div>
                                                 <div class="px-1 py-2 text-green-550">
                                                        <input name="address" type="text" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" placeholder="Current Address" value="<?= $user->address; ?>">
                                                 </div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Permanent Address</div>
                                                 <div class="px-1 py-2 text-green-550">
                                                        <input id="disabled-input-2" aria-label="disabled input 2" type="text" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" placeholder="Permanent Address" value="<?= $user->address; ?>" disabled readonly>
                                                 </div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Email.</div>
                                                 <div class="px-1 py-2 text-green-550">
                                                        <input id="disabled-input-2" aria-label="disabled input 2" type="email" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" placeholder="Email" value="<?= $user->email; ?>" disabled readonly>
                                                 </div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Birthday</div>
                                                 <div class="px-1 py-2 text-green-550">
                                                        <input name="birthday" type="date" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" placeholder="Bith day" value="<?= $user->birthday; ?>">
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>

              </div>
       </form>

</div>
</div>
<script>
       handleForm("#edit-account", "/-/account/edit");


       function handleForm(formID, url) {
              $(formID).submit(function(event) {
                     event.preventDefault();
                     $.ajax({
                            type: 'POST',
                            url: url,
                            data: $(this).serialize(),
                            success: function(data) {
                                   data = JSON.parse(data);
                               if(data.status == "success"){
                                      notify(data.message)
                               }else{
                                   notify(data.message)   
                               }
                            }
                     });
              });
       }
</script>