<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>

    <!-- Include Polaris styles -->
    <link rel="stylesheet" href="https://cdn.shopify.com/static/fonts/inter/v4/styles.css" />
    <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@9.0.0/build/esm/styles.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            padding: 20px;
        }

        .Polaris-Page {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .Polaris-Page__Header {
            margin-bottom: 20px;
        }

        .Polaris-Page__Title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .Polaris-TextField__Input {
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #dfe3e8;
            width: 100%;
            box-sizing: border-box;
        }

        .Polaris-Button {
            width: 100%;
            padding: 10px;
            background-color: #5c6ac4;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .Polaris-Button:hover {
            background-color: #49539d;
        }

        .Polaris-InlineError {
            color: #d72c0d;
            font-size: 14px;
            margin-top: 5px;
        }

        .Polaris-FormLayout__Item {
            margin-bottom: 20px;
        }

        .Polaris-Label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #3e4e63;
        }
    </style>
</head>

<body>
    <div class="Polaris-Page">
        <div class="Polaris-Page__Header">
            <h1 class="Polaris-Page__Title">Create Product</h1>
        </div>

        <!-- Success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Error message -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="Polaris-FormLayout">
                <!-- Product Title -->
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Label" for="title">Product Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="Polaris-TextField__Input" placeholder="Enter product title">
                    @error('title')
                        <div class="Polaris-InlineError">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Label" for="description">Description</label>
                    <textarea id="description" name="description" class="Polaris-TextField__Input" rows="4"
                        placeholder="Enter product description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="Polaris-InlineError">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Price -->
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Label" for="price">Price</label>
                    <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}"
                        class="Polaris-TextField__Input" placeholder="Enter product price">
                    @error('price')
                        <div class="Polaris-InlineError">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Product Type -->
                <div class="Polaris-FormLayout__Item">
                    <label class="Polaris-Label" for="product_type">Product Type</label>
                    <input type="text" id="product_type" name="product_type" value="{{ old('product_type') }}"
                        class="Polaris-TextField__Input" placeholder="Enter product type">
                    @error('product_type')
                        <div class="Polaris-InlineError">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="Polaris-FormLayout__Item">
                    <button type="submit" class="Polaris-Button Polaris-Button--primary">Create Product</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>