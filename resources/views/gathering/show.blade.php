@extends('layouts.base')

@section('body')
<div class="mt-12 text-center">
    <h1 class="text-amber-100 text-2xl font-bold">{{$gathering->note}}</h1>
    <h2 class="text-amber-100 text-lg font-bold">{{$gathering->date}}</h2>
    <div class="flex justify-center items-center" x-data="beerNumber()">
        <button type="button" @click="modify(-1)" class="h-14 w-14 border-amber-100 stroke-amber-100 hover:stroke-amber-300 hover:border-amber-300 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </button>
        <span class="text-amber-100 text-6xl mx-6 font-bold" x-text="beers"></span>
        <button type="button" @click="modify(1)" class="h-14 w-14 border-amber-100 stroke-amber-100 hover:stroke-amber-300 hover:border-amber-300 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    </div>
</div>
<script>
    function beerNumber() {
        return {
            beers: {{$gathering->beers}},
            message: '',
            modify(value) {
                fetch('{{$gathering->id}}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                    },
                    body: '{"beers":  ' + (this.beers+value) + ', "_method": "PUT"}'
                })
                    .then((response) => response.json())
                    .then((num) => this.beers = num)
                    .catch(() => {
                        this.message = 'Ooops! Something went wrong!'
                    })
            }
        }
    }
</script>
@endsection
