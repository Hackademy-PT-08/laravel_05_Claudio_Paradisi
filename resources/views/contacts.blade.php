<x-layout>
    @if(session('emailError'))
    <div class="alert alert-danger my-5">
            {{ session('emailError') }}
        </div>
    @endif


<div class="container-fluid m-auto">
    <div class="row justify-content-center">
        <div class="col-8">
            <form method="POST" action="{{route('contact.submit')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome e <span class="text-danger">Cognome</span></label>
                    <input type="text" name="name" class="form-control" id="name">
                    
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Inserisci la tua <span class="text-danger">Email</span></label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">dacci anche il pin del tuo conto in banca</div>
                </div>
                <div class="mb-3 form-check">
                <label for="message" class="form-label">Il tuo <span class="text-danger">messaggio</span></label>
                <textarea name="user_message" id="message" cols="30" rows="7" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>




</x-layout>