<?php
include_once 'base.view.php';
?>



<!-- component -->
<div class="antialiased bg-gradient-to-br from-green-100 to-white">
    <div class="container px-6 md:px-10 mx-auto">
        <div class="flex flex-col text-center md:text-left md:flex-row h-screen justify-center md:items-center">
            <div class="hidden md:flex flex-col w-full">
                <div>
                    <svg class="w-20 h-20 mx-auto md:float-left fill-stroke text-pink-550 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                </div>
                <h1 class="text-5xl text-pink-550 font-bold">Admin Area</h1>
                <p class="hidden md:block w-5/12 mx-auto md:mx-0 text-green-550">
                    Control and monitorize your website data from dashboard.
                </p>
            </div>
            <div class=" w-full max-w-md p-8 space-y-3 rounded-xl bg-white border border-green-550">
                <h1 class="text-2xl font-bold text-center text-pink-550">Sign In</h1>
                <p class="bg-clip-text text-pink-550">Please fill in to continue to your account</p>
                <form id="signin" class="space-y-6">
                    <div class="space-y-1 text-sm">
                        <label for="username" class="block text-left text-green-550">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username" class="w-full px-4 py-3 rounded-md border border-green-550 bg-gradient-to-r from-red-50 to-blue-50 text-green-550" required="">
                    </div>
                    <div class="space-y-1 text-sm">
                        <label for="password" class="block text-left text-green-550">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-3 rounded-md border border-green-550 bg-gradient-to-r from-red-50 to-blue-50 text-green-550" required="">
                        <div class="flex justify-end text-xs text-blue-500 hover:text-blue-700">
                            <a rel="noopener noreferrer" href="#">Forgot Password?</a>
                        </div>
                    </div>
                    <button id="submit_btn" style="background-color: #DE7B65;" type="submit" name="submit" class="block w-full p-3 text-center rounded-full text-gray-200 font-bold text-center bg-pink-550">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>