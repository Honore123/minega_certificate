<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="min-h-screen bg-gray-100 flex justify-center items-center">
    <div class="max-w-4xl  bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
            <img class="rounded-t-lg" src="{{asset('storage/certificates/'.$trainee->certificate_image)}}" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$trainee->full_name}}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Approved by MINEGA Networks</p>
            
        </div>
    </div>
    <script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
    </script>
</body>
</html>

