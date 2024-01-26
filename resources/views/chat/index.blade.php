<x-layout>
    <div class="w-screen h-[calc(100vh-17vh)] flex items-center justify-center">
        <div class="w-1/5 h-5/6 bg-orange-600">
            <h2 class="text-2xl px-2 pt-2">Previously chats</h2>
            <a href="#">
                <div class="w-full h-1/8 bg-gray-600 p-2 my-4 flex gap-x-12 items-center justify-between flex-row-reverse rounded-md hover:bg-gray-700">
                    <div class="bg-black rounded-full h-16 w-16">
                        <img src="" alt="">
                    </div>
                    <div>
                        <h2 class="font-bold">John Smith</h2>
                        <p>Yeah that's pretty interesting what...</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="w-full h-1/8 bg-gray-600 p-2 my-4 flex gap-x-12 items-center justify-between flex-row-reverse rounded-md hover:bg-gray-700">
                    <div class="bg-black rounded-full h-16 w-16">
                        <img src="" alt="">
                    </div>
                    <div>
                        <h2 class="font-bold">Eva Wise</h2>
                        <p>Hmm okay, if he said that then i ca...</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="w-1/2 h-5/6 bg-gray-900 relative">
            <div class="h-full w-full flex">
                <div class="w-full">
                    <div class="bg-gray-600 w-1/3  h-auto m-4 rounded-3xl h-16 pl-4 pt-2 text-white flex items-center gap-x-4 p-2">
                        <div class="bg-red-600 rounded-full w-8  h-8">
                            <img src="" alt="">
                        </div>
                        <div>
                            <p>asddassda</p>
                            <p class="text-xs mt-2">{{date('h:i:s A')}}</p>
                        </div>
                    </div>
                    <div class="bg-gray-600 w-1/3 h-auto m-4 rounded-3xl h-16 pl-4 pt-2 text-white text-end float-right p-4">
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia temporibus veritatis repellendus at ad, voluptatem corporis doloremque debitis quibusdam voluptate nemo iure illo quae ipsum earum excepturi facilis voluptatibus. Laboriosam?</p>
                            <p class="text-xs mt-2">Seen {{date('h:i:s A')}} <i class="fa-solid fa-check"></i></p>
                        </div>
                    </div>
                </div>
            </div>
            <form action="/chat/message/{{$user}}" method="POST">
                @csrf
                <div class="absolute bottom-0 w-full flex">
                    <textarea name="message" id="message" cols="50" rows="2" class="w-full bg-gray-600 pl-2" placeholder="Type your message..."></textarea>
                    <button type="submit" class="absolute right-2 top-1 bg-orange-600 p-2 rounded-lg text-white hover:bg-gray-900 hover:text-orange-600 font-semibold">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>