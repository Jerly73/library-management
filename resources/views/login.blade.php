

<x-layout title="Cena Library">

<style>

    body {
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color:  #ffffff;
    margin: 0;
}

.login-container {
    background-color: #e5e5e5;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 350px;
    position: relative;
}

.logo {
    margin-bottom: 30px;
}

.logo-text {
    font-size: 2.5em;
    color: #923535; /* SaddleBrown */
    font-weight: 20;
    display: block;
}


.logo-subtext {
    font-size: 1.8em;
    color: #923535; /* SaddleBrown */
    font-weight: bold;
    display: block;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

.form-group input {
    width: 100%;
    padding: 12px;
    background-color: #6a272719;
    border: 1px solid #6a272719;
    border-radius: 5px;
    box-sizing: border-box; /* Include padding and border in the element's total width and height */
    font-size: 1em;
}

.form-group small {
    display: block;
    margin-top: 5px;
    color: #666;
    font-size: 0.8em;
}

.sign-in-btn {
    background-color: #923535; /* SaddleBrown */
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    font-size: 1.1em;
    font-weight: bold;
    width: 100%;
    margin-top: 10px;
    transition: background-color 0.3s ease;
}

.sign-in-btn:hover {
    background-color: #000000cd; /* Sienna */
}

.user-type-buttons {
    margin-top: 15px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.teacher-btn,
.admin-btn {
align-items: center;
    background-color: #6a272757; /* LightGray */
    color: #333;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    font-size: 1em;
    font-weight: bold;
    width: 50%;
    transition: background-color 0.3s ease;
     margin-left: 70px;
}

.teacher-btn:hover {
    background-color: #00000030; /* Silver */
}

.admin-btn:hover {
    background-color: #00000030; /* Silver */
}

.student-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    display: flex;
    align-items: center;
    font-size: 15px;
    font-weight: bold;
    color: #8B4513;
}

.student-icon {
    margin-left: 8px;
    font-size: 1.2em;
}

a {
  text-decoration: none;
}


</style>


        <form method="POST" action="{{ route('login') }}">
            @csrf

     <div class="login-container">
        <div class="logo">
            <span class="logo-text"><span style="font-weight: bold;">C</span>ena</span>
            <span class="logo-subtext">LIBRARY</span>
        </div>
        <div class="login-form">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="Enter Email Address">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter Password">
                <small>It must be a combination of minimum 8 letters, numbers, and symbols.</small>
            </div>
            <button class="sign-in-btn">Sign In</button>
            <div class="user-type-buttons">
                <a href="/login1" class="teacher-btn">Teacher</a>
                <a href="/login2" class="admin-btn">Admin</a>
            </div>
        </div>
        <div class="student-badge">
            <span class="student-text">Student</span>
            <span class="student-icon"> 
</span>
        </div>
    </div>

</x-layout>
