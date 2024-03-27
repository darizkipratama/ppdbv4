<nav class="row py-3 gx-0 px-3 px-md-4 bg-white">
    <div class="col-6">
        <img src="{{ asset('img/TSL-Islamic-School-kecil.png') }}" alt="logoppdb" class="logonav" />
    </div>

    <div class="col-6 text-end">
        <div class="d-flex justify-content-end">
            <a class="btn btn-orange text-white me-2" target="_blank" href="https://wa.me/6285179676003/">
                <i class="bi bi-chat-left-text"></i>
            </a>
            <div>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
