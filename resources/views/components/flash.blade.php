@if(session()->has('success'))
    <div
            x-data="{show: true}"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            class="fixed right-4 bottom-4 bg-red-500 rounded-xl text-white px-6 py-2">
        <p>{{session('success')}}</p>
    </div>
@endif