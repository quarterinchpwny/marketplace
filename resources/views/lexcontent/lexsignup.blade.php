<section id='signup'>
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
    <h1>Add Contact</h1>
    <form method="POST" action="{{ route('add.contact.post') }}">
        @csrf
        <input type="text" name="username" placeholder="Username" /> <br />
        <input type="text" name="password" placeholder="Password" /> <br />
        <input type="text" name="first_name" placeholder="First Name" /> <br />
        <input type="text" name="last_name" placeholder="Last Name" /> <br />
        <input type="text" name="email" placeholder="Email" /> <br />
        <input type="text" name="contact_no" placeholder="Contact No." /> <br />
        <button type="submit">Submit</button>
    </form>
    </div>
</section>