<h2>Buat Account Baru!</h2>
<h3>Sign Up Form</h3>
<form action="/register/add" method="post">
    {{ csrf_field() }}
    First name: <br><br>
    <input type="text" name="firstname" id="firstname"><br><br>
    Last name: <br><br>
    <input type="text" name="lastname" id="lastname"><br><br>
    Gender: <br><br>
    <input type="radio" name="gender" id="male" value="male">
    Male<br>
    <input type="radio" name="gender" id="female" value="female">
    Female<br>
    <input type="radio" name="gender" id="other" value="other">
    Other<br><br>
    <label for="nationality">Nationality:</label> <br><br>
    <select id="nationality" name="nationality">
        <option value="indonesia">Indonesian</option>
        <option value="singapura">Singaporean</option>
        <option value="malaysia">Malaysian</option>
        <option value="thailand">Australian</option>
    </select> <br><br>
    <label for="languagespoken">Language Spoken:</label> <br><br>
        <input type="checkbox" name="indonesiaLang" value="Bahasa Indonesia" /> Bahasa Indonesia <br>
        <input type="checkbox" name="englishLang" value="English" /> English <br>
        <input type="checkbox" name="otherLang" value="Other" /> Other <br>
    <br>
    Bio: <br><br>
    <textarea name="bio" id="bio" cols="30" rows="10">

    </textarea> <br>
    <input type="submit" value="Sign Up">



</form>