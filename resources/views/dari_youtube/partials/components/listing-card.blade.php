@props(['listing'])

<x-card>
<div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <a href="/listings/{{$listing['id']}}">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{asset('images/no-image.png')}}"
                            alt=""
                        />
                        </a>
                        <div>
                            <h3 class="text-2xl">
                                <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{$listing['description']}}</div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Laravel</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">API</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Backend</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Vue</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$listing['company']}}
                            </div>
                        </div>
                    </div>
                </div>
</x-card>