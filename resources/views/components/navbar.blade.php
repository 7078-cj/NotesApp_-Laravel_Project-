@extends('index')

    <nav class=" flex flex-row gap-2 justify-between mx-10 items-center">
                <h1>
                    <a class="home" href="/">Notes</a>
                </h1>
                <div class="flex flex-row gap-5">
                    <div class = "headTags personal">
                        <p><a href="/" class="">{{ Auth::user()->name }}'s Notes</a></p>
                    </div>
                    <div class = "headTags community">
                        <p><a href="/communityNotes">Community</a></p>
                    </div>
                </div>
              <div class="flex flex-row gap-5 items-center">
                <h3>Welcome!! {{ Auth::user()->name }} </h3>
                <form action="/logout" method="POST" class="">
                    @csrf
                    <button class=" bg-slate-200 border p-2 rounded-md mt-5 justify-center">logout</button>
                </form>
              </div>
    </nav>

