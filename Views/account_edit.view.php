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
                                   <button id="submit_btn" type="submit" class="mt-6 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Save Changes</button>

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
                                   <a href="/-/account" class="text-green-550 hover:text-pink-550">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                 <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
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
                                                        <input id="disabled-input-2" aria-label="disabled input 2" type="email" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" value="<?= $user->email; ?>" disabled readonly>
                                                 </div>
                                          </div>
                                          <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Birthday</div>
                                                 <div class="px-1 py-2 text-green-550">
                                                        <input name="birthday" type="date" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" placeholder="Bith day" value="<?= $user->birthday; ?>">
                                                 </div>
                                          </div>
                                          <!-- <div class="grid grid-cols-2">
                                                 <div class="px-4 py-2 font-semibold text-pink-550">Password</div>
                                                 <div class="px-1 py-2 text-green-550">
                                                        <input name="password" type="password" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" placeholder="Type new Password" >
                                                 </div>
                                          </div> -->
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
                     $('#submit_btn').html(`  <div role="status">
                            <svg class="inline mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-green-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>`);
                     $.ajax({
                            type: 'POST',
                            url: url,
                            data: $(this).serialize(),
                            success: function(data) {
                                   $('#submit_btn').html('Saved your changes');
                                   data = JSON.parse(data);
                                   if (data.status == "success") {
                                          notify(data.message)
                                   } else {
                                          $('#submit_btn').html('Some Error occurred');
                                          notify(data.message)
                                   }
                            }
                     });
              });
       }
</script>