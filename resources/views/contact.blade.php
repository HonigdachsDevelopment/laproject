@extends ('layouts.master')
@section('content')
<x-formonly-wrapper>


        <form action="{{ route('contact')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Your name here">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control" placeholder="your subject here">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="form-control" rows="6" placeholder="Give us a note"></textarea>
            </div>
            <input type="submit" class="btn btn-sm btn-outline-success" value="Send Email">
        </form>



</x-formonly-wrapper>
@endsection
