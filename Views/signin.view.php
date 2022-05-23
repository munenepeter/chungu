<?php
include_once 'base.view.php';
?>

<div class=" p-4">
    <center>
        <div class="mt-28 w-full max-w-md p-8 space-y-3 rounded-xl bg-white border border-green-550">
            <h1 class="text-2xl font-bold text-center text-pink-550">Sign In</h1>
            <p class="bg-clip-text text-pink-550">Please fill in to continue to your account</p>
            <form novalidate="" action="" method="post" class="space-y-6 ng-untouched ng-pristine ng-valid">
                <div class="space-y-1 text-sm">
                    <label for="username" class="block text-left text-green-550">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="w-full px-4 py-3 rounded-md border border-green-550 bg-gradient-to-r from-red-50 to-blue-50 text-green-550" required>
                </div>
                <div class="space-y-1 text-sm">
                    <label for="password" class="block text-left text-green-550">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-3 rounded-md border border-green-550 bg-gradient-to-r from-red-50 to-blue-50 text-green-550" required>
                    <div class="flex justify-end text-xs text-blue-500 hover:text-blue-700">
                        <a rel="noopener noreferrer" href="#">Forgot Password?</a>
                    </div>
                </div>
                <button type="submit" name="submit" class="block w-full p-3 text-center rounded-full text-gray-200 font-bold text-center bg-pink-550">Sign in</button>
                <p class="text-red-800">
                    <?php
                    if (isset($e)) {
                        foreach ($e as $error) {
                            echo $error;
                        }
                    }

                    ?>
                </p>
            </form>
        </div>

    </center>
</div>
</body>

</html>