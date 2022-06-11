@props(['comment'])

<article class="flex items-start gap-4 mb-8 last:mb-0 bg-gray-50 p-4 rounded-xl">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{$comment->id}}" alt="" class="rounded-xl" width="60">
    </div>

    <div>
        <header class="mb-6">
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs text-gray-500">Posted
                <time>{{$comment->created_at}}</time>
            </p>
        </header>

        <p>{{$comment->body}}</p>
    </div>
</article>