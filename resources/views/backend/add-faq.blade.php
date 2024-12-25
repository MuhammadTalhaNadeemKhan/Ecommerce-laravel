@extends('backend.layouts.app')

@section('title', 'add-faq')

@section('content')
                    <div class="main-content">
                        
                        <div class="main-content-inner">
                            
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Add Faq</h3>
                                    @if (session('success'))
                                    <div>{{ session('success') }}</div>
                                @endif
                            
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Faqs</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Add Faq</div>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="wg-box">
                                    <form class="form-new-product form-style-1" action="{{ route('admin.addfaq.store') }}" method="POST">
                                        @csrf
                                        <fieldset class="name">
                                            <div class="body-title">ID</div>
                                            <input class="flex-grow" type="text" placeholder="Add ID" name="id" tabindex="0" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title">Add Question</div>
                                            <input class="flex-grow" type="text" placeholder="Add Question" name="question" tabindex="0" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title">Add Answer</div>
                                            <input class="flex-grow" type="text" placeholder="Add Answer" name="answer" tabindex="0" value="" aria-required="true" required="">
                                        </fieldset>
                                        <div class="bot">
                                            <div></div>
                                            <button class="tf-button w208" type="submit">Save</button>
                                        </div>
                                    </form>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
@endsection