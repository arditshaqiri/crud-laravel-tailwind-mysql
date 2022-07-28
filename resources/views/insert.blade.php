<!DOCTYPE html>
<html lang="en" class = "h-full">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link rel = "stylesheet" href = "{{asset('css/app.css')}}"> 
</head>
<body class = "h-full flex justify-center items-center  border border-indigo-600">
    
        <div class="w-1/3  flex flex-col justify-center align-center ">
            <h1 class = "w-full text-center p-5 text-2xl font-bold height-auto shadow-md">Contact Manager</h1>
            <div class="flex w-full p-5 flex flex-col">
               
                <form method = "POST" action = "/contacts">
                @csrf
                <a href="/"><img class = "w-6 my-2" src="{{url('/img/back.png')}}" /></a>
                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="title">Name: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm " id="name" name="name">
                    @error('name')
                    <div class="alert alert-danger"><p class = "text-red-500">{{ $message }}</p></div>
                    @enderror
                </div>
    
                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="content">Contact: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm " id="contact" name="contact">
                    @error('contact')
                    <div class="alert alert-danger"><p class = "text-red-500">{{ $message }}</p></div>
                    @enderror
                </div>
    
                <button class="bg-sky-600 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Insert</button>
    
              </form>
            </div>
        </div>
</body>
</html>