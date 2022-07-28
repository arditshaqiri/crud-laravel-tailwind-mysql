<!DOCTYPE html>
<html lang="en" class = "h-full">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link rel = "stylesheet" href = "{{asset('css/app.css')}}"> 
</head>
<body class = "h-full flex justify-center items-center ">
    
        <div class="w-1/3  flex flex-col justify-center align-center ">
            <h1 class = "w-full text-center p-5 text-2xl font-bold height-auto shadow-md">Contact Manager</h1>
            <div class="flex w-full p-5 flex flex-col">
                <div class="flex justify-between items-center border-b-2 border-stone-200">
                <h1 class = "text-xl" >Contact list</h1>
                
                <a href="/contacts/create" class="p-2 my-1 bg-sky-600 text-white rounded">Add Contact</a>
                </div>
                    @if(count($contacts) == 0)
                        <h2 class = "m-4 w-full text-center">No contact found.</h2>
                    @endif
                   
                    @foreach($contacts as $contact)
                    <div class = "border-b-2 border-stone-200 flex items-center justify-between">
                        <div class="w-4/5 flex items-center py-3 ">
                            <img class = "w-8" src="{{url('/img/user.png')}}" />
                       <div class="mx-3">
                        <p class = "leading-none">{{ $contact->name}}</p> 
                        <p class = "leading-none text-indigo-500">{{ $contact->contact}}</p> 
                       </div>
                      
                        </div>
                       @php
                            $page = 'null';
                            if(request()->has('page') && count($contacts)>1)  $page =  request()->get('page');

                        @endphp
                        <a href = "contacts/{{ $contact->id}}/edit" > <img class = "w-5" src="{{url('/img/edit.png')}}" /></a>
                        <form method="post" class = "w-5" action="{{ route('contacts.destroy',['contact'=>$contact->id, 'page'=>$page])}}">
                        {{-- <form method="post" class = "w-5" action="/contacts/{{$contact->id}}/{{$page}}"> --}}
                            @csrf
                            @method('delete')
            
                            <button > <img src="{{url('/img/delete.png')}}" /></button>
                        </form>
                    </div>
                     @endforeach 
               
            </div>
            <div class="w-full mt-4">
                {{ $contacts->links() }}
            </div>
        </div>
</body>
</html>