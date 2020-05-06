@extends('layouts.app')

@section('content')
    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Create Post</h2>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="/posts" method="POST">
                @csrf
                <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
                                <label for="title" class="">Title</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                            <textarea id="mytextarea" type="text" id="body" name="body" rows="2"
                                      class="form-control md-textarea">
                                {{old('body')}}
                            </textarea>
                                <label for="message">Post Content</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="text-center text-md-left">
                        <button type="submit" class="btn btn-primary">
                            Create Post
                        </button>
                    </div>
                </form>


                <div class="status"></div>
            </div>

        </div>

    </section>
    <!--Section: Contact v.2-->
@endsection
