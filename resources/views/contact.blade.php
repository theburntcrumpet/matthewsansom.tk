@extends("layout")
@section("title", "Contact")

@section("content")
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-8">
                <h2>Contact Me</h2>
            <form method="post" action="/contact">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="emailid" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input name="from" type="text" class="form-control" id="emailid" placeholder="Email (required)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subjectid" class="col-sm-3 col-form-label">Subject</label>
                    <div class="col-sm-9">
                        <input name="subject" type="text" class="form-control" id="subjectid" placeholder="Subject (required)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="messageid" class="col-sm-3 col-form-label">Message</label>
                    <div class="col-sm-9">
                        <textarea name="content" class="form-control" id="messageid" placeholder="Message (required)"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-primary">Send Message!</button>
                        </div>
                    </div>
            </form>
        </div>
    <div class="col-md-4">
        <h2>Other Ways to Get In Touch</h2>
        <p>Github: <a href="https://github.com/theburntcrumpet">theburntcrumpet</a></p>
        <p>Twitter: <a href="https://twitter.com/theburntcrumpet">@theburntcrumpet</a></p>
    </div>
    </div>   
</div>

@endsection