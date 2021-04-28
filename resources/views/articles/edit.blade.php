<x-layouts>
    <x-slot name="title">Modifica l'articolo</x-slot>
    <div class="container-fluid bg-create" >
        <div class="row" style="justify-content: center">
            <div class="col-12 col-md-6 col-lg-6 text-center mt-5">
                @if (session('message'))
                <div class="alert bg-transparent">
                    <p class="font-weight-bold">{{session('message')}}</p>
                    <a class="btn btn-cst-create text-white" href="{{route('articles.index')}}">Torna al blog</a>
                </div>
                @endif
               
                <form method="POST" action="{{route('articles.update',compact('article'))}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group ">
                        <label class="lable-create" for="title">Modifica il titolo</label>
                        <input type="text" class="form-control" id="title" value="{{$article->title}}" name="title" aria-describedby="title">
                    </div>
                    <div class="form-group ">
                        <label class="lable-create" for="body">Modifica l'articolo</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$article->body}}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-cst-create mb-3">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts>

