@extends('master.master-pages')
@section('content')
        <div class="main-content">
               <div class="contact">
               <h2 style="margin-bottom:20px">Contact</h2>
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label>Email address:</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label>Subject:</label>
                            <input type="text" class="form-control" id="subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Message:</label>
                            <textarea class="form-control" rows="8" id="message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-success btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
@endsection()
