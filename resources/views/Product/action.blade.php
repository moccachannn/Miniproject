<div class="d-flex">
    <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi bi-clipboard-check"></i></a>
    <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi bi-pencil-fill"></i></a>
    <div>
        <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-trash2-fill"></i></button>
        </form>
    </div>
</div>
