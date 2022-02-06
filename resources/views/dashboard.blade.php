<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Hi {{Auth::user()->name}} 
           <p style="float:right;"> Total Users
                <span class="btn btn-danger">{{count($users)}}</span>
           </p>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">

                <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)

                    @foreach($users as $user)
               
               
                        <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans() }}</td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
                </div>

                </div>
               
            </div>
        </div>
    </div>
</x-app-layout>
