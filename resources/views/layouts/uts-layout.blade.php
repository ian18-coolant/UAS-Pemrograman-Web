<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .container {
        @apply max-w-[90%] mx-auto;
      }

      .btn {
        @apply bg-[#212121] text-white px-5 py-3 text-center;
      }  

      .btn.outlined {
        @apply bg-white border border-[#212121] text-[#212121];
      }

      .btn.rounded {
        @apply rounded-full;
      }

      .home::before {
        /* content: url("./assets/scratch.svg");
        position: absolute;
        bottom: -18px; */
      }

      .active {
        /* @apply block; */
        @apply translate-x-0;
      }
    }
  </style>
  <title>Mangcoding Store</title>
</head>

<body>
  <header class="shadow-lg">
    <nav class="container relative flex py-5 items-center justify-between">
      <a href="">
        <img src="./assets/logo.svg" alt="">
      </a>

      <div class="space-x-4 flex-1 ml-12 hidden md:block">
        <a href="">Home</a>
        <a href="">About Us</a>
        <a href="">Shop</a>
        <a href="">Contact</a>
      </div>

      <div class="flex items-center space-x-5 hidden md:flex">
        <a href="">
          <img src="./assets/cart.svg" alt="">
        </a>
        <a href="">
          <img src="./assets/search.svg" alt="">
        </a>
        <a href="" class="btn">Registration</a>
      </div>

      <a href="#" class="hamburger md:hidden">
        <img src="./assets/hamburger.svg" alt="">
      </a>

      <div
        class="popup transition-all translate-x-[-120%] absolute inset-x-0 top-10 border border-gray-300 bg-white shadow-lg right-12 rounded-lg p-4 z-40 md:hidden">
        <div class="flex space-x-5">
          <div class="flex h-full items-center space-x-1 w-full mb-4 border border-gray-400 px-3 rounded-full">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
              <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)"
                fill="#070D13" />
            </svg>
            <input type="text" class="w-full border-none" placeholder="Search ..." />
          </div>
          <a href="">
            <img src="./assets/cart.svg" alt="">
          </a>
        </div>

        <div class="space-y-4 flex flex-col">
          <a href="">Home</a>
          <a href="">About Us</a>
          <a href="">Shop</a>
          <a href="">Contact</a>
        </div>

        <div class="flex flex-col mt-4">
          <a href="" class="btn">Registration</a>
        </div>
      </div>
    </nav>
  </header>

  <section class="container pt-8 pb-28 flex flex-col items-center lg:flex-row">
    <div class="space-y-8 flex-1">
      <span class="btn rounded">Mangcoding Store</span>
      <h1 class="text-7xl font-bold leading-none relative">
        Get the right Furniture For your
        <span class="relative home">Home</span>
      </h1>
      <p class="text-xl text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam.
      </p>
      <a href="" class="btn inline-block"> Shop Now</a>
    </div>

    <div class="flex space-x-4 flex-1 hidden lg:flex">
      <img class="w-full" src="./assets/chair-1.png" alt="">
      <img class="relative -bottom-14 w-full" src="./assets/chair-2.png" alt="">
    </div>
  </section>


  <section class="bg-[#212121] py-24">
    <div class="container flex flex-col space-y-5 lg:space-y-0 lg:space-x-5 lg:flex-row">
      <div class="border-2 border-white flex flex-1 items-center justify-center py-6 px-3 space-x-6 ">
        <img src="./assets/trophy.svg" alt="">
        <div class="text-white space-y-1">
          <h3 class="font-bold text-base">High Quality</h3>
          <p class="text-sm">Material is Strong</p>
        </div>
      </div>

      <div class="border-2 border-white flex flex-1 items-center justify-center py-6 px-3 space-x-6 ">
        <img src="./assets/protection.svg" alt="">
        <div class="text-white space-y-1">
          <h3 class="font-bold text-base">Warranty Protection</h3>
          <p class="text-sm">Over 3 years</p>
        </div>
      </div>

      <div class="border-2 border-white flex flex-1 items-center justify-center py-6 px-3 space-x-6 ">
        <img src="./assets/shipping.svg" alt="">
        <div class="text-white space-y-1">
          <h3 class="font-bold text-base">Free Shipping</h3>
          <p class="text-sm">Order $100 Minimum</p>
        </div>
      </div>

      <div class="border-2 border-white flex flex-1 items-center justify-center py-6 px-3 space-x-6 ">
        <img src="./assets/support.svg" alt="">
        <div class="text-white space-y-1">
          <h3 class="font-bold text-base">24 / 7 Support</h3>
          <p class="text-sm">Dedicated Support</p>
        </div>
      </div>
    </div>
  </section>

  <div class="container py-20">
    <span class="text-yellow-500 text-xl">Post List</span>
    <div class="flex justify-between items-center w-full">
      <h3 class="text-5xl font-semibold">Categories</h3>
      <a href="" class="btn outlined inline-block">See More</a>
    </div>

    <div class="mt-8 flex flex-col space-y-5 lg:flex-row lg:space-x-5 lg:space-y-0">
      <div class="bg-[#BEDDE2] flex-1 flex space-x-8 relative rounded">
        <img src="./assets/table.png" class="self-end hidden md:block" alt="">

        <div class="max-w-[387px] space-y-4 py-8">
          <h3 class="font-bold text-4xl">Ruang Tamu</h3>
          <p class="text-xl text-gray-500">Terdapat berbagai macam Furniture Ruang Tamu yang dapat anda beli dengan
            kualitas yang bagus</p>
          <a href="" class="btn inline-block">Buy Now</a>
        </div>
      </div>

      <div class="bg-[#DEEFE9] flex-1 flex space-x-8 relative rounded">
        <img src="./assets/chair.png" class="self-end hidden md:block" alt="">

        <div class="max-w-[387px] space-y-4 py-8">
          <h3 class="font-bold text-4xl">Ruang Kerja</h3>
          <p class="text-xl text-gray-500">
            Terdapat berbagai macam Furniture Ruang Kerja, Seperti Kursi Kantor, Santay, dan lainnya
          </p>
          <a href="" class="btn inline-block">Buy Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container py-20">
    <span class="text-yellow-500 text-xl">Post List</span>
    <div class="flex justify-between items-center w-full">
      <h3 class="text-5xl font-semibold">
        Our Best Seller Product
      </h3>
      <a href="" class="btn outlined inline-block">See More</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-28 gap-x-10 mt-10">
      <div class="relative">
        <img src="./assets/image-1.png" class="h-full w-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-xl">Meja Kerja ( Kantoran )</p>
            <span class="font-bold text-xl">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="relative">
        <img src="./assets/image-2.png" class="h-full w-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-xl">Meja Kerja ( Kantoran )</p>
            <span class="font-bold text-xl">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./assets/image-3.png" class="h-full w-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-xl">Meja Kerja ( Kantoran )</p>
            <span class="font-bold text-xl">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./assets/image-4.png" class="h-full w-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-xl">Meja Kerja ( Kantoran )</p>
            <span class="font-bold text-xl">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>


      <div class="">
        <img src="./assets/image-5.png" class="h-full w-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-xl">Meja Kerja ( Kantoran )</p>
            <span class="font-bold text-xl">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./assets/image-6.png" class="h-full w-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-xl">Meja Kerja ( Kantoran )</p>
            <span class="font-bold text-xl">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./assets/image-7.png" class="h-full w-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-xl">Meja Kerja ( Kantoran )</p>
            <span class="font-bold text-xl">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./assets/image-8.png" class="h-full w-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-xl">Meja Kerja ( Kantoran )</p>
            <span class="font-bold text-xl">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>


    </div>
  </div>

  <section class="container py-20 flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center">
    <img src="./assets/workspace.png" class="w-full flex-1" alt="">
    <div class="flex-1 space-y-6">
      <h2 class="text-6xl font-bold">Simple Wooden Table</h2>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque harum quaerat animi ipsa blanditiis repellat
        nesciunt similique! Tenetur, dolorum nihil facere voluptate sunt aliquam eligendi dolorem non culpa,
        exercitationem ducimus.
      </p>

      <div class="flex justify-between items-center">
        <a href="" class="btn inline-block"> Buy Now</a>
        <p class="font-bold text-3xl">$1,300</p>
      </div>
    </div>
  </section>


  <section class="banner container relative mt-5 mb-20 bg-[#DEEFE9] min-h-[400px] flex items-center justify-center">
    <img src="./assets/lamp.png" alt="" class="absolute top-0 left-0">

    <img src="./assets/curly.png" class="absolute" alt="">

    <div class="flex items-center justify-center flex-col space-y-3 relative z-40 p-6">
      <h2 class="text-4xl font-bold">Find Furniture Now</h2>
      <p class="text-gray-500 text-lg">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor erat sapien
        faucibus lectus,
      </p>
      <a href="" class="btn inline-block">Order Now</a>
    </div>

    <img src="./assets/chair-left.png" alt="" class="absolute bottom-0 right-0">

  </section>

  <section class="bg-[#212121] text-white py-14">
    <div
      class="container flex flex-col space-y-5 md:flex-row md:space-y-0 items-center md:items-start md:justify-center space-x-12">
      <div class="flex flex-col">
        <div class="flex items-center gap-5 mb-5">
          <img src="./assets/Logo.svg" alt="" width="40">
          <p class="font-bold">Mangcoding Store</p>
        </div>

        <p class="max-w-[380px]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien
          faucibus lectus, vel tempor dolor augue et lectus.
        </p>
        <ul class="flex gap-5 mt-5">
          <li>
            <img src="./assets/Frame 1597882717.png" alt="">
          </li>
          <li>
            <img src="./assets/Frame 1597882718.png" alt="">
          </li>
          <li>
            <img src="./assets/Frame 1597882719.png" alt="">
          </li>
          <li>
            <img src="./assets/Frame 1597882720.png" alt="">
          </li>
        </ul>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 gap-3 gap-y-8">
        <div>
          <p class="font-bold py-2">Navigation</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Categories</li>
            <li>Best Product</li>
            <li>Cart</li>
            <li>Wishlist</li>
            <li>Contact</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Navigation</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Ruang Tamu</li>
            <li>Ruang Makan</li>
            <li>Ruang Kerja</li>
            <li>Ruang Tidur</li>
            <li>Furniture</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Product</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Chair</li>
            <li>Table</li>
            <li>Wardrobe</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Payment Method</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Credit Card</li>
            <li>Paypal</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Setting</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>My Account</li>
            <li>Order</li>
            <li>Address</li>
            <li>Password</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Contact</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li class="flex space-x-5 items-center">
              <img src="./assets/location.svg" alt="">
              <p>
                Lokasimu di Jakarta Barat
              </p>
            </li>
            <li class="flex space-x-3 items-center">
              <img src="./assets/message.svg" alt="">
              <p>
                furniture@gmail.com
              </p>
            </li>
            <li class="flex space-x-3 items-center">
              <img src="./assets/phone.svg" alt="">
              <p>
                00837 73649 7898
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-[#212121] py-5">
    <p class="text-center text-white ">© 2022 Mangcoding. All rights reserved.</p>
  </footer>


  <script src="./app.js"></script>
</body>

</html>