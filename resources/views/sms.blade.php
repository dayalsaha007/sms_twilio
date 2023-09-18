

<form method="POST" action="{{ route('send.sms') }}">
    @csrf

    <input type="text" name="number" placeholder="Enter your phone number"><br><br>
    <input type="text" name="message" placeholder="Enter your message"> <br><br>

    <button type="submit">Send Sms</button>


</form>