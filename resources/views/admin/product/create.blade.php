@extends('admin.master')

@section('title')
    <title>Create Product</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Product</h4>
                            <div class="card-header-action">
                                <a href="{{ route('product.index') }}" class="btn btn-outline-warning">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- CSRF protection -->

                                <!-- Product Name -->
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter product name" required>
                                </div>

                                <!-- Product Description -->
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description" rows="3"
                                        placeholder="Enter product description" required></textarea>
                                </div>

                                <!-- Product Price -->
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" step="0.01" name="price" class="form-control" id="price"
                                        placeholder="Enter product price" required>
                                </div>

                                <!-- Product Image -->
                                <div class="form-group">
                                    <label for="image">Product Image</label>
                                    <input type="file" name="image" class="form-control-file" id="image" required
                                        onchange="previewImage(event)">
                                </div>

                                <!-- Image Preview -->
                                <div class="form-group">
                                    <label>Image Preview</label><br>
                                    <img id="image-preview" src="" alt="Image Preview"
                                        style="max-width: 300px; display: none;">
                                </div>

                                <!-- Product Category -->
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category_id" class="form-control" id="category" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript to handle image preview -->
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('image-preview');
                output.src = reader.result;
                output.style.display = 'block'; // Show the image preview
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
