<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Welcome Back {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                            <div class="card">
                                <div class="card-header pb-0">
                                   
                                <div class="card-body">
                                    <div class="table-responsive hoverable-table">

                                        <div class="table-responsive hoverable-table">
                                            @php
                                            $i =1
                                            @endphp
                                            @foreach ($market as $mark )
                                            <hr>
                                            <h1> product number :{{ $i++}}</h1>
                                            <a href="{{$mark->link}}">
                                            <h1>{{$mark->title}}</h1>
                                            </a>
                                          
                                            <img src="{{$mark->img}}" class="card-img-top">
                                         
                                            
                                           @endforeach
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <!--/div-->
                    <!-- /row -->
            </div>
                    <!-- Container closed -->
        </div>
    </div>

</x-app-layout>
