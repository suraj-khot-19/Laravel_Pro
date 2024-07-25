<h1>Login</h1>
<form action="loginform" method="GET">
    {{-- CSRF means Cross Site Request Forgery --}}
    {{-- Cross-Site Request Forgery (CSRF) is a type of malicious exploit where unauthorized commands are performed on behalf of an authenticated user. In a CSRF attack, an attacker tricks an unsuspecting user into performing actions they didn’t intend to execute. For example, an attacker could change an authenticated user’s email address without their knowledge.

Laravel provides built-in CSRF protection to prevent such attacks. Here’s how it works:
CSRF Tokens:
Laravel automatically generates a unique CSRF “token” for each active user session managed by the application.
This token is stored in the user’s session and changes each time the session is regenerated.
A malicious application cannot access this token because it’s tied to the user’s session. --}}
    {{-- if we not add csrf here then on submit "page expired" error is comming --}}
    @csrf
    <input type="text" name="username" placeholder="enter name" /> <br><br>
    <input type="password" name="password" placeholder="enter password" /> <br><br>
    <button type="submit">Login</button>
</form>
