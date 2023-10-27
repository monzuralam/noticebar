<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Noticebar</title>
    <link rel="shortcut icon" type="image/png" href="https://cdn.shopify.com/static/shopify-favicon.png"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://cdn.shopify.com/static/shopify-favicon.png" alt="Shopify">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your shop</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ url('/authenticate') }}" method="get">
                <div>
                    <label for="url" class="block text-sm font-medium leading-6 text-gray-900">Shop address</label>
                    <div class="mt-2">
                        <input id="url" name="shop" type="url" autocomplete="url" required class="block w-full rounded-md border-0 px-1 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-lime-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-lime-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>