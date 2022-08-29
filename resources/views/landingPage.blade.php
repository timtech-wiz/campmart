@extends('layouts.app')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
    <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
      <button
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
    <div class="carousel-inner relative w-full overflow-hidden">
      <div class="carousel-item active relative float-left w-full">
        <img
          src="slider/slider1.png"
          class="block w-full"
          alt="..."
        />
         
      </div>
      <div class="carousel-item relative float-left w-full">
        <img
          src="slider/slider2.png"
          class="block w-full"
          alt="..."
        />
        
      </div>
      <div class="carousel-item relative float-left w-full">
        <img
          src="slider/slider3.png"
          class="block w-full"
          alt="..."
        />
     
      </div>
    </div>
    <button
      class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
      type="button"
      data-bs-target="#carouselExampleCaptions"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
      type="button"
      data-bs-target="#carouselExampleCaptions"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <div class="mt-6 ml-6 flex justify-between items-center place-content-around">
      <h1 class="text-4xl font-bold text-gray-100">Cars</h1>
      <a href="#" class="mr-6 text-blue-700 hover:underline">View All</a>
    </div>
  <div class="mt-6 p-6 gap-x-4">
    <div class="grid grid-cols-4 justify-items-center items-center">
        <div class="grid grid-cols-1 justify-between justify-items-center">
          <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
          <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          

          
          <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
              <img
                src="images/car1.jpg"
                class="block w-full"
                alt="..."
              />
               
            </div>
            <div class="carousel-item relative float-left w-full">
              <img
                src="images/car2.jpg"
                class="block w-full"
                alt="..."
              />
              
            </div>
            <div class="carousel-item relative float-left w-full">
              <img
                src="images/car1.jpg"
                class="block w-full"
                alt="..."
              />
           
            </div>
            
          </div>
          
          <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <p class="mt-3 text-xl font-semibold text-gray-100">Name of product / $5000</p>
      </div>
      
        {{-- <div>b</div>
        <div>c</div>
        <div>d</div> --}}
    </div>

  </div>
@endsection