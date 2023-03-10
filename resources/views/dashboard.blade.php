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
                                        
                                        

                                      
                                        
                                        
                                       
                                        
                                        @foreach ($posts as $post )

                                        
                                        <h1>{{$users->name}}</h1>
                                        <h2>{{$post->user_id}}</h2>
                                        <hr>
                                        <p>{{$post->body}}</p>
                                        <img src="{{$post->img}}" class="card-img-top">
                                        @endforeach
                                    
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
