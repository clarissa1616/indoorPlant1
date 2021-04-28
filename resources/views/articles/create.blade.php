<x-layouts>
    <x-slot name="title">Crea l'articolo</x-slot>
    
    <div class="container-fluid bg-create" >
        <div class="row" style="justify-content: center">
            <div class="col-12 col-md-6 col-lg-6 text-center">
                @if (session('message'))
                <div class="alert bg-transparent">
                    <p class="font-weight-bold">{{session('message')}}</p>
                    <a class="btn btn-cst-create text-white" href="{{route('articles.index')}}">Torna al blog</a>
                </div>
                @endif
                <h1 class="mt-5 mb-3">Scrivi il tuo articolo</h1>
                <form method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group cst-label">
                        <label class="lable-create ">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="title">
                    </div>
                    <div class="form-group">
                        <label class="lable-create" for="body">I tuoi consigli</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control" style="box-shadow: olive"></textarea>
                    </div>

                    <div class="form-group title-lablel ">
                        <label for="img" class="font-weight-bold">Immagine</label>
                        <input type="file" class="form-control img-form" id="img" name="img" aria-describedby="title">
                    </div>
                    <button type="submit" class="btn btn-primary btn-cst-create mb-3">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts>

