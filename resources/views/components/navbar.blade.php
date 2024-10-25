@extends('index')

    <nav class=" flex flex-row flex-wrap gap-2 justify-around p-4 items-center z-10  bg-slate-300 flex-1 max-w-screen font-robotoMono">
                <h1>
                    <!--<a class="home  md:flex lg:flex xl:flex bg-white bg-opacity-60 rounded p-2 m-2 shadow text-center" href="/ ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M12 2.25c-2.429 0-4.817.178-7.152.521C2.87 3.061 1.5 4.795 1.5 6.741v6.018c0 1.946 1.37 3.68 3.348 3.97.877.129 1.761.234 2.652.316V21a.75.75 0 0 0 1.28.53l4.184-4.183a.39.39 0 0 1 .266-.112c2.006-.05 3.982-.22 5.922-.506 1.978-.29 3.348-2.023 3.348-3.97V6.741c0-1.947-1.37-3.68-3.348-3.97A49.145 49.145 0 0 0 12 2.25ZM8.25 8.625a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Zm2.625 1.125a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875-1.125a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" clip-rule="evenodd" />
                        </svg>
                        Notes
                    </a>-->
                        
                        <!--DITO YUNG KAPAG MOBILE-->
                            <div class="flex flex-row gap-2 items-center">
                                <div id="menu" class="flex flex-col self-start md:hidden lg:hidden xl:hidden mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
                                    </svg>
                                </div>
                                <a class="home  md:flex lg:flex xl:flex bg-white bg-opacity-60 rounded p-2 m-2 shadow text-center flex " href="/ ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M12 2.25c-2.429 0-4.817.178-7.152.521C2.87 3.061 1.5 4.795 1.5 6.741v6.018c0 1.946 1.37 3.68 3.348 3.97.877.129 1.761.234 2.652.316V21a.75.75 0 0 0 1.28.53l4.184-4.183a.39.39 0 0 1 .266-.112c2.006-.05 3.982-.22 5.922-.506 1.978-.29 3.348-2.023 3.348-3.97V6.741c0-1.947-1.37-3.68-3.348-3.97A49.145 49.145 0 0 0 12 2.25ZM8.25 8.625a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Zm2.625 1.125a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875-1.125a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" clip-rule="evenodd" />
                                    </svg>
                                    Notes
                                </a>
                                <div id="menuCard" class="hidden rounded-lg bg-slate-300 bg-opacity-90 outline outline-5 outline-white absolute inset-0 m-auto p-6 w-80 h-80 flex flex-col gap-10 z-10">
                                    <div class = "headTags personal">
                                        <p><a href="/" class="flex flex-row gap-2 items-center justify-center ">
                                            <span class="bg-gradient-to-b from-blue-200 to-blue-300 border-white rounded p-2 m-2 shadow w-full max-w-xs flex flex-col items-center justify-center text-center ">
                                                {{ Auth::user()->name }}'s Notes
                                            </span></a></p>
                                    </div>
                                    <div class = "headTags community">
                                        <p><a href="/communityNotes" class="text-md border bg-gradient-to-t from-blue-200 to-blue-300 border-white p-2 mr-2 shadow w-full max-w-xs flex flex-col items-center justify-center text-center ">Community</a></p>
                                    </div>
                                    <div class = "headTags bookmarks">
                                        <p><a href="/bookmarks" class="text-md border bg-gradient-to-b from-blue-200 to-blue-300  border-white p-2 mr-2 shadow w-full max-w-xs flex flex-col items-center justify-center text-center ">Bookmarks</a></p>
                                    </div>
                                </div>
                            </div>
                </h1>

                <!--DITO KAPAG DESKTOP-->
                <div class="flex flex-row gap-5 items-center justify-center z-30 hidden  md:flex lg:flex xl:flex  ">
                    <div class = "headTags personal">
                        
                        <p ><a href="/" class="flex flex-row gap-2 items-center justify-center">
                            <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="h-20 w-20 rounded-full" alt="">
                            <span class="bg-white bg-opacity-60 rounded p-2 m-2 shadow">
                                {{ Auth::user()->name }}'s Notes
                            </span></a></p>
                    </div>
                    <div class = "headTags community">
                        <p><a href="/communityNotes" class="text-md bg-white bg-opacity-60 rounded p-2 m-2 shadow">Community</a></p>
                    </div>
                    <div class = "headTags community">
                        <p><a href="/bookmarks" class="text-md border bg-white bg-opacity-60 rounded p-2 m-2 shadow">Bookmarks</a></p>
                    </div>
                </div>
              <div class="flex flex-row gap-5 items-center cursor-pointer bg-slate-200 p-5 rounded-full" id="profile">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, , 1);transform: ;msFilter:;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
                  
              </div>
    </nav>
    <div class="hidden flex flex-col items-center justify-center gap-2 absolute z-10 right-10 top-40" id="profileCard">
        <div class="relative w-[300px] min-h-[400px] p-5 bg-cover bg-center rounded-lg shadow-lg border-5 border-white overflow-hidden bg-slate-50"
            style="{{ Auth::user()->avatar ? 'background-image: url(' . asset('storage/' . Auth::user()->avatar) . ');' : 'background-image: url(' . asset('storage/uploads/image/nullUser.png') . ');' }}">
        
            
            <div class="absolute inset-0 bg-slate-700 bg-opacity-50 "></div>
                <h3 class="absolute bottom-[140px] left-0 right-0 text-white text-center z-10 text-lg">
                    {{ Auth::user()->name }}
                </h3>
                <p class="absolute bottom-[115px] left-0 right-0 text-white text-center z-10 text-sm ">
                    {{ Auth::user()->email }}
                </p>
            <div class="absolute bottom-5 left-0 right-0 w-full px-5 box-border z-10 ">
                <a href="/editUser/{{ Auth::user()->id }}" class="flex justify-center items-center block w-full p-2 rounded-lg text-white text-sm mb-2 bg-gradient-to-r from-blue-300 to-blue-900 hover:opacity-80">Edit Profile</a>
                <form action="/logout" method="POST" class="">
                    @csrf
                    <button class=" block w-full p-2 rounded-lg text-white text-sm bg-gradient-to-r from-blue-500 to-blue-500 hover:opacity-80">logout</button>
                </form>
            
            </div>
        </div>
    </div>
    

    @vite('resources/js/navbar.js')