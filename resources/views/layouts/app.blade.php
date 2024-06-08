<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px; /* Height of the navbar */
        }
        /* Custom scrollbar styles */
        ::-webkit-scrollbar {
            width: 12px; /* Width of the vertical scrollbar */
            height: 20px; /* Height of the horizontal scrollbar */
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1; /* Color of the track */
        }
        ::-webkit-scrollbar-thumb {
            background-color: #888; /* Color of the scroll thumb */
            border-radius: 10px; /* Roundness of the scroll thumb */
            border: 3px solid #f1f1f1; /* Padding around the scroll thumb */
        }
        ::-webkit-scrollbar-thumb:hover {
            background-color: #555; /* Color of the scroll thumb when hovered */
        }
        /* Firefox custom scrollbar */
        body {
            scrollbar-width: thin; /* "auto" or "thin" */
            scrollbar-color: #888 #f1f1f1; /* Scroll thumb and track */
        }
    </style>
</head>
<body>
    @include('components.navbar')
    <div class="container mt-4">
        @yield('content')
    </div>
    @if (!in_array(Route::currentRouteName(), ['login', 'register', 'profile']))
        @include('components.footer')
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>