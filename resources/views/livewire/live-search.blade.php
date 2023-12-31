<div>
    <form>
        <fieldset class="uk-fieldset">
            <div class="uk-margin">
                <input class="uk-input form" wire:model="search" name="nama" type="text" placeholder="Cari Produk Disini" aria-label="Input">
                <button type="submit" class="uk-button custom-green-button uk-form-width-small">Cari</button>
            </div>
        </fieldset>
    </form>

    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
        @forelse($items as $item)
            <div>
                <div class="uk-card uk-card-default badge-color uk-card uk-card-hover">
                    <div class="uk-card-media-top">
                        <img src="{{ $item->foto }}" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">{{ $item->nama }}</h3>
                        <p>{{ $item->keterangan }}</p>
                        <p>Rp {{ number_format($item->harga) }}</p>
                        <!-- Tambahkan tombol Buy atau link ke halaman pembelian di sini -->
                    </div>
                </div>
            </div>
        @empty
            <p>No products found</p>
        @endforelse
    </div>
</div>
