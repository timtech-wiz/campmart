@extends('layouts.app')

@section('content')
<div class="min-h-full">
   
 
   <header class="bg-transparent shadow">
     <div class="max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8 border-b-2 border-gray-300">
       <h1 class="text-3xl tracking-tight font-bold text-gray-100">Add Category</h1>
     </div>
   </header>
   <main>
       
<div class="grid grid-cols-3 justify-items-between">
   @include('backend.layouts.sidebar')
   <div class="col-span-2 mt-6 mr-[12rem]">
       <aside class="w-full mr-[20rem]" aria-label="Sidebar">
           <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
           <form action="" class="p-3">
            <div class="flex flex-col">
                <label for="">Name:</label>
                <input type="text" class="mt-1 border-2 border-gray-200 rounded-lg p-1 outline-none focus:border-gray-400">
            </div>
           
           </form>
           </div>
       </aside>
   </div>
   
</div> 
   </main>
 </div>

 @endsection