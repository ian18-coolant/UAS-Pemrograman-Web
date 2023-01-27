
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <!-- Header Start -->
    <header class="lg:w-full lg:h-[110vh] md:w-full md:h-[110vh] sm:w-full sm:h-[110vh] bg-[#00A6B7]">
        <div class="flex justify-between py-5">
            <div class="lg:flex md:flex sm:flex gap-2 px-10">
                <img src="img/Group 1961.png" alt="logo" class="lg:w-10 lg:h-10 lg:ml-10 md:w-10 md:h-10 md:ml-10 sm:w-10 sm:h-10 sm:ml-10">
                <h1 class="text-white py-2"><b>mangcoding</b></h1>
            </div>
            <nav>
                <ul class="lg:flex gap-5 text-white items-center space-x-1 md:items-center z-[0] md:z-auto md:static absolute bg-[#092032] md:bg-transparent w-full
                     left-0 md:w-auto  md:py-0 py-4 md:pl-0 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
                    <li> <a href="#" class="px-5 hover:font-bold hover:scale-110" ><b>Home</b></a></li>
                    <li> <a href="#" class="px-5 hover:font-bold hover:scale-110" >About</a></li>
                    <li> <a href="#" class="px-5 hover:font-bold hover:scale-110" >Services</a></li>
                    <li> <a href="#" class="px-5 hover:font-bold hover:scale-110" >Work</a></li>
                    <li> <a href="#" class="px-5 hover:font-bold hover:scale-110" >Blog</a></li>
                    <li> <a href="#" class="px-5 hover:font-bold hover:scale-110" >Resource</a></li>
                    <li> <a href="#" class="px-5 hover:font-bold hover:scale-110" >Contact</a></li>
                </ul>
            </nav> 
            <div id="right" class=" flex items-center gap-5">
                <button type="button" class="py-1 px-6 bg-[#0C3E63] hover:bg-[#092032] hover:scale-110 rounded-full text-white text-sm">Build Website</button>
                <button type="button" class="w-6 h-6 mr-10 hover:font-bold hover:scale-110 "><img src="img/Group.png" alt=""></button>
            </div>
            <span class="text-4xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>
        <div class="mt-40 ml-20 text-white">
            <img src="img/Group 1597882704.png" alt="" class="absolute top-[90px]">
            <h3>Build your website</h3>  
            <img src="img/Vector 390.png" alt="" class="absolute ml-[570px] top-[195px]">
            <h1 class="lg:text-6xl sm:text-3xl font-bold pt-5">Develop your idea with <span class="text-[#004248]">Mangcoding</span> <br>
                <span class="text-[#004248]">Team</span> Through
                Digital Products</h1>
            <p class="mt-5">Provide Website creation for your company ( Shopify, WordPrees, and Other )</p>
            <img src="img/Group 1597882703.png" alt="" class="absolute ml-[750px] top-[400px]">
            <img src="img/Group 1597882705.png" alt="" class="absolute ml-[500px] top-[500px]">
            <img src="img/Group 1597882706.png" alt="" class="absolute ml-[300x] top-[500px] py-10">
        </div>
        <div class="mt-5 ml-20">
            <button type="button" class=" mr-5 py-2 px-6 bg-[#0C3E63] rounded-full text-white hover:font-bold hover:scale-110 ">Build Website</button>
            <button type="button" class="py-2 px-6 bg-[#00A6B7] rounded-full text-white border hover:font-bold hover:scale-110 ">Explors Blog</button>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Start -->
    <section class="lg:w-full lg:h-[630vh] sm:w-full sm:h-[530vh]">
        <div class="text-center py-10">
            <h2 class="font-bold">Brands that Trust us</h2>
        </div>
        <div class="flex items-center justify-center ">
            <img src="img/image 1.png" alt="">
            <img src="img/image 2.png" alt="">
            <img src="img/image 3.png" alt="">
            <img src="img/image 4.png" alt="">
        </div>
        <div class="flex  items-center justify-center mt-5 gap-10 ">
            <img src="img/image 2.png" alt="">
            <img src="img/image 4.png" alt="">
            <img src="img/image 1.png" alt="">
            <img src="img/image 3.png" alt="">
        </div>
        <div class="lg:w-[1200px] lg:h-[550px] sm:w-[800px] sm:h-[550px] bg-[#0C3E63] mx-auto mt-20 ">
            <div class="ml-10">
                <button type="button" class="bg-[#3D6582] px-6 py-2 rounded-full lg:mt-20 sm:mt-10 text-white hover:font-bold hover:scale-110 ">Services</button>
                <h2 class="text-white lg:text-5xl sm:text-3xl font-bold mt-5 ">Modern solutions to <br> Empoweryour business</h2>
                <button
                    class="py-2 px-3 bg-[#0C3E63] rounded-full text-white border absolute lg:left-[980px] lg:top-[1250px] sm:right-10 hover:font-bold hover:scale-110 ">Our
                    Services</button>
                <div class="flex gap-10 mt-10">
                    <div class="lg:w-[350px] lg:h-[200px] bg-[#FFFFFF] rounded-lg lg:mt-10">
                        <img src="img/image 10.png" alt="" class="py-4 px-2 ml-3">
                        <h3 class="font-bold ml-3 px-2">Shopify Theme Development</h3>
                        <p class="px-4 py-2 text-sm">Start from <b>700 USD</b> for project base or <b>35 USD</b><br>per hour</p>
                    </div>
                    <div class="lg:w-[350px] lg:h-[200px] rounded-lg lg:mt-10 text-white">
                        <img src="img/Vector.png" alt="" class="py-4 px-2">
                        <h3 class="font-bold">WordPress Theme Development</h3>
                        <p class="py-2 text-sm">Start from <b>600 USD</b> for project base or  <b>35 USD</b><br>per hour</p>
                    </div>
                    <div class="lg:w-[350px] lg:h-[200px] rounded-lg lg:mt-10 text-white ">
                        <img src="img/php2 logo.png" alt="" class="py-8 px-2">
                        <h3 class="font-bold">Shopify Theme Development</h3>
                        <p class="py-2 text-sm">Start from <b>700 USD</b>  for project base or <b>35 USD</b><br>per hour</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="bg-[#0C1320] px-6 py-2 rounded-full mt-20 text-white ml-20 hover:font-bold hover:scale-110">Work</button>
            <h1 class=" lg:text-6xl sm:text-3xl font-bold ml-20 mt-10">Realizing the unimagined <br> To make impact</h1>
            <button type="button" class="px-6 py-2 rounded-full mt-20 border absolute lg:left-[1050px] lg:top-[1750px] sm:right-10 sm:top-[1650px] hover:font-bold hover:scale-110">Cek Our
                Work</button>
        </div>
        <div class=" lg:w-[560px] lg:h-[507px] sm:w-[280px] sm:h-[253px] flex gap-5 ml-20 mt-20">
            <img src="img/Frame 1597882694.png" alt="">
            <img src="img/Frame 1597882692.png" alt="">
        </div>
        <div class="flex ml-20 mt-3 gap-10">
            <h1 class="lg:text-xs sm:text-xs"><b>BEA CUKAI SANGATTA</b><br>
                <p>www.bcsangatta.beacukai.go.id</p>
            </h1>
            <img src="img/image 1 (1).png" alt="" class="w-[37px] h-[32px]">
            <img src="img/Group 2067.png" alt="" class="w-[250px] h-[32px]">
            </h1>
            <h1 class="text-xs"><b>Cargo Udara</b><br>
                <p>www.bcsangatta.beacukai.go.id</p>
            </h1>
            <img src="img/image 1 (1).png" alt="" class="w-[37px] h-[32px]">
            <img src="img/Group 2067.png" alt="" class="w-[250px] h-[32px]">
            </h1>
        </div>
        <div class=" lg:w-[560px] lg:h-[507px] sm:w-[280px] sm:h-[253px] flex gap-5 ml-20 mt-5">
            <img src="img/Frame 1597882694.png" alt="">
            <img src="img/Frame 1597882692.png" alt="">
        </div>
        <div class="flex ml-20 mt-3 gap-10">
            <h1 class="text-xs"><b>Cargo Udara</b><br>
                <p>www.bcsangatta.beacukai.go.id</p>
            </h1>
            <img src="img/image 1 (1).png" alt="" class="w-[37px] h-[32px]">
            <img src="img/Group 2067.png" alt="" class="w-[250px] h-[32px]">
            </h1>
            <h1 class="text-xs"><b>BEA CUKAI SANGATTA</b><br>
                <p>www.bcsangatta.beacukai.go.id</p>
            </h1 >
            <img src="img/image 1 (1).png" alt="" class="w-[37px] h-[32px]">
            <img src="img/Group 2067.png" alt="" class="w-[250px] h-[32px]">
            </h1>
        </div>
        <div class="lg:w-[1200px] lg:h-[600px] sm:w-[1200px] sm:h-[600px] bg-[#0C3E63] mx-auto mt-20 ">
            <div class="ml-10">
                <button type="button" class="bg-[#3D6582] px-6 py-2 rounded-full mt-20 text-white hover:font-bold hover:scale-110">Testimonial</button>
                <h2 class="text-white lg:text-5xl sm:text-3xl font-bold py-4">Don't just take our <br>word For it</h2>
                <div class="flex gap-10">
                    <div class="lg:w-[1200px] lg:h-[250px] sm:w-[600px] sm:h-[250px] bg-[#FFFFFF] rounded-lg mt-10">
                        <img src="img/Frame 1597882675.png" alt="" class="py-4 px-2 ml-3">
                        <p class=" lg:text-sm sm:text-xs">Lörem ipsum oligt trirad. Der analigt. Euronade hexafade. Tesat vädiskap att makrosm.
                            Gångfartsgata dor kvasibälig udebelt. Lörem ipsum oligt trirad. Der analigt.
                            Euronade hexafade. Tesat vädiskap att makrosm. Gångfartsgata dor kvasibälig udebelt. </p>
                        <p class="px-5 lg:text-sm sm:text-xs mt-5"> <b>Riko Sapto Dimo</b><br>Managing Directore Orely.co</p>
                    </div>
                    <div class="lg:w-[750px] lg:h-[250px] sm::w-[375px] sm:h-[250px] bg-[#FFFFFF] rounded-lg mt-10">
                        <img src="img/Frame 1597882675 (1).png" alt="" class="py-4 px-2 ml-3">
                        <p class="px-5 lg:text-sm sm:text-xs">Lörem ipsum oligt trirad. Der analigt. Euronade hexafade. Tesat vädiskap att makrosm.
                            Gångfartsgata dor kvasibälig udebelt. Lörem ipsum oligt trirad. Der analigt.
                            Euronade hexafade. Tesat vädiskap att makrosm. Gångfartsgata dor kvasibälig udebelt. </p>
                        <p class="px-5 lg:text-sm sm:text-xs mt-2"> <b>Anderboard</b><br>Managing</p>
        
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="text-center">
                <button type="button" class="bg-[#0C1320] px-6 py-2 rounded-full mt-20 text-white hover:font-bold hover:scale-110">Blog</button>
                <h1 class=" lg:text-6xl sm:text-3xl font-bold">From Our Blog</h1>
            </div>
            <div class="flex gap-5 mt-10 lg:w-[500px] lg:h-[270px] ml-10 sm:w-[300px] sm:h-[150px] sm:ml-10">
                <img src="img/Frame 1597882698.png" alt="">
                <img src="img/Frame 1597882699.png" alt="">
                <img src="img/Frame 1597882700.png" alt="">
            </div>
            <div class="flex gap-3 mt-5 ml-10">
                <h2>Cara menggunakan Flex dengan benar
                    <p>Lörem ipsum sun beras på muv. Vihibur kivahät. Proplang dihapp. <br>september 6, 2022</p>
                </h2>
                <h2>Cara menggunakan Flex dengan benar
                    <p>Lörem ipsum sun beras på muv. Vihibur kivahät. Proplang dihapp. <br>september 6, 2022</p>
                </h2>
                <h2>Cara menggunakan Flex dengan benar
                    <p>Lörem ipsum sun beras på muv. Vihibur kivahät. Proplang dihapp. <br>september 6, 2022</p>
                </h2>
            </div>
            <div class="text-center">
                <button type="button" class="bg-[#0C3E63] px-6 py-2 rounded-full mt-20 text-white hover:font-bold hover:scale-110">Explor Blog</button>
            </div>
        </div>
    </section>

    <!-- Galeri End -->

    <!-- Footer Start -->
    <footer class="w-full h-[100vh] bg-[#05080F]">
        <div class="flex py-5">
            <div class="flex gap-2">
                <img src="img/Group 1961.png" alt="" class="w-10 h-10 ml-10">
                <h1 class="text-white">mangcoding</h1>
            </div>
            <nav>
                <ul class="flex gap-20 text-white ml-40 ">
                    <li> <a href="#" class="ml-40 hover:font-bold hover:scale-110">Page</a></li>
                    <li> <a href="#" class="hover:font-bold hover:scale-110">Service</a></li>
                    <li> <a href="#" class="ml-40 hover:font-bold hover:scale-110">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="flex text-[#969696] gap-10 ml-10 ">
            <p>Lörem ipsum od ohet dilogi. Bell trabel, samuligt, ohöbel <br>utom diska.
                Jinesade bel när feras redorade i belogi. FAR<br> paratyp i muvåning, och pesask vyfisat.
                Viktiga poddradio<br> har un mad och inde.
            </p>
            <p>Home<br>
                Blog<br>
                Work
            </p>
            <p>Custom WordPress Theme Development<br>
                Custom Plugin WordPress<br>
                Custom Shopify Theme Development<br>
                Custom App for Shopify<br>
                Web Application
            </p>
            <div>
                <img src="img/a (1).png" alt="">
                <img src="img/a (2).png" alt="">
                <img src="img/a (3).png" alt="">
            </div>
            <p>
                karang tengah, Cibadak - Sukabumi<br>
                0266-6532078/ WA:0857-5940-2332<br>
                info@mangcoding.com
            </p>
        </div>
        <h1 class="text-white text-center py-5 mr-40 mt-10">Trusted partners</h1>
        <div class="flex justify-center gap-20 ml-40 ">
            <img src="img/b (4).png" alt="" class="ml-40">
            <img src="img/b (3).png" alt="">
            <img src="img/b (2).png" alt="">
        </div>
        <div>
            <img src="img/b (1).png" alt="" class="ml-[36%] mt-5">
        </div>
        <div>
            <p class=" lg:absolute sm:absolute text-white lg:mt-32 right-5">© 2022 Mangcoding | Powered by mangcoding</p>
        </div>
    </footer>
  </body>
</html>