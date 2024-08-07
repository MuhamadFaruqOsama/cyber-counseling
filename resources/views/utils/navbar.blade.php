<nav class="fixed bottom-0 border-t-[1px] py-4 w-full bg-white">
    <div class="flex justify-around">
        <a href="/" class="text-center {{ $title == "Dashboard" ? "text-custom-blue" : "text-gray-400" }}">
            <i class="fa-solid fa-house-chimney text-lg"></i>
            <div class="text-xs">Home</div>
        </a>
        <a href="/education" class="text-center {{ $title == "Education" ? "text-custom-blue" : "text-gray-400" }}">
            <i class="fa-solid fa-graduation-cap text-lg"></i>
            <div class="text-xs">Education</div>
        </a>
        <a href="/profile" class="text-center {{ $title == "Profile" ? "text-custom-blue" : "text-gray-400" }}">
            <i class="fa-solid fa-user text-lg"></i>
            <div class="text-xs">Profile</div>
        </a>
    </div>
</nav>