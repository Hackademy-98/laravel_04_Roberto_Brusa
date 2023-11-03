<x-layout>
    <x-navbar/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <form method="POST" action="{{route('send.email')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" placeholder="Nome" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="emailForm" class="form-label">Email address</label>
                        <input name="mail" placeholder="Email" type="email" class="form-control" id="emailForm" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">messaggio</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>