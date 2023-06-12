module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/lunarphp/stripe-payments/resources/views/**/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'orange-550': '#DE7B65',
                'green-550': '#799649',
            }
        },

    },

    plugins: [require('@tailwindcss/forms')],
};
