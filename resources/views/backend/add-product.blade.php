@extends('backend.layouts.app')

@section('title', 'add-product')

@section('content')
                    
<div class="main-content">
    
    <div class="main-content-inner">
        
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Add Product</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="#"><div class="text-tiny">Ecommerce</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Add product</div>
                    </li>
                </ul>
            </div>
            
            <form class="tf-section-2 form-add-product" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="wg-box">
                    <fieldset class="name">
                        <div class="body-title mb-10">Product name <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter product name" name="name" value="" required>
                        <div class="text-tiny">Do not exceed 20 characters when entering the product name.</div>
                    </fieldset>
                    <div class="gap22 cols">
                        <fieldset class="category">
                            <div class="body-title mb-10">Category <span class="tf-color-1">*</span></div>
                            <div class="select">
                                <select name="category" required>
                                    <option>Choose category</option>
                                    <option>Sofa</option>
                                    <option>Chair</option>
                                    <option>Decor</option>
                                    <option>Indoor</option>
                                    <option>Outdoor</option>
                                </select>
                            </div>
                        </fieldset>
                        <fieldset class="male">
                            <div class="body-title mb-10">Quantity <span class="tf-color-1">*</span></div>
                            <div class="select">
                                <select name="quantity" id="quantity-select">
                                    <option>1</option>
                                    <option>5</option>
                                    <option>10+</option>
                                </select>
                                <input type="number" name="quantity_manual" id="quantity-manual" class="hidden" placeholder="Enter quantity manually" style="display:none;">
                            </div>
                        </fieldset>
                    </div>
                    <fieldset class="brand">
                        <div class="body-title mb-10">Brand <span class="tf-color-1">*</span></div>
                        <div class="select">
                            <select name="brand" id="brand-select">
                                <option>Royal</option>
                                <option>Urban</option>
                                <option>Acme</option>
                                <option value="other">Other (manual entry)</option>
                            </select>
                            <input type="text" name="brand_manual" id="brand-manual" class="hidden" placeholder="Enter brand manually" style="display:none;">
                        </div>
                    </fieldset>
                    <fieldset class="description">
                        <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                        <textarea class="mb-10" name="description" placeholder="Description" required></textarea>
                        <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                    </fieldset>
                </div>
                <div class="wg-box">
                    <fieldset>
                        <div class="body-title mb-10">Upload images</div>
                        <div class="upload-image mb-16">
                            <div class="item">
                                <img src={{ url('backend/assets/images/upload/upload-1.png') }} alt="">
                            </div>
                            <div class="item">
                                <img src={{ url('backend/assets/images/upload/upload-2.png') }} alt="">
                            </div>
                            <div class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                    <input type="file" id="myFile" name="images[]" multiple>
                                </label>
                            </div>
                        </div>
                        <div class="body-text">You need to add at least 1 image. Pay attention to the quality of the pictures you add, comply with the background color standards. Pictures must be in certain dimensions. Notice that the product shows all the details</div>
                    </fieldset>
                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Add size</div>
                            <div class="select mb-10">
                                <select name="size">
                                    <option>EU - 44</option>
                                    <option>EU - 40</option>
                                    <option>EU - 50</option>
                                </select>
                            </div>
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title mb-10">Product date</div>
                            <div class="select">
                                <input type="date" name="date" value="2023-11-20">
                            </div>
                        </fieldset>
                    </div>
                    <div class="cols gap10">
                        <button class="tf-button w-full" type="submit">Add product</button>
                        <button class="tf-button style-1 w-full" type="submit">Save product</button>
                        <a href="#" class="tf-button style-2 w-full">Schedule</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Toggle between selecting brand from dropdown or manual input
    document.getElementById('brand-select').addEventListener('change', function () {
        var brandInput = document.getElementById('brand-manual');
        if (this.value === 'other') {
            brandInput.style.display = 'block';
        } else {
            brandInput.style.display = 'none';
        }
    });

    // Toggle between selecting quantity from dropdown or manual input
    document.getElementById('quantity-select').addEventListener('change', function () {
        var quantityInput = document.getElementById('quantity-manual');
        if (this.value === '10+') {
            quantityInput.style.display = 'block';
        } else {
            quantityInput.style.display = 'none';
        }
    });
</script>

@endsection
