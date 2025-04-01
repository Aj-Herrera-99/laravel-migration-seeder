<nav
    class="bg-[#25282d] w-[20%] h-screen border-r border-r-neutral-100 fixed top-0 left-0 p-4 uppercase overflow-y-scroll ">
    navbar giusto per rendere la ui leggermente più carina
    <ul class="mt-8 space-y-2 [&_li]:hover:text-amber-600 [&_li]:cursor-pointer">
        @for ($i = 0; $i < 10; $i++)
            <li>Lorem, ipsum dolor.</li>
            <li>lorem ipsum</li>
            <li>Lorem.</li>
        @endfor
    </ul>
</nav>
