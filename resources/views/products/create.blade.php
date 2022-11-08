<form class="bg-gray-300  rounded mb-4" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex justify-between mx-5 place-content-center py-2">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="description" placeholder="Description" required>
        <input type="numeric" name="price" placeholder="Price" required>
    </div>
</form>